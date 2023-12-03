<?php

namespace uzdevid\telegram\bot\handler\update;

use uzdevid\telegram\bot\Bot;
use uzdevid\telegram\bot\type\CallbackQuery;

interface CallbackQueryUpdateInterface extends UpdateInterface {
    /**
     * @param Bot $bot
     * @param CallbackQuery $query
     *
     * @return bool
     */
    public static function canHandle(Bot $bot, CallbackQuery $query): bool;

    /**
     * @param Bot $bot
     * @param CallbackQuery $query
     *
     * @return void
     */
    public function handle(Bot $bot, CallbackQuery $query): void;
}