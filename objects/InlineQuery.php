<?php

namespace uzdevid\telegram\bot\objects;

/**
 * Class InlineQuery
 * @package uzdevid\telegram\bot\objects
 *
 * @property int $updateId
 * @property int $id
 * @property User $from
 * @property string $query
 * @property int $offset
 */
class InlineQuery {
    use ObjectTrait;

    public static function attributeObjects(): array {
        return [
            'from' => User::class,
        ];
    }
}