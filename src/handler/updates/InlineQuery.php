<?php

namespace uzdevid\telegram\bot\handler\updates;

use uzdevid\telegram\bot\handler\UpdateInterface;
use uzdevid\telegram\bot\handler\UpdateTrait;

class InlineQuery extends \uzdevid\telegram\bot\objects\InlineQuery implements UpdateInterface {
    use UpdateTrait;

    public static function objectName(): string {
        return 'inline_query';
    }
}