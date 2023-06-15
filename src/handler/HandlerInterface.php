<?php

namespace uzdevid\telegram\bot\handler;

interface HandlerInterface {
    public function __construct(array $attributes = []);

    public static function objectName(): string;

    public static function attributeObjects(): array;

    public static function match(array $data): bool;
}