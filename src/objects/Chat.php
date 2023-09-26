<?php

namespace uzdevid\telegram\bot\objects;

/**
 * Class Chat
 *
 * @package uzdevid\telegram\bot
 *
 * @property int $id
 * @property string $type
 * @property string $title
 * @property string $username
 * @property string $firstName
 * @property string $lastName
 * @property bool $isForum
 * @property bool $chatPhoto
 * @property array $activeUsernames
 * @property string $emojiStatusCustomEmojiId
 * @property string $bio
 * @property bool $hasPrivateForwards
 * @property bool $hasRestrictedVoiceAndVideoMessages
 * @property bool $joinToSendMessages
 * @property bool $joinByRequest
 * @property string $description
 * @property string $inviteLink
 * @property int $pinnedMessage
 * @property int $permissions
 * @property int $slowModeDelay
 * @property int $messageAutoDeleteTime
 * @property bool $hasAggressiveAntiSpamEnabled
 * @property bool $hasHiddenMembers
 * @property bool $hasProtectedContent
 * @property string $stickerSetName
 * @property bool $canSetStickerSet
 * @property bool $linkedChatId
 * @property bool $location
 */
class Chat {
    use ObjectTrait;

    /**
     * @return array
     */
    public static function attributeObjects(): array {
        return [];
    }
}