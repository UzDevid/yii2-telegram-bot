<?php

namespace uzdevid\telegram\bot\objects;

/**
 * Class Message
 * @package uzdevid\telegram\bot\handler
 *
 * @property int $messageId
 * @property User $user
 * @property Chat $chat
 * @property int $date
 * @property string $text
 * @property array $replyMarkup
 */
class Message {
    use ObjectTrait;

    public static function attributeObjects(): array {
        return [
            'from' => User::class,
            'chat' => Chat::class,
        ];
    }
}