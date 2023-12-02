<?php

namespace uzdevid\telegram\bot\type;

use uzdevid\telegram\bot\core\Type;

/**
 * Class Response
 *
 * @package uzdevid\telegram\bot\objects
 *
 * @property bool $ok
 * @property int $messageId
 * @property User $from
 * @property User $user
 * @property Chat $chat
 * @property int $date
 * @property string $text
 */
class Response extends Type {
    /**
     * @return array
     */
    protected function properties(): array {
        return [
            'from' => User::class,
            'user' => User::class,
            'chat' => Chat::class,
        ];
    }
}