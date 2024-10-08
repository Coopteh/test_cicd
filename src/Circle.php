<?php 
namespace Project;

class Circle {
    private int $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }

    // вычисляет площадь круга
    public function area() {
        $area = 3.14 * $this->radius*$this->radius;
        return $area;
    }
}