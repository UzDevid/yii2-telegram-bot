<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ReplyKeyboardRemove
 *
 * @link https://core.telegram.org/bots/api#replykeyboardremove
 *
 * Upon receiving a message with this object, Telegram clients will remove the current custom keyboard and display the default letter-keyboard.
 * By default, custom keyboards are displayed until a new keyboard is sent by a bot.
 * An exception is made for one-time keyboards that are hidden immediately after the user presses a button (see ReplyKeyboardMarkup).
 *
 * @property bool $removeKeyboard
 * @property bool $selective
 */
class ReplyKeyboardRemove extends Type { }