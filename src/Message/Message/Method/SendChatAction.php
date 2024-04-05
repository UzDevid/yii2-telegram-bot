<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class SendChatAction extends Method implements MethodInterface {
    protected static string $__action = 'action';

    public function __construct(string $action, array $attributes = []) {
        $this->addAttribute(self::$__action, $action);
        parent::__construct($attributes);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return 'sendChatAction';
    }
}