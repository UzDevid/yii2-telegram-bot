<?php

namespace uzdevid\telegram\bot;

class BaseObject {
    use AttributeComponentTrait;

    public function __construct(array $data) {
        $attributes = [];
        $attributeObjects = $this->makeObjects();

        foreach ($data as $key => $value) {
            $camelCaseName = Service::snakeToCamel($key);

            if (isset($attributeObjects[$camelCaseName])) {
                $className = $attributeObjects[$camelCaseName];
                $attributes[$camelCaseName] = new $className($value);
            } else {
                $attributes[$camelCaseName] = $value;
            }
        }

        $this->setAttributes($attributes);
    }

    public function makeObjects(): array {
        return [];
    }
}