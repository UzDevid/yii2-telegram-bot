<?php

namespace uzdevid\telegram\bot\message\messages\methods;

use uzdevid\telegram\bot\core\AttributeContainer;
use uzdevid\telegram\bot\message\answer\AnswerInterface;
use uzdevid\telegram\bot\message\messages\MethodInterface;
use yii\helpers\Json;

class Answer implements MethodInterface {
    use AttributeContainer {
        AttributeContainer::__construct as private __attributeConstruct;
    }

    public function __construct(string $inlineQueryId) {
        $this->__attributeConstruct(['inline_query_id' => $inlineQueryId]);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return 'answerInlineQuery';
    }

    /**
     * @param AnswerInterface $result
     *
     * @return $this
     */
    public function addResult(AnswerInterface $result): static {
        $this->pushAttribute('results', $result->getPayload());
        return $this;
    }

    /**
     * @param int $cacheTime
     *
     * @return $this
     */
    public function setCacheTime(int $cacheTime): static {
        $this->addAttribute('cache_time', $cacheTime);
        return $this;
    }

    /**
     * @param bool $personal
     *
     * @return $this
     */
    public function setIsPersonal(bool $personal = true): static {
        $this->addAttribute('is_personal', $personal);
        return $this;
    }

    /**
     * @param string $offset
     *
     * @return $this
     */
    public function setNextOffset(string $offset): static {
        $this->addAttribute('next_offset', $offset);
        return $this;
    }

    /**
     * @return array
     */
    public function getPayload(): array {
        $results = Json::encode($this->getAttribute('results'), JSON_UNESCAPED_UNICODE);

        $this->addAttribute('results', $results);

        return $this->attributes;
    }

    public function response(): string {
        // TODO: Implement response() method.
    }
}