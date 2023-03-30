<?php

class TwitterMassage implements Message
{

    protected $obj;

    public function __construct(Message $obj)
    {
        $this->obj = $obj;
    }

    public function send(string $text): string
    {
        echo 'Twitter send : ' . $text . PHP_EOL;
        return $this->obj->send($text);
    }
}
