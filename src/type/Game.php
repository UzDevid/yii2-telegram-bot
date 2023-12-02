<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type Game
 *
 * @link https://core.telegram.org/bots/api#game
 *
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
 *
 * @property string $title
 * @property string $description
 * @property PhotoSize[] $photo
 * @property string $text
 * @property MessageEntity[] $textEntities
 * @property Animation $animation
 */
class Game extends Type {
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'animation' => Animation::class
        ];
    }
}