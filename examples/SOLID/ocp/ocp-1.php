<?php

class Rectangle
{
    public $width;
    public $height;
}

class AreaCalculator
{
    public function area(array $shapes) {
        $area = 0;
        foreach ($shapes as &$shape) {
            if ($shape instanceof Rectangle) {
                $area += $shape->width * $shape->height;
            }
        }
        return $area;
    }
}

$rec = new Rectangle();
$rec->width = 4;
$rec->height = 5;

$calc = new AreaCalculator();
print $calc->area(array($rec));
