<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type VideoChatEnded
 *
 * @link https://core.telegram.org/bots/api#videochatended
 *
 * This object represents a service message about a video chat ended in the chat.
 */
class VideoChatEnded extends Type {
    public int $duration;
}