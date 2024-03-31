<?php

namespace UzDevid\Telegram\Bot\Message\Manager;

use GuzzleHttp\Exception\GuzzleException;
use UzDevid\Telegram\Bot\Message\Manager;
use UzDevid\Telegram\Bot\Service;

/**
 *
 * @property int $messageId
 */
class Editor extends Manager {
    private int|null $_messageId = null;

    /**
     * @return int|null
     */
    public function getMessageId(): int|null {
        return $this->_messageId;
    }

    /**
     * @param int $messageId
     *
     * @return void
     */
    public function setMessageId(int $messageId): void {
        $this->_messageId = $messageId;
    }

    /**
     * @param int $messageId
     *
     * @return $this
     */
    public function messageId(int $messageId): static {
        $this->messageId = $messageId;
        return $this;
    }

    /**
     * @return object
     * @throws GuzzleException
     */
    public function edit(): object {
        return Service::buildResponse($this->sendRequest(), $this->method);
    }
}