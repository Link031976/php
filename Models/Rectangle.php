<?php
require_once('Models\Figure.php');
// класс Rectangle як нащадок абстрактного класу Figure
class Rectangle extends Figure
{
    private $a; // ширини прямокутника
    private $b; // довжина прямокутника

    // реалізація метода getSquare для обчислення площі прямокутника
    public function getSquare(): float
    {
        return $this->a * $this->b;
    }
    // реалізація метода getPerimeter для обчислення периметру прямокутника
    public function getPerimeter(): float
    {
        return $this->a + $this->b;
    }
    // задання значення val для властивості name 
    public function set(string $name,$val)
    {
        $this->$name = $val;
    }
    // повернення значення властивості name
    public function get(string $name)
    {
        return $this->$name;
    }
    //метод getSquarePerimeterSum, який знаходитиме суму площі та периметра
    public function getSquarePerimeterSum(): float
    {
        return $this->getSquare() + $this->getPerimeter();
    }
}