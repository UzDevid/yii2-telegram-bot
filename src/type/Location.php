<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type Location
 *
 * @link https://core.telegram.org/bots/api#location
 *
 * This object represents a point on the map.
 *
 * @property float $longitude
 * @property float $latitude
 * @property float $horizontalAccuracy
 * @property int $livePeriod
 * @property int $heading
 * @property int $proximityAlertRadius
 */
class Location extends Type { }