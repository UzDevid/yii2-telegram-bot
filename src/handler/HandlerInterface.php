<?php

namespace uzdevid\telegram\bot\handler;

use uzdevid\telegram\bot\Bot;
use uzdevid\telegram\bot\handler\updates\CallbackQueryUpdate;
use uzdevid\telegram\bot\handler\updates\InlineQueryUpdate;
use uzdevid\telegram\bot\handler\updates\MessageUpdate;

interface HandlerInterface {
    public static function canHandle(Bot $bot, MessageUpdate|CallbackQueryUpdate|InlineQueryUpdate $update): bool;

    public function handle(Bot $bot, MessageUpdate|CallbackQueryUpdate|InlineQueryUpdate $update): void;
}