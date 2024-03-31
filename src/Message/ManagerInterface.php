<?php

namespace UzDevid\Telegram\Bot\Message;

use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

interface ManagerInterface {
    public function method(MethodInterface $method): static;

    public function sendRequest(): array|null;
}