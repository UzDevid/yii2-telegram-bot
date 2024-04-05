<?php

namespace UzDevid\Telegram\Bot\Message\Message\Method;

use UzDevid\Telegram\Bot\Message\Message\Method;
use UzDevid\Telegram\Bot\Message\Message\MethodInterface;
use UzDevid\Telegram\Bot\Type\Chat;

class GetChat extends Method implements MethodInterface {
    /**
     * @return string
     */
    public function methodName(): string {
        return 'getChat';
    }

    /**
     * @return string
     */
    public function response(): string {
        return Chat::class;
    }
}