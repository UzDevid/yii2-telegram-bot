<?php

namespace uzdevid\telegram\bot;

use yii\base\Component;

class Bot extends Component {
    private string $_token;
    private int $_chatId;

    /**
     * @return string
     */
    public function getToken(): string {
        return $this->_token;
    }

    /**
     * @param string $token
     */
    public function setToken(string $token): void {
        $this->_token = $token;
    }

    /**
     * @return int
     */
    public function getChatId(): int {
        return $this->_chatId;
    }

    /**
     * @param int $chatId
     */
    public function setChatId(int $chatId): void {
        $this->_chatId = $chatId;
    }


}