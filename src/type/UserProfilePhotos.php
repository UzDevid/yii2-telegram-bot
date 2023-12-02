<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type UserProfilePhotos
 *
 * @link https://core.telegram.org/bots/api#userprofilephotos
 *
 * This object represent a user's profile pictures.
 *
 * @property int $totalCount
 * @property PhotoSize[][] $photos
 */
class UserProfilePhotos extends Type {
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'photos' => [[PhotoSize::class]]
        ];
    }
}