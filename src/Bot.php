<?php

namespace uzdevid\telegram\bot;

use uzdevid\telegram\bot\handler\Handler;
use uzdevid\telegram\bot\message\Editor;
use uzdevid\telegram\bot\message\EditorInterface;
use uzdevid\telegram\bot\message\Sender;
use uzdevid\telegram\bot\message\SenderInterface;
use yii\base\InvalidCallException;

/**
 * Class Bot
 *
 * @package uzdevid\telegram\bot
 */
class Bot extends BaseBot {
    /**
     * @param SenderInterface|null $sender
     *
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

    /**
     * @param EditorInterface|null $editor
     *
     * @return Editor
     */
    public function editor(EditorInterface|null $editor = null): Editor {
        if ($editor === null) {
            $editor = new Editor();
        }

        if (!isset($this->token)) {
            throw new InvalidCallException('Token is not set');
        }

        $editor->setToken($this->token);

        if (isset($this->chatId)) {
            $editor->setChatId($this->chatId);
        }

        if (isset($this->username)) {
            $editor->setUsername($this->username);
        }

        return $editor;
    }

    /**
     * @param array $data
     *
     * @return Handler
     */
    public function handler(array $data): Handler {
        return new Handler($this, $data);
    }
}