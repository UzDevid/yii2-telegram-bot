<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\BaseObject;

/**
 * Class InlineQuery
 *
 * @package uzdevid\telegram\bot\objects
 *
 * @property int $updateId
 * @property int $id
 * @property User $from
 * @property string $query
 * @property int $offset
 */
class InlineQuery extends BaseObject {
    /**
     * @return array
     */
    public static function attributeObjects(): array {
        return [
            'from' => User::class,
        ];
    }
}