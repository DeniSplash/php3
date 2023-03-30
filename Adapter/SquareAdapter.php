<?php

class SquareAdapter implements ISquare
{
    private $adaptee;

    public function __construct(SquareAreaLib $adaptee)
    {
        $this->adaptee = $adaptee;
    }

    function squareArea(float $sideSquare)
    {
        $diagonal = $sideSquare * (sqrt(2));
        return $this->adaptee->getSquareArea($diagonal);
    }
}
