<?php

namespace uzdevid\telegram\bot\handler;

use uzdevid\telegram\bot\Bot;
use uzdevid\telegram\bot\exceptions\InvalidCallException;
use uzdevid\telegram\bot\type\CallbackQuery;
use uzdevid\telegram\bot\type\InlineQuery;
use uzdevid\telegram\bot\type\Message;

class Handler {
    protected Bot $botInstance;
    protected array $data = [];
    private bool $isHandled = false;

    public function __construct(Bot $botInstance, array $data) {
        $this->botInstance = $botInstance;
        $this->data = $data;
    }

    public function on(string $handler): static {
        if (!(
            is_subclass_of($handler, MessageUpdateInterface::class) ||
            is_subclass_of($handler, CallbackQueryUpdateInterface::class) ||
            is_subclass_of($handler, InlineQueryUpdateInterface::class)
        )) {
            throw new InvalidCallException('Update class must be instance of ' . MessageUpdateInterface::class . ' or ' . CallbackQueryUpdateInterface::class . ' or ' . InlineQueryUpdateInterface::class . ' interface');
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

    protected function matchedUpdate(string $updateClassName): bool {
        $objectName = call_user_func([$updateClassName, 'objectName']);
        return !$this->isHandled && $this->match($objectName, $this->data);
    }

    protected function canHandle(MessageUpdateInterface|CallbackQueryUpdateInterface|InlineQueryUpdateInterface $update, Message|CallbackQuery|InlineQuery $body): bool {
        return $update->canHandle($this->botInstance, $body);
    }

    protected function match(string $objectName, array $data): bool {
        return array_key_exists($objectName, $data);
    }
}