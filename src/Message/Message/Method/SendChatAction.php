<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;

class SendChatAction extends Method implements MethodInterface {
    /**
     * @return string
     */
    public function methodName(): string {
        return 'sendChatAction';
    }
}