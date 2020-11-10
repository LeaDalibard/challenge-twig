<?php


namespace App;


class Logger
{
    public function log(string $message)
    {
        file_put_contents('log.info', $message, FILE_APPEND );
        //file in public directory
    }
}