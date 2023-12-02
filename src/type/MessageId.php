<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type MessageId
 *
 * @link https://core.telegram.org/bots/api#messageid
 */
class MessageId extends Type {
    public int $messageId;
}