<?php

class Job
{
    public $name;
    public $language;

    public function __construct($name, $language)
    {
        $this->name = $name;
        $this->language = $language;
    }
}
