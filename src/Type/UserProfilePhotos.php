<?php

namespace UzDevid\Telegram\Bot\Type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type UserProfilePhotos
 *
 * @link https://core.telegram.org/bots/api#userprofilephotos
 *
 * This object represent a user's profile pictures.
 */
class UserProfilePhotos extends Type {
    public int $totalCount;
    public PhotoSize $photoSize;
}