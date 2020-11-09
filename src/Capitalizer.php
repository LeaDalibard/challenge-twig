<?php


namespace App;


class Capitalizer  implements transform
{
    public function transform($string): string
    {
        // TODO: Implement transform() method.
        return strtoupper($string);
    }
}


