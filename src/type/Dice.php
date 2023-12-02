<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type Dice
 *
 * @link https://core.telegram.org/bots/api#dice
 *
 * This object represents an animated emoji that displays a random value.
 */
class Dice extends Type {
    public string $emoji;
    public int $value;
}