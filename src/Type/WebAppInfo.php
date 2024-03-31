<?php

namespace UzDevid\Telegram\Bot\Type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type WebAppInfo
 *
 * @link https://core.telegram.org/bots/api#webappinfo
 *
 * Describes a Web App.
 *
 * @property string $url
 */
class WebAppInfo extends Type {
    public string $url;
}