<?php

namespace uzdevid\telegram\bot\handler\updates;

class Message extends \uzdevid\telegram\bot\objects\Message implements UpdateInterface {
    use UpdateTrait;

    public static function objectName(): string {
        return 'message';
    }
}