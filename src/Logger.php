<?php


namespace App;


class Logger
{
    public function log($message)
    {
        file_put_contents(__DIR__.'log.info', $message, FILE_APPEND );
    }
}