<?php
require_once 'Animal.php';

class Cat extends Animal {
    public function __construct($name, $breed) {
        $this->name = $name;
        $this->species = "Cat";
        $this->breed = $breed;
    }

    public function speak() {
        return "<p class='fw-bold text-danger'><em>{$this->name} says: Meow!</em></p>";
    }
}