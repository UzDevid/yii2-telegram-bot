<?php

namespace uzdevid\telegram\bot\message\messages;

interface MessageInterface {
    public function methodName(): string;

    public function getAttributes(): array;

    public function setAttributes(array $attributes): void;

    public function addAttribute(string $name, mixed $value);

    public function getAttribute(string $name): mixed;

    public function issetAttribute(string $name): bool;

    public function getPayload(): array;
}