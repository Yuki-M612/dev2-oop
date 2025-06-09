<?php

//Parent Class

class Animal {

    public function makeSound() {
        echo "Animal makes a sound.<br>";
    }
}

//Child Class
class Dog extends Animal {

    public function makeSound() {
        echo "Dog barks<br>";
    }
}

$dog = new Dog();
$dog->makeSound(); // Output: Dog barks

//Polymorphism

class Cat {
    public function makeSound() {
        echo "Cat meows<br>";
    }
}

class Cow {
    public function makeSound() {
        echo "Cow moos\n<br>";
    }
}

function playSound($animal) {
    $animal->makeSound();

}

$cat = new Cat;
$cow = new Cow;

playSound($cat);
playSound($cow);


?>