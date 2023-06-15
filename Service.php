<?php

namespace uzdevid\telegram\bot;

class Service {
    public static function camelToSnake(string $string) {
        $string = preg_replace_callback('/[A-Z]/', function ($matches) {
            return '_' . strtolower($matches[0]);
        }, $string);
        return ltrim($string, '_');
    }

    public static function snakeToCamel(string $string) {
        $string = preg_replace_callback('/_[a-z]/', function ($matches) {
            return strtoupper($matches[0][1]);
        }, $string);
        return ltrim($string, '_');
    }
}