<?php 
namespace Test;

use PHPUnit\Framework\TestCase;
use Project\Circle;

class CircleTest extends TestCase {
    public function test_area() {
        $obj = new Circle(10);
        $this->assertEquals( 314, $obj->area());
    }
}