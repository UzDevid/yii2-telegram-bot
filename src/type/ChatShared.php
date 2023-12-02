<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ChatShared
 *
 * @link https://core.telegram.org/bots/api#chatshared
 *
 * This object contains information about the chat whose identifier was shared with the bot using a KeyboardButtonRequestChat button.
 *
 * @property int $requestId
 * @property int $chatId
 */
class ChatShared extends Type { }