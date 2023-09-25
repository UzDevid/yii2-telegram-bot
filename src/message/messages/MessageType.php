<?php

namespace uzdevid\telegram\bot\message\messages;

use uzdevid\telegram\bot\BaseBot;
use uzdevid\telegram\bot\message\messages\entity\MessageEntityInterface;
use uzdevid\telegram\bot\message\messages\keyboard\ReplyMarkupInterface;
use uzdevid\telegram\bot\AttributeComponentTrait;

class MessageType extends BaseBot {
    use AttributeComponentTrait;

    /**
     * @return array
     */
    public function getPayload(): array {
        return $this->attributes;
    }
}