<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ChatMemberLeft
 *
 * @link https://core.telegram.org/bots/api#chatmemberleft
 *
 * Represents a chat member that isn't currently a member of the chat, but may join it themselves.
 *
 * @property string $status
 * @property User $user
 */
class ChatMemberLeft extends Type {
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'user' => User::class,
        ];
    }
}