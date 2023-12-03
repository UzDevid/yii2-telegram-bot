<?php

namespace uzdevid\telegram\bot\message\message\keyboard\inline;

use uzdevid\telegram\bot\core\AttributeContainer;
use uzdevid\telegram\bot\message\message\keyboard\ButtonInterface;
use uzdevid\telegram\bot\message\message\keyboard\RowInterface;

class InlineRow implements RowInterface {
    use AttributeContainer;

    /**
     * @param ButtonInterface $button
     *
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