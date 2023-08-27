<?php

namespace uzdevid\telegram\bot\message\answer;

use uzdevid\telegram\bot\AttributeComponentTrait;
use uzdevid\telegram\bot\BaseBot;
use uzdevid\telegram\bot\message\messages\MessageInterface;

class Answer extends BaseBot implements MessageInterface {
    use AttributeComponentTrait;

    public function __construct(string $inlineQueryId) {
        parent::__construct(['inline_query_id' => $inlineQueryId]);
    }

    public function methodName(): string {
        return 'answerInlineQuery';
    }

    public function addResult(AnswerInterface $result): static {
        $this->pushAttribute('results', $result->getPayload());
        return $this;
    }

    public function setCacheTime(int $cacheTime): static {
        $this->setAttribute('cache_time', $cacheTime);
        return $this;
    }

    public function setIsPersonal(bool $personal = true): static {
        $this->setAttribute('is_personal', $personal);
        return $this;
    }

    public function setNextOffset(string $offset): static {
        $this->setAttribute('next_offset', $offset);
        return $this;
    }

    public function getPayload(): array {
        $results = json_encode($this->getAttribute('results'), JSON_UNESCAPED_UNICODE);

        $this->setAttribute('results', $results);

        return $this->attributes;
    }
}