<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ChatJoinRequest
 *
 * @link https://core.telegram.org/bots/api#chatjoinrequest
 *
 * Represents a join request sent to a chat.
 */
class ChatJoinRequest extends Type {
    public Chat $chat;
    public User $from;
    public int $userChatId;
    public int $date;
    public string $bio;
    public ChatInviteLink $inviteLink;

    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'chat' => [Chat::class, 'chat'],
            'from' => [User::class, 'from'],
            'inviteLink' => [ChatInviteLink::class, 'inviteLink'],
        ];
    }
}