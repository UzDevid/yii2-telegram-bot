<?php

namespace uzdevid\telegram\bot\message\message\method;

use uzdevid\telegram\bot\message\message\Method;
use uzdevid\telegram\bot\message\message\MethodInterface;
use uzdevid\telegram\bot\type\File;

class GetFile extends Method implements MethodInterface {
    protected static string $__file_id = 'file_id';

    /**
     * @param string $__file_id
     * @param array $attributes
     */
    public function __construct(string $__file_id, array $attributes = []) {
        parent::__construct($attributes);
        $this->addAttribute(self::$__file_id, $__file_id);
    }

    /**
     * @return string
     */
    public function methodName(): string {
        return "getFile";
    }

    public function response(): string {
        return File::class;
    }
}