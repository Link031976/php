<?php
require_once('Models\User.php');
// класс Employee як нащадок абстрактного класу User
class Employee extends User
{
    public $salary; // розмір зарплати 

    //реалізація метода збільшення зарплати
    public function increaseRevenue($value)
    {
        $this->salary = $this->salary + $value;
    }

    //реалізація метода зменшити зарплати
    public function decreaseRevenue($value)
    {
        $this->salary = $this->salary - $value;
    }
}
