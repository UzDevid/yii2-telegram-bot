<?php

namespace uzdevid\telegram\bot\message\message\keyboard\inline;

use uzdevid\telegram\bot\core\AttributeContainer;
use uzdevid\telegram\bot\message\message\keyboard\ButtonInterface;

class InlineButton implements ButtonInterface {
    use AttributeContainer;

    /**
     * @param string $text
     *
     * @return $this
     */
    public function text(string $text): static {
        $this->addAttribute('text', $text);
        return $this;
    }

    /**
     * @param string $callbackData
     *
     * @return $this
     */
    public function callbackData(string $callbackData): static {
        $this->addAttribute('callback_data', $callbackData);
        return $this;
    }

    /**
     * @param string $url
     *
     * @return $this
     */
    public function url(string $url): static {
        $this->addAttribute('url', $url);
        return $this;
    }
}