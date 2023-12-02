<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Type PollAnswer
 *
 * @link https://core.telegram.org/bots/api#pollanswer
 *
 * This object represents an answer of a user in a non-anonymous poll.
 *
 * @property string $pollId
 * @property Chat $voterChat
 * @property User $user
 * @property array $optionIds
 */
class PollAnswer extends Type {
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'voterChat' => Chat::class,
            'user' => User::class,
        ];
    }
}