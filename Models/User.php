<?php

//клас User як реалізація інтерфейсу iUser
class User implements iUser
{
    public $name; //ім'я
    public $age; //вік

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
