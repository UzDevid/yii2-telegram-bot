<?php

namespace uzdevid\telegram\bot\message\message\method;

use uzdevid\telegram\bot\message\message\Method;
use uzdevid\telegram\bot\message\message\MethodInterface;

class GetChatMember extends Method implements MethodInterface {
    protected static string $__user_id = 'user_id';

    /**
     * @param int $userId
     * @param array $attributes
     */
    public function __construct(int $userId, array $attributes = []) {
        parent::__construct($attributes);
        $this->addAttribute(self::$__user_id, $userId);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "getChatMember";
    }
}