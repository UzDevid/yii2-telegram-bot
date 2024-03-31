<?php

namespace UzDevid\Telegram\Bot\Type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type VideoChatParticipantsInvited
 *
 * @link https://core.telegram.org/bots/api#videochatparticipantsinvited
 *
 * This object represents a service message about a video chat ended in the chat.
 */
class VideoChatParticipantsInvited extends Type {
    public User $user;
}