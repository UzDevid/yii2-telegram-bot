<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ChatInviteLink
 *
 * @link https://core.telegram.org/bots/api#chatinvitelink
 *
 * Represents an invite link for a chat.
 *
 * @property string $inviteLink
 * @property User $creator
 * @property bool $createsJoinRequest
 * @property bool $isPrimary
 * @property bool $isRevoked
 * @property string $name
 * @property int $expireDate
 * @property int $memberLimit
 * @property int $pendingJoinRequestsCount
 */
class ChatInviteLink extends Type {
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'creator' => User::class,
        ];
    }
}