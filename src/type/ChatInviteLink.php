<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ChatInviteLink
 *
 * @link https://core.telegram.org/bots/api#chatinvitelink
 *
 * Represents an invite link for a chat.
 */
class ChatInviteLink extends Type {
    public string $inviteLink;
    public User $creator;
    public bool $createsJoinRequest;
    public bool $isPrimary;
    public bool $isRevoked;
    public string $name;
    public int $expireDate;
    public int $memberLimit;
    public int $pendingJoinRequestsCount;

    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'creator' => [User::class, 'creator'],
        ];
    }
}