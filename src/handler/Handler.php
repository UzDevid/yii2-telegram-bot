<?php

namespace uzdevid\telegram\bot\handler;

use uzdevid\telegram\bot\Bot;
use yii\base\InvalidCallException;

class Handler {
    protected Bot $botInstance;
    protected array $data = [];
    private bool $isHandled = false;

    public function __construct(Bot $botInstance, array $data) {
        $this->botInstance = $botInstance;
        $this->data = $data;
    }

    public function on(string $updateClassName, array|callable $handle, array|string|callable $callback): static {
        if (!is_subclass_of($updateClassName, UpdateInterface::class)) {
            throw new InvalidCallException('Update class must be instance of ' . UpdateInterface::class);
        }

        $objectName = call_user_func([$updateClassName, 'objectName']);

        if ($this->isHandled || !$this->match($objectName, $this->data)) {
            return $this;
        }

        $update = new $updateClassName($objectName, $this->data);

        if (!call_user_func($handle, $this->botInstance, $update->body())) {
            return $this;
        }

        if (is_string($callback)) {
            $callback = [$update, $callback];
        }

        call_user_func($callback, $this->botInstance, $update);
        $this->isHandled = true;

        return $this;
    }

    public function onClass(string $handlerClass): static {
        return $this->on($handlerClass, [$handlerClass, 'handle'], 'callback');
    }

    protected function match(string $objectName, array $data): bool {
        return array_key_exists($objectName, $data);
    }
}