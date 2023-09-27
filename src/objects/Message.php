<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\Object;

/**
 * Class Message
 *
 * @package uzdevid\telegram\bot\handler
 *
 * @property int $messageId
 * @property User $from
 * @property Chat $chat
 * @property int $date
 * @property string $text
 * @property array $replyMarkup
 */
class Message extends Object {
    /**
     * @return array
     */
    public static function attributeObjects(): array {
        return [
            'from' => User::class,
            'chat' => Chat::class,
        ];
    }
}