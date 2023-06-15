<?php

namespace uzdevid\telegram\bot\message\messages\keyboard\reply;

use uzdevid\telegram\bot\AttributeComponentTrait;
use uzdevid\telegram\bot\message\messages\keyboard\ReplyMarkupInterface;

class ReplyKeyboardRemove implements ReplyMarkupInterface {
    use AttributeComponentTrait;

    public function __construct() {
        $this->addAttribute('remove_keyboard', true);
    }

    public function selective(bool $selective): self {
        $this->addAttribute('selective', $selective);
        return $this;
    }
}