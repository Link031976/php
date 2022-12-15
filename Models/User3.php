<?php

////4.	Зробіть клас User, який реалізує інтерфейс iUser.
class User3 implements iUser3
{
    public $name;//ім'я
    public $age;//вік

    public function __construct (string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    // встановити ім'я
    public function setName($name)
    {
        $this->name = $name;
    }

    // отримати ім'я
    public function getName()
    {
        return $this->name;
    }

    // встановити вік
    public function setAge($age)
    {
        $this->age = $age;
    }

    // отримати вік
    public function getAge()
    {
        return $this->age;
    }
}