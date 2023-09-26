<?php

namespace uzdevid\telegram\bot\message;

use uzdevid\telegram\bot\BaseBot;
use uzdevid\telegram\bot\message\messages\MethodInterface;

/**
 * Class Message
 *
 * @package uzdevid\telegram\bot
 *
 * @property int $chatId
 * @property MethodInterface $method
 */
class Manager extends BaseBot {
    private MethodInterface|null $_method = null;

    /**
     * @return MethodInterface
     */
    protected function getMessage(): MethodInterface {
        return $this->_method;
    }

    /**
     * @param MethodInterface $method
     */
    public function setMessage(MethodInterface $method): void {
        $this->_method = $method;
    }

    /**
     * @param MethodInterface $method
     *
     * @return Manager
     */
    public function method(MethodInterface $method): static {
        $this->_method = $method;
        return $this;
    }
}