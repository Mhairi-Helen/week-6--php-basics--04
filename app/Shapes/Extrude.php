<?php

declare (strict_types=1);

namespace App\Shapes;

class Extrude 
{

    //properties
    private $shape;
    private $depth;

    //constructor method
    public function __construct(ShapeInterface $shape,float $depth)
    {
        $this->shape = $shape;
        $this->depth = $depth;
    }

    //methods

    public function volume() : float
    {
        return $this->shape->area() * $this->depth;
    
    }

}