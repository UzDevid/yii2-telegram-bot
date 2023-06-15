<?php

namespace uzdevid\telegram\bot\message\messages\types;

use MessageTrait;
use uzdevid\telegram\bot\message\messages\MessageInterface;
use uzdevid\telegram\bot\message\messages\MessageType;

class DocumentMessage extends MessageType implements MessageInterface, DocumentMessageInterface {
    use MessageTrait;

    protected static string $__document = 'document';
    protected static string $__thumbnail = 'thumbnail';
    protected static string $__caption = 'caption';
    protected static string $__disableContentTypeDetection = 'disable_content_type_detection';

    public function __construct(string $document, array $attributes = []) {
        parent::__construct($attributes);
        $this->addAttribute(self::$__document, $document);
    }

    public function methodName(): string {
        return "sendDocument";
    }

    public function thumbnail(string $thumbnail): static {
        $this->addAttribute(self::$__thumbnail, $thumbnail);
        return $this;
    }

    public function caption(string $caption): static {
        $this->addAttribute(self::$__caption, $caption);
        return $this;
    }

    public function disableContentTypeDetection(bool $disableContentTypeDetection): static {
        $this->addAttribute(self::$__disableContentTypeDetection, $disableContentTypeDetection);
        return $this;
    }
}