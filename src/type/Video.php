<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type Video
 *
 * @link https://core.telegram.org/bots/api#video
 *
 * This object represents a video file.
 *
 * @property string $fileId
 * @property string $fileUniqueId
 * @property int $width
 * @property int $height
 * @property int $duration
 * @property PhotoSize $thumbnail
 * @property string $fileName
 * @property string $mimeType
 * @property int $fileSize
 */
class Video extends Type {
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'thumbnail' => PhotoSize::class,
        ];
    }
}