<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\Object;

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
class CallbackQuery extends Object {
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