<?php

namespace uzdevid\telegram\bot;

use uzdevid\telegram\bot\handler\Handler;
use uzdevid\telegram\bot\inline\Inliner;
use uzdevid\telegram\bot\inline\InlinerInterface;
use uzdevid\telegram\bot\message\Sender;
use uzdevid\telegram\bot\message\SenderInterface;
use yii\base\InvalidCallException;

/**
 * Class Bot
 * @package uzdevid\telegram\bot
 */
class Bot extends BaseBot {
    /**
     * @return Sender
     */
    public function sender(SenderInterface|null $sender = null): Sender {
        if ($sender === null) {
            $sender = new Sender();
        }

        if (!isset($this->token)) {
            throw new InvalidCallException('Token is not set');
        }

        $sender->setToken($this->token);

        if (isset($this->chatId)) {
            $sender->setChatId($this->chatId);
        }

        if (isset($this->username)) {
            $sender->setUsername($this->username);
        }

        return $sender;
    }

    public function inliner(InlinerInterface|null $inliner = null): Inliner {
        if ($inliner === null) {
            $inliner = new Inliner();
        }

        return $inliner;
    }

    public function handler(array $data): Handler {
        return new Handler($this, $data);
    }
}