<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type ProximityAlertTriggered
 *
 * @link https://core.telegram.org/bots/api#proximityalerttriggered
 *
 * This object represents the content of a service message, sent whenever a user in the chat triggers a proximity alert set by another user.
 */
class ProximityAlertTriggered extends Type {


    public User $traveler;
    public User $watcher;
    public int $distance;
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'traveler' => [User::class, 'traveler'],
            'watcher' => [User::class, 'watcher'],
        ];
    }
}