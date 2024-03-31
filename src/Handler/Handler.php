<?php

namespace UzDevid\Telegram\Bot\Handler;

use UzDevid\Telegram\Bot\Handler\Update\Callback\CallbackQueryUpdate;
use uzdevid\telegram\Bot\Handler\Update\Callback\CallbackQueryUpdateInterface;
use UzDevid\Telegram\Bot\Handler\Update\Inline\InlineQueryUpdate;
use uzdevid\telegram\Bot\Handler\Update\Inline\InlineQueryUpdateInterface;
use UzDevid\Telegram\Bot\Handler\Update\Message\MessageUpdate;
use uzdevid\telegram\Bot\Handler\Update\Message\MessageUpdateInterface;
use uzdevid\telegram\Bot\Service;
use yii\base\BaseObject;
use Yiisoft\Hydrator\Hydrator;

/**
 * Class Handler
 *
 * @package UzDevid\Telegram\Bot\handler
 *
 * @property-write array $allowedInterfaces
 * @property-read string $handlersString
 */
class Handler extends BaseObject {
    protected Scenario|null $scenario;

    protected array $data = [];

    private bool $isHandled = false;

    /**
     * @param array $data
     * @param Scenario|null $scenario
     */
    public function __construct(array $data, Scenario|null $scenario = null) {
        $this->scenario = $scenario;

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
     * @param MessageUpdateInterface|CallbackQueryUpdateInterface|InlineQueryUpdateInterface $handler
     *
     * @return $this
     */
    public function on(MessageUpdateInterface|CallbackQueryUpdateInterface|InlineQueryUpdateInterface $handler): static {
        $updateName = $this->getUpdateName($handler);

        if (!$this->isHandled && !$this->match($updateName, $this->data)) {
            return $this;
        }

        /** @var MessageUpdate|CallbackQueryUpdate|InlineQueryUpdate $update */
        $update = (new Hydrator())->create($this->getUpdate($handler), $this->data);

        if (!$handler->canHandle($update)) {
            return $this;
        }

        $handler->handle($update);

        $this->isHandled = true;

        return $this;
    }

    /**
     * @return Scenario|null
     */
    public function end(): Scenario|null {
        return $this->scenario;
    }

    /**
     * @param MessageUpdateInterface|CallbackQueryUpdateInterface|InlineQueryUpdateInterface $handler
     *
     * @return string
     */
    protected function getUpdateName(MessageUpdateInterface|CallbackQueryUpdateInterface|InlineQueryUpdateInterface $handler): string {
        return match (true) {
            $handler instanceof MessageUpdateInterface => 'message',
            $handler instanceof CallbackQueryUpdateInterface => 'callbackQuery',
            $handler instanceof InlineQueryUpdateInterface => 'inlineQuery',
        };
    }

    /**
     * @param MessageUpdateInterface|CallbackQueryUpdateInterface|InlineQueryUpdateInterface $handler
     *
     * @return string
     */
    protected function getUpdate(MessageUpdateInterface|CallbackQueryUpdateInterface|InlineQueryUpdateInterface $handler): string {
        return match (true) {
            $handler instanceof MessageUpdateInterface => MessageUpdate::class,
            $handler instanceof CallbackQueryUpdateInterface => CallbackQueryUpdate::class,
            $handler instanceof InlineQueryUpdateInterface => InlineQueryUpdate::class,
        };
    }

    /**
     * @param MessageUpdateInterface|CallbackQueryUpdateInterface|InlineQueryUpdateInterface $handler
     * @param MessageUpdate|CallbackQueryUpdate|InlineQueryUpdate $update
     *
     * @return bool
     */
    protected function canHandle(MessageUpdateInterface|CallbackQueryUpdateInterface|InlineQueryUpdateInterface $handler, MessageUpdate|CallbackQueryUpdate|InlineQueryUpdate $update): bool {
        return $handler->canHandle($update);
    }

    /**
     * @param string $updateName
     * @param array $data
     *
     * @return bool
     */
    protected function match(string $updateName, array $data): bool {
        return array_key_exists($updateName, $data);
    }
}