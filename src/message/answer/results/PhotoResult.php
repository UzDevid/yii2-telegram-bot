<?php

namespace uzdevid\telegram\bot\message\answer\results;

use uzdevid\telegram\bot\message\answer\AnswerInterface;
use uzdevid\telegram\bot\message\answer\AnswerType;

class PhotoResult extends AnswerType implements AnswerInterface {

    /**
     * @param string $id
     * @param string $photo_url
     * @param string $thumbnail_url
     */
    public function __construct(string $id, string $photo_url, string $thumbnail_url) {
        $type = $this->getType();
        parent::__construct(compact('id', 'photo_url', 'thumbnail_url', 'type'));
    }

    /**
     * @return string
     */
    public function getType(): string {
        return 'photo';
    }
}