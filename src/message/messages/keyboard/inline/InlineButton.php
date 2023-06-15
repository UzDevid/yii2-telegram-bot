<?php

namespace uzdevid\telegram\bot\message\messages\keyboard\inline;

use uzdevid\telegram\bot\AttributeComponentTrait;
use uzdevid\telegram\bot\message\messages\keyboard\ButtonInterface;

class InlineButton implements ButtonInterface {
    use AttributeComponentTrait;

    public function text(string $text): static {
        $this->addAttribute('text', $text);
        return $this;
    }

    public function callbackData(string $callbackData): static {
        $this->addAttribute('callback_data', $callbackData);
        return $this;
    }

    public function url(string $url): static {
        $this->addAttribute('url', $url);
        return $this;
    }
}