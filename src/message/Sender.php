<?php

namespace uzdevid\telegram\bot\message;

use uzdevid\telegram\bot\objects\Response;
use uzdevid\telegram\bot\Service;

class Sender extends Manager {
    public function methodUrl(): string {
        return self::$apiUrl . $this->token . '/' . $this->message->methodName();
    }

    public function send(): Response {
        $query = array_merge(['chat_id' => $this->chatIdOrUsername()], $this->message->getPayload());

        $response = $this->httpClient->get($this->methodUrl(), ['query' => $query]);

        $responseBody = json_decode($response->getBody()->getContents(), true);

        return Service::buildResponse($responseBody);
    }
}