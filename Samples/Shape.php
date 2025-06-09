<?php

interface Shape {
    public function getArea();

}

class Rectangle implements Shape {
    private $width;
    private $height;

    public function __construct($w, $h) {
        $this->width = $w;
        $this->height = $h;
    }

    public function getArea() {
        return $this->width * $this->height;

    }
}

class Circle implements Shape {
    private $radius;

    public function __construct($r) {
        $this->radius = $r;
    }

    public function getArea() {
        return pi() * pow($this->radius, 2);
    }
}

$rect = new Rectangle(10,5);
$circle = new Circle(7);

echo $rect->getArea() ."\n";
echo number_format($circle->getArea(),2);

?>
