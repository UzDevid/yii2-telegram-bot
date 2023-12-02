<?php

namespace uzdevid\telegram\bot\core;

trait Credentials {
    protected string|null $token = null;
    protected int|null $chatId = null;
    protected string|null $username = null;

    /**
     * @param string $token
     *
     * @return $this
     */
    public function token(string $token): static {
        $this->token = $token;
        return $this;
    }

    /**
     * @param int $chatId
     *
     * @return $this
     */
    public function chatId(int $chatId): static {
        $this->chatId = $chatId;
        return $this;
    }

    /**
     * @param string $username
     *
     * @return $this
     */
    public function username(string $username): static {
        $this->username = $username;
        return $this;
    }
}