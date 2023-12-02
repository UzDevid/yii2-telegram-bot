<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ChatMemberBanned
 *
 * @link https://core.telegram.org/bots/api#chatmemberbanned
 *
 * Represents a chat member that was banned in the chat and can't return to the chat or view chat messages.
 *
 * @property string $status
 * @property User $user
 * @property int $untilDate
 */
class ChatMemberBanned extends Type {
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'user' => User::class,
        ];
    }
}