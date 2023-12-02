<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ChatJoinRequest
 *
 * @link https://core.telegram.org/bots/api#chatjoinrequest
 *
 * Represents a join request sent to a chat.
 *
 * @property Chat $chat
 * @property User $from
 * @property int $userChatId
 * @property int $date
 * @property string $bio
 * @property ChatInviteLink $inviteLink
 */
class ChatJoinRequest extends Type {
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