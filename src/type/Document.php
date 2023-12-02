<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type Document
 *
 * @link https://core.telegram.org/bots/api#document
 *
 * This object represents a general file (as opposed to photos, voice messages and audio files).
 */
class Document extends Type {
    public string $fileId;
    public string $fileUniqueId;
    public PhotoSize $thumbnail;
    public string $fileName;
    public string $mimeType;
    public int $fileSize;

    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'thumbnail' => [PhotoSize::class, 'thumbnail'],
        ];
    }
}