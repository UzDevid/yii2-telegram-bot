<?php

namespace uzdevid\telegram\bot\message\messages\keyboard\inline;

use uzdevid\telegram\bot\AttributeComponentTrait;
use uzdevid\telegram\bot\message\messages\keyboard\ButtonInterface;
use uzdevid\telegram\bot\message\messages\keyboard\RowInterface;

class InlineRow implements RowInterface {
    use AttributeComponentTrait;

    /**
     * @param ButtonInterface $button
     * @return $this
     */
    public function addButton(ButtonInterface $button): static {
        $this->pushAttribute('inline_keyboard', $button->getAttributes());
        return $this;
    }

    /**
     * @return array
     */
    public function getButtons(): array {
        return $this->getAttribute('inline_keyboard');
    }
}