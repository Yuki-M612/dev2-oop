<?php
require_once 'Animal.php';

class Dog extends Animal {
    public function __construct($name, $breed) {
        $this->name = $name;
        $this->species = "Dog";
        $this->breed = $breed;
    }

    public function speak() {
        return "<p><em>{$this->name} says: Woof!</em></p>";
    }
}