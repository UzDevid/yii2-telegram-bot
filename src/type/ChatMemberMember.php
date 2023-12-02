<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ChatMemberMember
 *
 * @link https://core.telegram.org/bots/api#chatmembermember
 *
 * Represents a chat member that has no additional privileges or restrictions.
 *
 * @property string $status
 * @property User $user
 */
class ChatMemberMember extends Type {
    public string $status;
    public User $user;

    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'user' => [User::class, 'user'],
        ];
    }
}