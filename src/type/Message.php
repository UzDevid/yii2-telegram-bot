<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type Message
 *
 * @link https://core.telegram.org/bots/api#message
 *
 * This object represents a message.
 */
class Message extends Type {

    public int $messageId;
    public int $messageThreadId;
    public User $from;
    public int $senderChat;
    public int $date;
    public Chat $chat;
    public User $forwardFrom;
    public Chat $forwardFromChat;
    public int $forwardFromMessageId;
    public string $forwardSignature;
    public string $forwardSenderName;
    public int $forwardDate;
    public bool $isTopicMessage;
    public bool $isAutomaticForward;
    public Message $replyToMessage;
    public User $viaBot;
    public int $editDate;
    public bool $hasProtectedContent;
    public string $mediaGroupId;
    public string $authorSignature;
    public string $text;
    public MessageEntity $entities;
    public Animation $animation;
    public Audio $audio;
    public Document $document;
    public PhotoSize $photo;
    public Sticker $sticker;
    public Story $story;
    public Video $video;
    public VideoNote $videoNote;
    public Voice $voice;
    public string $caption;
    public MessageEntity $captionEntities;
    public bool $hasMediaSpoiler;
    public Contact $contact;
    public Dice $dice;
    public Game $game;
    public Poll $poll;
    public Venue $venue;
    public Location $location;
    public User $newChatMembers;
    public User $leftChatMember;
    public string $newChatTitle;
    public PhotoSize $newChatPhoto;
    public bool $deleteChatPhoto;
    public bool $groupChatCreated;
    public bool $supergroupChatCreated;
    public bool $channelChatCreated;
    public MessageAutoDeleteTimerChanged $messageAutoDeleteTimerChanged;
    public int $migrateToChatId;
    public int $migrateFromChatId;
    public Message $pinnedMessage;
    public Invoice $invoice;
    public SuccessfulPayment $successfulPayment;
    public UserShared $userShared;
    public ChatShared $chatShared;
    public string $connectedWebsite;
    public WriteAccessAllowed $writeAccessAllowed;
    public PassportData $passportData;
    public ProximityAlertTriggered $proximityAlertTriggered;
    public ForumTopicCreated $forumTopicCreated;
    public ForumTopicEdited $forumTopicEdited;
    public ForumTopicClosed $forumTopicClosed;
    public ForumTopicReopened $forumTopicReopened;
    public GeneralForumTopicHidden $generalForumTopicHidden;
    public GeneralForumTopicUnhidden $generalForumTopicUnhidden;
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'from' => User::class,
            'chat' => Chat::class,
            'forwardFrom' => User::class,
            'forwardFromChat' => Chat::class,
            'replyToMessage' => __CLASS__,
            'viaBot' => User::class,
            'animation' => Animation::class,
            'audio' => Audio::class,
            'document' => Document::class,
            'photo' => [PhotoSize::class],
            'sticker' => Sticker::class,
            'story' => Story::class,
            'video' => Video::class,
            'videoNote' => VideoNote::class,
            'voice' => Voice::class,
            'contact' => Contact::class,
            'dice' => Dice::class,
            'game' => Game::class,
            'poll' => Poll::class,
            'venue' => Venue::class,
            'location' => Location::class,
            'leftChatMember' => User::class,
            'messageAutoDeleteTimerChanged' => MessageAutoDeleteTimerChanged::class,
            'pinnedMessage' => __CLASS__,
            'invoice' => Invoice::class,
            'successfulPayment' => SuccessfulPayment::class,
            'userShared' => UserShared::class,
            'chatShared' => ChatShared::class,
            'writeAccessAllowed' => WriteAccessAllowed::class,
            'passportData' => PassportData::class,
            'proximityAlertTriggered' => ProximityAlertTriggered::class,
            'forumTopicCreated' => ForumTopicCreated::class,
            'forumTopicEdited' => ForumTopicEdited::class,
            'forumTopicClosed' => ForumTopicClosed::class,
            'forumTopicReopened' => ForumTopicReopened::class,
            'generalForumTopicHidden' => GeneralForumTopicHidden::class,
            'generalForumTopicUnhidden' => GeneralForumTopicUnhidden::class,
            'videoChatScheduled' => VideoChatScheduled::class,
            'videoChatStarted' => VideoChatStarted::class,
            'videoChatEnded' => VideoChatEnded::class,
            'videoChatParticipantsInvited' => VideoChatParticipantsInvited::class,
            'webAppData' => WebAppData::class,
            'replyMarkup' => InlineKeyboardMarkup::class,
        ];
    }
}