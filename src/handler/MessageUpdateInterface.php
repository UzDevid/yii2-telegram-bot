<?php

namespace uzdevid\telegram\bot\handler;

use uzdevid\telegram\bot\Bot;
use uzdevid\telegram\bot\type\Message;

interface MessageUpdateInterface {
    public static function canHandle(Bot $bot, Message $message): bool;

    public function handle(Bot $bot, Message $message): void;
}