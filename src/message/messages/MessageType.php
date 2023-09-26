<?php

namespace uzdevid\telegram\bot\message\messages;

use uzdevid\telegram\bot\AttributeComponentTrait;
use uzdevid\telegram\bot\BaseBot;

class MessageType extends BaseBot {
    use AttributeComponentTrait;

    /**
     * @return array
     */
    public function getPayload(): array {
        return $this->attributes;
    }
}