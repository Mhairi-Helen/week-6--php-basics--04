<?php

declare (strict_types=1);

namespace App\Shapes;

class Square implements ShapeInterface
{

    //properties
    private $width;

    //constructor method
    public function __construct(float $width)
    {
        $this->width = $width;

    }

    //methods

    public function area() : float
    {
        return pow($this->width, 2);
         
        // - why can't i use this in this instance? is it belcause the expression is returning a value?
        // IF THERE IS NOTHING TO RETURN, RETURN THIS. IF YOU GET WHAT YOU'RE ASKING, WHY RETURN ANYTHING ELSE.
    }

}