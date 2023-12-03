<?php

namespace uzdevid\telegram\bot\message\manager;

use GuzzleHttp\Exception\GuzzleException;
use uzdevid\telegram\bot\message\Manager;
use uzdevid\telegram\bot\Service;

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