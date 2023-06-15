<?php

namespace uzdevid\telegram\bot\handler\updates;

use uzdevid\telegram\bot\AttributeComponentTrait;
use uzdevid\telegram\bot\Service;

trait UpdateTrait {
    use AttributeComponentTrait;

    public function __construct(string $objectName, array $data) {
        $update = $data[$objectName];

        $attributes = [];
        $attributeObjects = self::attributeObjects();

        foreach ($update as $key => $value) {
            $camelCaseName = Service::snakeToCamel($key);

            if (isset($attributeObjects[$camelCaseName])) {
                $className = $attributeObjects[$camelCaseName];
                $attributes[$camelCaseName] = new $className($value);
            } else {
                $attributes[$camelCaseName] = $value;
            }
        }

        $this->setAttributes($attributes);
        $this->addAttribute('updateId', $data['update_id']);
    }
}