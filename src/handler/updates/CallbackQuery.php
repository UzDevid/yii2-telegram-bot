<?php

namespace uzdevid\telegram\bot\handler\updates;

class CallbackQuery extends \uzdevid\telegram\bot\objects\CallbackQuery implements UpdateInterface {
    use UpdateTrait;

    public static function objectName(): string {
        return 'callback_query';
    }
}