<?php

namespace uzdevid\telegram\bot\handler\updates;

use uzdevid\telegram\bot\Service;

class InlineQuery extends \uzdevid\telegram\bot\objects\InlineQuery implements UpdateInterface {
    use UpdateTrait;

    public static function objectName(): string {
        return Service::camelToSnake(basename(static::class));
    }
}