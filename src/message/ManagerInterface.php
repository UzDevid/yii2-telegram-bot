<?php

namespace uzdevid\telegram\bot\message;

use uzdevid\telegram\bot\message\messages\MethodInterface;

interface ManagerInterface {
    public function method(MethodInterface $method): static;

    public function sendRequest(): array|null;
}