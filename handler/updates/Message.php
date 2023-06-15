<?php

namespace uzdevid\telegram\bot\handler\updates;

use uzdevid\telegram\bot\Service;

class Message extends \uzdevid\telegram\bot\objects\Message implements UpdateInterface {
    use UpdateTrait;

    public static function objectName(): string {
        return Service::camelToSnake(basename(static::class));
    }
}