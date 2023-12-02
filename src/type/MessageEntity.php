<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type MessageEntity
 *
 * @link https://core.telegram.org/bots/api#messageentity
 *
 * This object represents one special entity in a text message. For example, hashtags, usernames, URLs, etc.
 *
 * @property string $type
 * @property int $offset
 * @property int $length
 * @property string $url
 * @property User $user
 * @property string $language
 * @property string $customEmojiId
 */
class MessageEntity extends Type {
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'user' => User::class
        ];
    }
}