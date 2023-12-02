<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type VideoNote
 *
 * @link https://core.telegram.org/bots/api#videonote
 *
 * This object represents a video message (https://telegram.org/blog/video-messages-and-telescope) (available in Telegram apps as of v.4.0).
 *
 * @property string $fileId
 * @property string $fileUniqueId
 * @property int $length
 * @property int $duration
 * @property PhotoSize $thumbnail
 * @property int $fileSize
 */
class VideoNote extends Type {
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'thumbnail' => PhotoSize::class,
        ];
    }
}