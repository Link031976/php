<?php
//До завдання 3. Оскільки ім'я класу повинно бути унікальним, 
//то у назву класу додано номер завдання User3
class User3
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function __get($name)
    {
        return $this->$name;
    }    
}
