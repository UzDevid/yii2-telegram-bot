<?php

namespace uzdevid\telegram\bot\handler\updates;

use uzdevid\telegram\bot\handler\UpdateInterface;
use uzdevid\telegram\bot\handler\UpdateTrait;

class Message extends \uzdevid\telegram\bot\objects\Message implements UpdateInterface {
    use UpdateTrait;

    public static function objectName(): string {
        return 'message';
    }
}