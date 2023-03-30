<?php

spl_autoload_register(function ($classname) {
    require_once($classname . '.php');
});

$circumference = 5;
$adaptee = new CircleAreaLib();
$adapter = new CircleAdapter($adaptee);
echo 'Площадь круга при длине окружности ' . $circumference . ' = ';
echo $adapter->circleArea($circumference) . PHP_EOL;

$sideSquare = 10;
$adaptee = new SquareAreaLib();
$adapter = new SquareAdapter($adaptee);
echo 'Площадь квадрата при длине стороны ' . $sideSquare . ' = ';
echo $adapter->squareArea($sideSquare);
