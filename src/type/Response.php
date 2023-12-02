<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Class Response
 *
 * @package uzdevid\telegram\bot\objects
 */
class Response extends Type {


    public bool $ok;
    public int $messageId;
    public User $from;
    public User $user;
    public Chat $chat;
    public int $date;
    public string $text;
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'from' => User::class,
            'user' => User::class,
            'chat' => Chat::class,
        ];
    }
}