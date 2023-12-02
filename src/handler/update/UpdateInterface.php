<?php

namespace uzdevid\telegram\bot\handler\update;

use uzdevid\telegram\bot\type\CallbackQuery;
use uzdevid\telegram\bot\type\InlineQuery;
use uzdevid\telegram\bot\type\Message;

interface UpdateInterface {
    /**
     * @return string
     */
    public static function objectName(): string;

    /**
     * @return Message|CallbackQuery|InlineQuery
     */
    public function body(): Message|CallbackQuery|InlineQuery;
}