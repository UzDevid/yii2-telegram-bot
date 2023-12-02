<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type PollOption
 *
 * @link https://core.telegram.org/bots/api#polloption
 *
 * This object contains information about one answer option in a poll.
 */
class PollOption extends Type {

    public string $text;
    public int $voterCount;
}