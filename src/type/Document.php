<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type Document
 *
 * @link https://core.telegram.org/bots/api#document
 *
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 *
 * @property string $fileId
 * @property string $fileUniqueId
 * @property PhotoSize $thumbnail
 * @property string $fileName
 * @property string $mimeType
 * @property int $fileSize
 *
 */
class Document extends Type {
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'thumbnail' => PhotoSize::class,
        ];
    }
}