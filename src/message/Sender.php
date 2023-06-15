<?php

namespace uzdevid\telegram\bot\message;

class Sender extends Message implements SenderInterface {
    public function methodUrl(): string {
        return self::$apiUrl . $this->token . '/' . $this->message->methodName();
    }

    public function send() {
        $query = array_merge(['chat_id' => $this->chatIdOrUsername()], $this->message->getPayload());

        $options = ['query' => $query];

        print_r($options);
        $response = $this->httpClient->get($this->methodUrl(), $options);
    }
}