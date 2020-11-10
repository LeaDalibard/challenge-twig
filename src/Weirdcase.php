<?php


namespace App;


class Weirdcase implements transform
{
    public function transform(string $string): string
    {
        // TODO: Implement transform() method.

        return implode(" ", array_map(function ($word) {
            $splitWord = str_split($word);
            return implode("", array_map(function ($value, $key) {
                return ($key % 2 === 0) ? strtoupper($value) : strtolower($value);
            }, $splitWord, array_keys($splitWord)));

        }, explode(" ", $string)));

    }
}


