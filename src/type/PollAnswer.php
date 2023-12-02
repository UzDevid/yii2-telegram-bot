<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type PollAnswer
 *
 * @link https://core.telegram.org/bots/api#pollanswer
 *
 * This object represents an answer of a user in a non-anonymous poll.
 */
class PollAnswer extends Type {

    public string $pollId;
    public Chat $voterChat;
    public User $user;
    public array $optionIds;
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'voterChat' => [Chat::class, 'voterChat'],
            'user' => [User::class, 'user'],
        ];
    }
}