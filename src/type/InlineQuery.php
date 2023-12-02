<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Class InlineQuery
 *
 * @package uzdevid\telegram\bot\objects
 */
class InlineQuery extends Type {

    public int $updateId;
    public int $id;
    public User $from;
    public string $query;
    public int $offset;
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'from' => [User::class, 'from'],
        ];
    }
}