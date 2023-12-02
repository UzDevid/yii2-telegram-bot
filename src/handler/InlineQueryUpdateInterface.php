<?php

namespace uzdevid\telegram\bot\handler;

use uzdevid\telegram\bot\Bot;
use uzdevid\telegram\bot\type\InlineQuery;

interface InlineQueryUpdateInterface {
    /**
     * @param Bot $bot
     * @param InlineQuery $query
     *
     * @return bool
     */
    public static function canHandle(Bot $bot, InlineQuery $query): bool;

    /**
     * @param Bot $bot
     * @param InlineQuery $query
     *
     * @return void
     */
    public function handle(Bot $bot, InlineQuery $query): void;
}