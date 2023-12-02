<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ForumTopicEdited
 *
 * @link https://core.telegram.org/bots/api#forumtopicedited
 *
 * This object represents a service message about an edited forum topic.
 */
class ForumTopicEdited extends Type {

    public string $name;
    public int $iconCustomEmojiId;
}