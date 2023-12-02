<?php

namespace uzdevid\telegram\bot\handler\updates;

use uzdevid\property\loader\traits\PropertyLoader;
use uzdevid\telegram\bot\handler\UpdateInterface;
use uzdevid\telegram\bot\type\Message;

/**
 * Class MessageUpdate
 */
class MessageUpdate implements UpdateInterface {
    use PropertyLoader;

    public int $updateId;
    public Message $message;

    /**
     * @return string
     */
    public static function objectName(): string {
        return 'message';
    }

    /**
     * @return Message
     */
    public function body(): Message {
        return $this->message;
    }

    /**
     * @return array[]
     */
    protected function properties(): array {
        return [
            'message' => [Message::class, 'message']
        ];
    }
}