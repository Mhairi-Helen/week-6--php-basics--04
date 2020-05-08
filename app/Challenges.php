<?php

declare (strict_types=1);

namespace App;

class Challenges
{

    public function start()
    {
        echo "\nChallenges\n";

        //loads the challenges
        $this->shapes();
    }


    //challenge 1 ShapeInterface
    public function shapes()
    {
    echo "\n01) Shapes\n";

    // create new shapes
    $square = new Shapes\Square(4);
    $circle = new Shapes\Circle(4);
    $rectangle = new Shapes\Rectangle(4, 5);

    // log the areas of each
    dump(
        $square->area(), // 16
        $circle->area(), // 50.265482457437
        $rectangle->area() // 20
    );
    }

}