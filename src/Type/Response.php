<?php

namespace UzDevid\Telegram\Bot\Type;

use uzdevid\telegram\bot\core\Type;

/**
 * Class Response
 *
 * @package uzdevid\telegram\bot\objects
 */
class Response extends Type {
    public int $messageId;
    public User $from;
    public User $user;
    public Chat $chat;
    public int $date;
    public string $text;
}