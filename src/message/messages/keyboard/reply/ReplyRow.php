<?php

namespace uzdevid\telegram\bot\message\messages\keyboard\reply;

use uzdevid\telegram\bot\AttributeComponentTrait;
use uzdevid\telegram\bot\message\messages\keyboard\ButtonInterface;
use uzdevid\telegram\bot\message\messages\keyboard\RowInterface;

class ReplyRow implements RowInterface {
    use AttributeComponentTrait;

    /**
     * @inheritDoc
     */
    public function addButton(ButtonInterface $button): static {
        $this->pushAttribute('keyboard', $button->getAttributes());
        return $this;
    }

    /**
     * @inheritDoc
     */
    public function getButtons(): array {
        return $this->getAttribute('keyboard');
    }
}