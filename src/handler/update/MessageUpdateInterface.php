<?php

namespace uzdevid\telegram\bot\handler\update;

use uzdevid\telegram\bot\Bot;
use uzdevid\telegram\bot\type\Message;

interface MessageUpdateInterface {
    /**
     * @param Bot $bot
     * @param Message $message
     *
     * @return bool
     */
    public static function canHandle(Bot $bot, Message $message): bool;

    /**
     * @param Bot $bot
     * @param Message $message
     *
     * @return void
     */
    public function handle(Bot $bot, Message $message): void;
}