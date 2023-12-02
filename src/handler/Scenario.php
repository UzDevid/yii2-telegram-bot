<?php

namespace uzdevid\telegram\bot\handler;

use uzdevid\telegram\bot\Bot;
use Yii;
use yii\base\InvalidConfigException;

class Scenario {
    protected Bot $botInstance;
    protected array $scenarios = [];

    public function __construct(Bot $botInstance) {
        $this->botInstance = $botInstance;
    }

    public function add(string $name): Scenario {
        return $this->scenarios[$name] = new self($this->botInstance);
    }

    /**
     * @param array $data
     *
     * @return Handler
     * @throws InvalidConfigException
     */
    public function handler(array $data): Handler {
        /** @var Handler $handler */
        $handler = Yii::createObject($this->botInstance->handler, [$this->botInstance, $data, $this]);

        return $handler;
    }
}