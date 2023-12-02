<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type Sticker
 *
 * @link https://core.telegram.org/bots/api#sticker
 *
 * This object represents a sticker.
 *
 * @property string $fileId
 * @property string $fileUniqueId
 * @property int $width
 * @property int $height
 * @property bool $isAnimated
 * @property bool $isVideo
 * @property PhotoSize $thumbnail
 * @property string $emoji
 * @property string $setName
 * @property File $premiumAnimation
 * @property MaskPosition $maskPosition
 * @property string $customEmojiId
 * @property bool $needsRepainting
 * @property int $fileSize
 */
class Sticker extends Type {
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'premiumAnimation' => File::class,
            'maskPosition' => MaskPosition::class,
            'thumbnail' => PhotoSize::class
        ];
    }
}