<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ChatMemberOwner
 *
 * @link https://core.telegram.org/bots/api#chatmemberowner
 *
 * Represents a chat member that owns the chat and has all administrator privileges.
 *
 * @property string $status
 * @property User $user
 * @property bool $isAnonymous
 * @property string $customTitle
 */
class ChatMemberOwner extends Type {
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'user' => User::class,
        ];
    }
}