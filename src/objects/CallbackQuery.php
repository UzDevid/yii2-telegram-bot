<?php

namespace uzdevid\telegram\bot\objects;

/**
 * Class CallbackQuery
 *
 * @package uzdevid\telegram\bot\objects
 *
 * @property int $updateId
 * @property int $id
 * @property User $from
 * @property Message $message
 * @property string $data
 */
class CallbackQuery {
    use ObjectTrait;

    /**
     * @return array
     */
    public static function attributeObjects(): array {
        return [
            'from' => User::class,
            'chat' => Chat::class,
            'message' => Message::class,
        ];
    }
}