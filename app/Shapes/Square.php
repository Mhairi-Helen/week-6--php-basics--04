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

    public function area()
    {
        return pow($this->width, 2);
        // return $this; - why can't i use this in this instance? is it belcause the expression is returning a value?
    }

}

$square = new Square(4);

var_dump($square->area());