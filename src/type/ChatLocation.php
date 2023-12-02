<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ChatLocation
 *
 * @link https://core.telegram.org/bots/api#chatlocation
 *
 * Represents a location to which a chat is connected.
 */
class ChatLocation extends Type {
    public Location $location;
    public string $address;

    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'location' => [Location::class, 'location'],
        ];
    }
}