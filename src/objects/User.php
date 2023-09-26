<?php

namespace uzdevid\telegram\bot\objects;

use uzdevid\telegram\bot\ObjectTrait;

/**
 * Class User
 *
 * @package uzdevid\telegram\bot
 *
 * @property int $id
 * @property bool $isBot
 * @property string $firstName
 * @property string $lastName
 * @property string $username
 * @property string $languageCode
 * @property bool $isPremium
 * @property bool $addedToAttachmentMenu
 * @property bool $canJoinGroups
 * @property bool $canReadAllGroupMessages
 * @property bool $supportsInlineQueries
 */
class User {
    use ObjectTrait;

    /**
     * @return array
     */
    public static function attributeObjects(): array {
        return [];
    }
}