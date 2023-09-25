<?php

namespace uzdevid\telegram\bot\message\messages\keyboard;

use uzdevid\telegram\bot\AttributeComponentTrait;

abstract class Keyboard {
    use AttributeComponentTrait;

    protected string $name;

    /**
     * @param RowInterface $row
     * @return $this
     */
    public function addRow(RowInterface $row): self {
        $this->pushAttribute($this->name, $row->getButtons());
        return $this;
    }
}