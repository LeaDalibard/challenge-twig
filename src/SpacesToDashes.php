<?php


namespace App;


class SpacesToDashes implements transform
{
    public function transform(string $string): string
    {
        // TODO: Implement transform() method.
       return str_replace(' ', '-', $string);
    }
}