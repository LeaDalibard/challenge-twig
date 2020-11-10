<?php


namespace App;


class Master
{
    private string $message;
    private $logger;

    public function __construct(string $message, transform $transform)
    {
        $this->message = $transform->transform($message);
        $logger = new Logger();
        $this->logger = $logger;
        $this->logger->log($this->message);
    }

    /**
     * @return string
     */
    public function getMessage(): string
    {
        return $this->message;
    }

    //public function log()
    //    {
    //        $this->logger->log($this->message);
    //    }


}