<?php

namespace uzdevid\telegram\bot\message\messages\keyboard;

interface RowInterface {
    public function addButton(ButtonInterface $button): static;

    public function getButtons(): array;
}