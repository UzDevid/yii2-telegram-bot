<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

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
class InlineQuery extends Type {
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'from' => User::class,
        ];
    }
}