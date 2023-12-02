<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ChatLocation
 *
 * @link https://core.telegram.org/bots/api#chatlocation
 *
 * Represents a location to which a chat is connected.
 *
 * @property Location $location
 * @property string $address
 */
class ChatLocation extends Type {
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'location' => Location::class,
        ];
    }
}