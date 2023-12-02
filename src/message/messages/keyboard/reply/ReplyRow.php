<?php

namespace uzdevid\telegram\bot\message\messages\keyboard\reply;

use uzdevid\telegram\bot\core\AttributeContainer;
use uzdevid\telegram\bot\message\messages\keyboard\ButtonInterface;
use uzdevid\telegram\bot\message\messages\keyboard\RowInterface;

class ReplyRow implements RowInterface {
    use AttributeContainer;

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