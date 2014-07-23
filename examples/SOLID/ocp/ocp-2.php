<?php

interface Area
{
    public function area();
}

class Rectangle implements Area
{
    public $width;
    public $height;

    public function area() {
        return $this->width * $this->height;
    }
}

class AreaCalculator
{
    public function area(array $shapes) {
        $area = 0;
        foreach ($shapes as &$shape) {
                $area += $shape->area();
        }
        return $area;
    }
}

$rec = new Rectangle();
$rec->width = 4;
$rec->height = 5;

$calc = new AreaCalculator();
print $calc->area(array($rec));
