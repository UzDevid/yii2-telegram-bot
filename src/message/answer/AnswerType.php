<?php

namespace uzdevid\telegram\bot\message\answer;

use uzdevid\telegram\bot\core\AttributeContainer;

class AnswerType {
    use AttributeContainer;

    /**
     * @return array
     */
    public function getPayload(): array {
        return $this->attributes;
    }
}