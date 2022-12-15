<?php
//7.	Зробіть клас Employee, який реалізує інтерфейс iEmployee.
class Employee implements iEmployee
{
    public $name; //ім'я
    public $age; //вік
    public $salary; //зарплата

    public function __construct(string $name, int $age)
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
    //встановлення значення зарплати
    public function setSalary(int $salary)
    {
        $this->salary = $salary;
    }
    //повертає розмір зарплати
    public function getSalary(int $salary): int
    {
        return $this->salary;
    }
}
