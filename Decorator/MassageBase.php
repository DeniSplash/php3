<?php

class MassageBase implements Message
{

    public function send(string $text): string
    {
        return 'BaseMethod send : ' . $text;
    }
}
