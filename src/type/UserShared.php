<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type UserShared
 *
 * @link https://core.telegram.org/bots/api#usershared
 *
 * This object contains information about the user whose identifier was shared with the bot using a KeyboardButtonRequestUser button.
 */
class UserShared extends Type {
    public int $requestId;
    public int $userId;
}