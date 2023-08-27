<?php

namespace uzdevid\telegram\bot\message;

use uzdevid\telegram\bot\objects\Response;

class Sender extends Message implements SenderInterface {
    public function methodUrl(): string {
        return self::$apiUrl . $this->token . '/' . $this->message->methodName();
    }

    public function send(): Response {
        $query = array_merge(['chat_id' => $this->chatIdOrUsername()], $this->message->getPayload());

        $options = ['query' => $query];

        $response = $this->httpClient->get($this->methodUrl(), $options);

        $responseBody = json_decode($response->getBody()->getContents(), true);

        $data['ok'] = $responseBody['ok'];

        if (is_array($responseBody['result'])) {
            $data = array_merge($data, $responseBody['result']);
        } else {
            $data['result'] = $responseBody['result'];
        }

        return new Response($data);
    }
}