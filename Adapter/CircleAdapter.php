<?php

class CircleAdapter implements ICircle
{
    private $adaptee;

    public function __construct(CircleAreaLib $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    function circleArea(float $circumference)
    {
        $diagonal = $circumference / M_PI;
        return $this->adaptee->getCircleArea($diagonal);
    }
}
