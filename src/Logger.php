<?php


namespace App;


class Logger
{
    public function log($message)
    {
        file_put_contents('log.info', json_encode($message, JSON_PRETTY_PRINT));
    }
}