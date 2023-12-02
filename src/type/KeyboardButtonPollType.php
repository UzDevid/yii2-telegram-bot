<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type KeyboardButtonPollType
 *
 * @link https://core.telegram.org/bots/api#keyboardbuttonrequestchat
 *
 * This object represents type of poll, which is allowed to be created and sent when the corresponding button is pressed.
 */
class KeyboardButtonPollType extends Type {
    public string $type;
}