<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type Game
 *
 * @link https://core.telegram.org/bots/api#game
 *
 * This object represents a game. Use BotFather to create and edit games, their short names will act as unique identifiers.
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
            'photo' => [PhotoSize::class, 'photoSize'],
            'message_entities' => [MessageEntity::class, 'textEntities'],
            'animation' => [Animation::class, 'animation']
        ];
    }
}