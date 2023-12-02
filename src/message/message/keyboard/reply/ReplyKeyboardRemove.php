<?php

namespace uzdevid\telegram\bot\message\message\keyboard\reply;

use uzdevid\telegram\bot\core\AttributeContainer;
use uzdevid\telegram\bot\message\message\keyboard\ReplyMarkupInterface;

class ReplyKeyboardRemove implements ReplyMarkupInterface {
    use AttributeContainer;

    public function __construct() {
        $this->addAttribute('remove_keyboard', true);
    }

    /**
     * @param bool $selective
     *
     * @return $this
     */
    public function selective(bool $selective): self {
        $this->addAttribute('selective', $selective);
        return $this;
    }
}