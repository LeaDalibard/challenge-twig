<?php


namespace App;


class logger
{
    public function log($message)
    {
        $log_file = "log.info";
        file_put_contents($message,$log_file);
    }
}