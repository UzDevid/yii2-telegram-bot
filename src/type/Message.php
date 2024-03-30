<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;
use uzdevid\telegram\bot\message\message\keyboard\ReplyMarkupInterface;

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
    public array $entities;
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
    public array $captionEntities;
    public bool $hasMediaSpoiler;
    public Contact $contact;
    public Dice $dice;
    public Game $game;
    public Poll $poll;
    public Venue $venue;
    public Location $location;
    public array $newChatMembers;
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
    public VideoChatScheduled $videoChatScheduled;
    public VideoChatStarted $videoChatStarted;
    public VideoChatEnded $videoChatEnded;
    public VideoChatParticipantsInvited $videoChatParticipantsInvited;
    public WebAppData $webAppData;
    public InlineKeyboardMarkup $replyMarkup;
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'from' => [User::class, 'from'],
            'chat' => [Chat::class, 'chat'],
//            'forwardFrom' => [User::class, 'forwardFrom'],
//            'forwardFromChat' => [Chat::class, 'forwardFromChat'],
            'replyToMessage' => [__CLASS__, 'replyToMessage'],
            'viaBot' => [User::class, 'viaBot'],
            'entities' => [[MessageEntity::class], 'entities'],
            'animation' => [Animation::class, 'animation'],
            'audio' => [Audio::class, 'audio'],
            'document' => [Document::class, 'document'],
            'photo' => [PhotoSize::class, 'photo'],
            'sticker' => [Sticker::class, 'sticker'],
            'story' => [Story::class, 'story'],
            'video' => [Video::class, 'video'],
            'videoNote' => [VideoNote::class, 'videoNote'],
            'voice' => [Voice::class, 'voice'],
            'captionEntities' => [[MessageEntity::class], 'captionEntities'],
            'contact' => [Contact::class, 'contact'],
            'dice' => [Dice::class, 'dice'],
            'game' => [Game::class, 'game'],
            'poll' => [Poll::class, 'poll'],
            'venue' => [Venue::class, 'venue'],
            'location' => [Location::class, 'location'],
            'newChatMembers' => [[User::class], 'newChatMembers'],
            'leftChatMember' => [User::class, 'leftChatMember'],
            'messageAutoDeleteTimerChanged' => [MessageAutoDeleteTimerChanged::class, 'messageAutoDeleteTimerChanged'],
            'pinnedMessage' => [__CLASS__, 'pinnedMessage'],
            'invoice' => [Invoice::class, 'invoice'],
            'successfulPayment' => [SuccessfulPayment::class, 'successfulPayment'],
            'userShared' => [UserShared::class, 'userShared'],
            'chatShared' => [ChatShared::class, 'chatShared'],
            'writeAccessAllowed' => [WriteAccessAllowed::class, 'writeAccessAllowed'],
            'passportData' => [PassportData::class, 'passportData'],
            'proximityAlertTriggered' => [ProximityAlertTriggered::class, 'proximityAlertTriggered'],
            'forumTopicCreated' => [ForumTopicCreated::class, 'forumTopicCreated'],
            'forumTopicEdited' => [ForumTopicEdited::class, 'forumTopicEdited'],
            'forumTopicClosed' => [ForumTopicClosed::class, 'forumTopicClosed'],
            'forumTopicReopened' =>[ForumTopicReopened::class, 'forumTopicReopened'],
            'generalForumTopicHidden' => [GeneralForumTopicHidden::class, 'generalForumTopicHidden'],
            'generalForumTopicUnhidden' => [GeneralForumTopicUnhidden::class, 'generalForumTopicUnhidden'],
            'videoChatScheduled' => [VideoChatScheduled::class, 'videoChatScheduled'],
            'videoChatStarted' => [VideoChatStarted::class, 'videoChatStarted'],
            'videoChatEnded' => [VideoChatEnded::class, 'videoChatEnded'],
            'videoChatParticipantsInvited' => [VideoChatParticipantsInvited::class, 'videoChatParticipantsInvited'],
            'webAppData' => [WebAppData::class, 'webAppData'],
            'replyMarkup' => [InlineKeyboardMarkup::class, 'replyMarkup'],
        ];
    }
}