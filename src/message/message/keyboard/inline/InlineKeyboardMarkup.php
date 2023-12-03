<?php

namespace uzdevid\telegram\bot\message\message\keyboard\inline;

use uzdevid\telegram\bot\message\message\keyboard\Keyboard;
use uzdevid\telegram\bot\message\message\keyboard\ReplyMarkupInterface;

class InlineKeyboardMarkup extends Keyboard implements ReplyMarkupInterface {
    protected string $name = 'inline_keyboard';
}