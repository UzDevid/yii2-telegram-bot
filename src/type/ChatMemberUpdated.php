<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ChatMemberUpdated
 *
 * @link https://core.telegram.org/bots/api#chatmemberupdated
 *
 * This object represents changes in the status of a chat member.
 */
class ChatMemberUpdated extends Type {
    public Chat $chat;
    public User $from;
    public int $date;
    public array $oldChatMember;
    public array $newChatMember;
    public ChatInviteLink $inviteLink;
    public bool $viaChatFolderInviteLink;

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