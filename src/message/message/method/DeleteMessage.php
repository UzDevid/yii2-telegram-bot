<?php

namespace uzdevid\telegram\bot\message\message\method;

use uzdevid\telegram\bot\message\message\Method;
use uzdevid\telegram\bot\message\message\MethodInterface;

class DeleteMessage extends Method implements MethodInterface {
    protected static string $__message_id = 'message_id';

    /**
     * @param int $messageId
     * @param array $attributes
     */
    public function __construct(int $messageId, array $attributes = []) {
        parent::__construct($attributes);
        $this->addAttribute(self::$__message_id, $messageId);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "deleteMessage";
    }
}