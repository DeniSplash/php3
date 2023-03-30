<?php

class FaceBookMassage implements Message
{
    protected $obj;

    public function __construct(Message $obj)
    {
        $this->obj = $obj;
    }

    public function send(string $text): string
    {
        echo 'FaceBook send : ' . $text . PHP_EOL;
        return $this->obj->send($text);
    }
}
