<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ChatMemberOwner
 *
 * @link https://core.telegram.org/bots/api#chatmemberowner
 *
 * Represents a chat member that owns the chat and has all administrator privileges.
 */
class ChatMemberOwner extends Type {
    public string $status;
    public User $user;
    public bool $isAnonymous;
    public string $customTitle;

    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'user' => [User::class, 'user'],
        ];
    }
}