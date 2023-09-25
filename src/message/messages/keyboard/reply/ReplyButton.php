<?php

namespace uzdevid\telegram\bot\message\messages\keyboard\reply;

use uzdevid\telegram\bot\AttributeComponentTrait;
use uzdevid\telegram\bot\message\messages\keyboard\ButtonInterface;

class ReplyButton implements ButtonInterface {
    use AttributeComponentTrait;

    /**
     * @param string $text
     * @return $this
     */
    public function text(string $text): static {
        $this->addAttribute('text', $text);
        return $this;
    }

    /**
     * @param bool $requestContact
     * @return $this
     */
    public function requestContact(bool $requestContact = true): static {
        $this->addAttribute('request_contact', $requestContact);
        return $this;
    }

    /**
     * @param bool $requestLocation
     * @return $this
     */
    public function requestLocation(bool $requestLocation = true): static {
        $this->addAttribute('request_location', $requestLocation);
        return $this;
    }
}