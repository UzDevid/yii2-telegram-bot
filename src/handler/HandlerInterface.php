<?php

namespace uzdevid\telegram\bot\handler;

use uzdevid\telegram\bot\Bot;
use uzdevid\telegram\bot\objects\CallbackQuery;
use uzdevid\telegram\bot\objects\InlineQuery;
use uzdevid\telegram\bot\objects\Message;

interface HandlerInterface {
    public static function canHandle(Bot $bot, Message|CallbackQuery|InlineQuery $updateBody): bool;

    public function handle(Bot $bot, Message|CallbackQuery|InlineQuery $updateBody): void;
}