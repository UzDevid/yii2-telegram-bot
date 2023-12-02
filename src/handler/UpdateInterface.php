<?php

namespace uzdevid\telegram\bot\handler;

use uzdevid\telegram\bot\type\CallbackQuery;
use uzdevid\telegram\bot\type\InlineQuery;
use uzdevid\telegram\bot\type\Message;

interface UpdateInterface {
    public static function objectName(): string;

    public function body(): Message|CallbackQuery|InlineQuery;

    public function makeObjects(): array;
}