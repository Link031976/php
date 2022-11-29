<?php
require_once('Models\Figure.php');
// класс Rectangle як нащадок абстрактного класу Figure
class Rectangle extends Figure
{
    private $a; // ширини прямокутника
    private $b; // довжина прямокутника

    // реалізація метода getSquare для обчислення площі прямокутника
    public function getSquare()
    {
        return $this->a * $this->b;
    }
    // реалізація метода getPerimeter для обчислення периметру прямокутника
    public function getPerimeter()
    {
        return $this->a + $this->b;
    }
    // задання значення val для властивості name 
    public function set($name,$val)
    {
        $this->$name = $val;
    }
    // повернення значення властивості name
    public function get($name)
    {
        return $this->$name;
    }
}