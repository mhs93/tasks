<?php
abstract class Shape {

    abstract public function getArea();
}

class Circle extends Shape {
    protected $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function getArea(){
        return pi() * pow($this->radius, 2);
    }
}

class Rectangle extends Shape {
    protected $width;
    protected $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function getArea(){

        return $this->width * $this->height;
    }
}

?>