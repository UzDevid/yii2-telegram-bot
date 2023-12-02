<?php

namespace uzdevid\telegram\bot\handler\updates;

use uzdevid\property\loader\traits\PropertyLoader;
use uzdevid\telegram\bot\handler\UpdateInterface;
use uzdevid\telegram\bot\type\InlineQuery;


/**
 * Class InlineQueryUpdate
 */
class InlineQueryUpdate implements UpdateInterface {
    use PropertyLoader;

    public int $updateId;
    public InlineQuery $inlineQuery;

    /**
     * @return string
     */
    public static function objectName(): string {
        return 'inline_query';
    }

    /**
     * @return InlineQuery
     */
    public function body(): InlineQuery {
        return $this->inlineQuery;
    }

    /**
     * @return array[]
     */
    protected function properties(): array {
        return [
            'inlineQuery' => [InlineQuery::class, 'inlineQuery']
        ];
    }
}