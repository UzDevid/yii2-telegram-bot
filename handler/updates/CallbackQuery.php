<?php

namespace uzdevid\telegram\bot\handler\updates;

use uzdevid\telegram\bot\Service;

class CallbackQuery extends \uzdevid\telegram\bot\objects\CallbackQuery implements UpdateInterface {
    use UpdateTrait;

    public static function objectName(): string {
        return Service::camelToSnake(basename(static::class));
    }
}