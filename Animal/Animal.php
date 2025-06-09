<?php
class Animal {
    protected $name;
    protected $species;
    protected $breed;

    public function __construct($name, $species, $breed) {
        $this->name = $name;
        $this->species = $species;
        $this->breed = $breed;
    }

    public function getName() {
        return $this->name;
    }

    public function introduction() {
        return "
        <p>Hello! My name is {$this->name}. I am a <strong>{$this->species}</strong> of breed <strong>{$this->breed}</strong>.</p>
        ";
    }
}