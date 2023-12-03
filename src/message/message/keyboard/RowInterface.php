<?php

namespace uzdevid\telegram\bot\message\message\keyboard;

interface RowInterface {
    /**
     * @param ButtonInterface $button
     *
     * @return $this
     */
    public function addButton(ButtonInterface $button): static;

    /**
     * @return array
     */
    public function getButtons(): array;
}