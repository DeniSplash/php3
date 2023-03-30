<?php

interface Message
{
    public function send(string $text): string;
}
