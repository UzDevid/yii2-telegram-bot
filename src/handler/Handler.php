<?php

namespace uzdevid\telegram\bot\handler;

use uzdevid\telegram\bot\Bot;
use uzdevid\telegram\bot\Service;
use uzdevid\telegram\bot\type\CallbackQuery;
use uzdevid\telegram\bot\type\InlineQuery;
use uzdevid\telegram\bot\type\Message;
use yii\base\BaseObject;
use yii\base\InvalidArgumentException;

/**
 * Class Handler
 *
 * @package uzdevid\telegram\bot\handler
 *
 * @property-write array $allowedInterfaces
 * @property-read string $handlersString
 */
class Handler extends BaseObject {
    protected Bot $botInstance;

    protected array $data = [];
    private bool $isHandled = false;
    private array $defaultAllowedInterfaces = [
        MessageUpdateInterface::class,
        CallbackQueryUpdateInterface::class,
        InlineQueryUpdateInterface::class
    ];

    private array $_allowedInterfaces = [];

    /**
     * @param Bot $botInstance
     * @param array $data
     */
    public function __construct(Bot $botInstance, array $data) {
        $this->botInstance = $botInstance;
        $this->data = $this->reformatData($data);

        parent::__construct();
    }

    /**
     * @param array $data
     *
     * @return array
     */
    protected function reformatData(array $data): array {
        foreach ($data as $key => $value) {
            unset($data[$key]);
            $camelCaseName = Service::snakeToCamel($key);

            if (is_array($value)) {
                $value = $this->reformatData($value);
            }

            $data[$camelCaseName] = $value;
        }

        return $data;
    }

    /**
     * @param array $interfaces
     *
     * @return void
     */
    public function setAllowedInterfaces(array $interfaces): void {
        foreach ($interfaces as $interface) {
            if (!class_exists($interfaces)) {
                throw new InvalidArgumentException("Interface {$interface} does not exist");
            }

            if (!interface_exists($interfaces)) {
                throw new InvalidArgumentException("{$interface} is not an interface");
            }
        }

        $this->_allowedInterfaces = $interfaces;
    }

    /**
     * @param string $handler
     *
     * @return $this
     */
    public function on(string $handler): static {
        if (!($this->validateHandler($handler))) {
            throw new InvalidArgumentException("Handler class must be instance of {$this->handlersString} interface");
        }

        if (!$this->matchedUpdate($handler)) {
            return $this;
        }

        /** @var MessageUpdateInterface|CallbackQueryUpdateInterface|InlineQueryUpdateInterface|UpdateInterface $update */
        $update = new $handler($this->data);

        if (!$this->canHandle($update, $update->body())) {
            return $this;
        }

        $update->handle($this->botInstance, $update->body());
        $this->isHandled = true;

        return $this;
    }

    /**
     * @param string $handler
     *
     * @return bool
     */
    protected function validateHandler(string $handler): bool {
        $handlers = array_merge($this->defaultAllowedInterfaces, $this->_allowedInterfaces);
        foreach ($handlers as $interface) {
            if (is_subclass_of($handler, $interface)) {
                return true;
            }
        }

        return false;
    }

    /**
     * @return string
     */
    protected function getHandlersString(): string {
        $handlers = array_merge($this->defaultAllowedInterfaces, $this->_allowedInterfaces);
        $string = implode(' or ', $handlers);

        return rtrim($string, ' or ');
    }

    /**
     * @param string $updateClassName
     *
     * @return bool
     */
    protected function matchedUpdate(string $updateClassName): bool {
        $objectName = call_user_func([$updateClassName, 'objectName']);
        return !$this->isHandled && $this->match($objectName, $this->data);
    }

    /**
     * @param MessageUpdateInterface|CallbackQueryUpdateInterface|InlineQueryUpdateInterface $update
     * @param Message|CallbackQuery|InlineQuery $body
     *
     * @return bool
     */
    protected function canHandle(MessageUpdateInterface|CallbackQueryUpdateInterface|InlineQueryUpdateInterface $update, Message|CallbackQuery|InlineQuery $body): bool {
        return $update->canHandle($this->botInstance, $body);
    }

    /**
     * @param string $objectName
     * @param array $data
     *
     * @return bool
     */
    protected function match(string $objectName, array $data): bool {
        return array_key_exists($objectName, $data);
    }
}