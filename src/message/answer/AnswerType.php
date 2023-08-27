<?php

namespace uzdevid\telegram\bot\message\answer;

use uzdevid\telegram\bot\AttributeComponentTrait;
use uzdevid\telegram\bot\BaseBot;

class AnswerType extends BaseBot {
    use AttributeComponentTrait;

    public function getPayload(): array {
        return $this->attributes;
    }
}