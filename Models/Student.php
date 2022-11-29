<?php
require_once('Models\User.php');
// класс Student як нащадок абстрактного класу User
class Student extends User
{
    public $scholarship; // розмір степендії

    //реалізація метода збільшення степендії
    public function increaseRevenue($value)
    {
        $this->scholarship = $this->scholarship + $value;
    }
    //реалізація метода зменшити степендії
    public function decreaseRevenue($value)
    {
        $this->scholarship = $this->scholarship - $value;
    }
}