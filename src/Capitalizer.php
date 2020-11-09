<?php


namespace App;


class Capitalizer  implements transform
{
    public function transform($string): string
    {
        // TODO: Implement transform() method.
        return preg_replace('/(\w)(.)?/e', "strtoupper('$1').strtolower('$2')", $string);
    }
}


