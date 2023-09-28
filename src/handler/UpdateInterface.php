<?php

namespace uzdevid\telegram\bot\handler;

interface UpdateInterface {
    public static function objectName(): string;

    public function body(): object;

    public function makeObjects(): array;
}