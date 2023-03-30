<?php

spl_autoload_register(function ($classname) {
    require_once($classname . '.php');
});

$textMassage = ' Lorem Example ';
$exa = new TwitterMassage(new FaceBookMassage(new MassageBase()));
echo $exa->send($textMassage);
