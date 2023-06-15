<?php

namespace uzdevid\telegram\bot\handler;

use uzdevid\telegram\bot\AttributeComponentTrait;

trait HandlerTrait {
    use AttributeComponentTrait;

    public function __construct(array $attributes = []) {
        $message = $attributes[self::objectName()];

        $data = [];
        $attributeObjects = self::attributeObjects();

        foreach ($message as $key => $value) {
            $camelCase = lcfirst(str_replace(' ', '', ucwords(str_replace('_', ' ', $key))));

            if (isset($attributeObjects[$camelCase])) {
                $className = $attributeObjects[$camelCase];
                $data[$camelCase] = new $className($value);
            } else {
                $data[$camelCase] = $value;
            }
        }

        $this->setAttributes($data);
        $this->addAttribute('updateId', $attributes['update_id']);
    }
}