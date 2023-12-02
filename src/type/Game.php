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

    public string $title;
    public string $description;
    public PhotoSize $photoSize;
    public string $text;
    public MessageEntity $textEntities;
    public Animation $animation;

    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'photo' => [PhotoSize::class],
            'message_entities' => [MessageEntity::class],
            'animation' => Animation::class
        ];
    }
}