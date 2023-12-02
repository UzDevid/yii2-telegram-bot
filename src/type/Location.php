<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type Location
 *
 * @link https://core.telegram.org/bots/api#location
 *
 * This object represents a point on the map.
 */
class Location extends Type {

    public float $longitude;
    public float $latitude;
    public float $horizontalAccuracy;
    public int $livePeriod;
    public int $heading;
    public int $proximityAlertRadius;
}