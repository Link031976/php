<?php
// Трейт Helper
// маэ властивості name, age, population та метод __construct

// Helper trait
// has properties name, age, population and method __construct

trait Helper
{
    public $name; //ім'я
    public $age; //вік
    public $population; //начелення

    public function __construct($name, $age, $population)
    {
        $this->name = $name;
        $this->age = $age;
        $this->population = $population;
    }
}
