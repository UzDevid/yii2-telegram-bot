<?php

namespace UzDevid\Telegram\Bot\Type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type BotCommandScopeChatAdministrators
 *
 * @link https://core.telegram.org/bots/api#BotCommandScopeChatAdministrators
 *
 * This object represents a bot command.
 */
class BotCommandScopeChatAdministrators extends Type {
    public string $type;
    public string $chatId;
}