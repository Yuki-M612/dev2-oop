<?php
require_once 'Animal.php';

class Bird extends Animal {
    public function __construct($name, $breed) {
        $this->name = $name;
        $this->species = "Bird";
        $this->breed = $breed;
    }

    public function speak() {
        return "<p class='fw-bold text-danger'><em>{$this->name} says: Tweet!</em></p>";
    }
}