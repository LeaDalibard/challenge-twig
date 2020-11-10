<?php


namespace App;


class Logger
{
    public function log($message)
    {
        file_put_contents('log.info', $message, FILE_APPEND );
        //file in in public directory
    }
}