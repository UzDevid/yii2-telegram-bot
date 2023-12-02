<?php

namespace uzdevid\telegram\bot\message\messages\keyboard;

use uzdevid\telegram\bot\core\AttributeContainer;

abstract class Keyboard {
    use AttributeContainer;

    protected string $name;

    /**
     * @param RowInterface $row
     *
     * @return $this
     */
    public function addRow(RowInterface $row): self {
        $this->pushAttribute($this->name, $row->getButtons());
        return $this;
    }
}