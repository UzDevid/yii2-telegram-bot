<?php

namespace uzdevid\telegram\bot\handler\updates;

use uzdevid\telegram\bot\BaseObject;
use uzdevid\telegram\bot\handler\UpdateInterface;
use uzdevid\telegram\bot\type\Message;

/**
 * Class MessageUpdate
 *
 * @property int $updateId
 * @property Message $message
 */
class MessageUpdate extends BaseObject implements UpdateInterface {
    public static function objectName(): string {
        return 'message';
    }

    public function body(): Message {
        return $this->message;
    }

    public function makeObjects(): array {
        return [
            'message' => Message::class
        ];
    }
}