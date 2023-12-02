<?php

namespace uzdevid\telegram\bot\message\messages\keyboard;

interface ButtonInterface {
    public function getAttributes(): array;
}