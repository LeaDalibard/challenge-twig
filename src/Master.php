<?php


namespace App;


class Master
{
    private string $message;
    private $logger;
    private $weirdcase;

    public function __construct(string $message)
    {
        $this->message = $message;
        $logger = new Logger();
        $this->logger = $logger;
        $weirdcase = new Weirdcase();
        $this->weirdcase = $weirdcase;
    }

    public function log()
    {
        $this->logger->log($this->message);
    }

    public function weirdcase()
    {
        $newmessage = $this->weirdcase->transform($this->message);
        echo $newmessage;
    }

}