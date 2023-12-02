<?php

namespace uzdevid\telegram\bot\core;

use uzdevid\telegram\bot\Service;
use yii\base\Arrayable;

trait PropertyLoader {
    use \uzdevid\property\loader\traits\PropertyLoader;

    protected function loadProperties(Arrayable|array $data): array {
        $formattedData = [];

        foreach ($data as $key => $value) {
            $camelCaseName = Service::snakeToCamel($key);

            $formattedData[$camelCaseName] = $value;
        }

        $data = $formattedData;

        $attributes = $data;

        $this->loadAttributes(array_diff_key($attributes, $this->properties(), array_flip($this->except)));

        return $this->loadObjects($data);
    }
}