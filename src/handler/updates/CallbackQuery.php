<?php

namespace uzdevid\telegram\bot\handler\updates;

use uzdevid\telegram\bot\handler\UpdateInterface;
use uzdevid\telegram\bot\handler\UpdateTrait;

class CallbackQuery extends \uzdevid\telegram\bot\objects\CallbackQuery implements UpdateInterface {
    use UpdateTrait;

    public static function objectName(): string {
        return 'callback_query';
    }
}