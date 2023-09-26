<?php

namespace uzdevid\telegram\bot\message\messages\types;

use uzdevid\telegram\bot\message\messages\MethodInterface;
use uzdevid\telegram\bot\message\messages\MessageTrait;
use uzdevid\telegram\bot\message\messages\MessageType;

class PhotoMessage extends MessageType implements MethodInterface {
    use MessageTrait;

    protected static string $__photo = 'photo';
    protected static string $__caption = 'caption';
    protected static string $__hasSpoiler = 'has_spoiler';

    public function __construct(string $photo, array $attributes = []) {
        parent::__construct($attributes);
        $this->addAttribute(self::$__photo, $photo);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "sendPhoto";
    }

    /**
     * @param string $caption
     *
     * @return $this
     */
    public function caption(string $caption): static {
        $this->addAttribute(self::$__caption, $caption);
        return $this;
    }

    /**
     * @param bool $hasSpoiler
     *
     * @return $this
     */
    public function hasSpoiler(bool $hasSpoiler = true): static {
        $this->addAttribute(self::$__hasSpoiler, $hasSpoiler);
        return $this;
    }
}