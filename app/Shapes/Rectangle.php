<?php

declare (strict_types=1);

namespace App\Shapes;

class Rectangle implements ShapeInterface
{

    //properties
    private $length;
    private $width;

    //constructor method
    public function __construct(float $length, float $width) 
    {
        $this->length = $length;
        $this->width = $width;

    }

    //methods

    public function area()
    {
        return $this->length * $this->width;
    }

}

$rectangle = new Rectangle(4, 5);

var_dump($rectangle->area());