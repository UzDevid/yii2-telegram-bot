<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ChatMemberUpdated
 *
 * @link https://core.telegram.org/bots/api#chatmemberupdated
 *
 * This object represents changes in the status of a chat member.
 *
 * @property Chat $chat
 * @property User $from
 * @property int $date
 * @property array $oldChatMember
 * @property array $newChatMember
 * @property ChatInviteLink $inviteLink
 * @property bool $viaChatFolderInviteLink
 */
class ChatMemberUpdated extends Type {
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'chat' => Chat::class,
            'from' => User::class,
            'inviteLink' => ChatInviteLink::class,
        ];
    }
}