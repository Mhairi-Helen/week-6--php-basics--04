<?php

declare (strict_types=1);

namespace App\Shapes;

class Circle implements ShapeInterface
{

    //properties
    private $rad;

    //constructor method
    public function __construct(float $rad)
    {
        $this->rad = $rad;
    }

    //methods

    public function area() : float
    {
        return pi() * pow($this->rad, 2);
    
    }

}