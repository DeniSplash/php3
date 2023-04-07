<?php

class DeveloperObserver implements SplObserver
{
    private $name;
    public $language;

    public function __construct($name, $language)
    {
        $this->name = $name;
        $this->language = $language;
    }

    public function update(SplSubject $subject)
    {
        echo "Оповестить $this->name $this->language подписчика о новой вакансии " .
            $subject->lastAddedJob->name . PHP_EOL;
    }
}
