<?php

namespace uzdevid\telegram\bot\message;

class Editor extends Message implements EditorInterface {
    private int|null $_messageId = null;

    public function methodUrl(string|null $method = null): string {
        return self::$apiUrl . $this->token . '/' . $method ?? $this->message->methodName();
    }

    public function getMessageId() {
        return $this->_messageId;
    }

    public function setMessageId(int $messageId) {
        $this->_messageId = $messageId;
    }

    public function messageId(int $messageId) {
        $this->messageId = $messageId;
        return $this;
    }

    public function edit() {

    }

    public function delete() {
        $query = ['chat_id' => $this->chatIdOrUsername(), 'message_id' => $this->messageId];

        $options = ['query' => $query];

        print_r($options);

        $response = $this->httpClient->get($this->methodUrl('deleteMessage'), $options);
    }
}