<?php
//Квадрат
class Quadrate implements Figure
{

    private $side; //сторона
    //конструктор з параметром строна
    public function __construct(float $side)
    {
        $this->side = $side;
    }

    //Повернення значення площі квадрата
    public function getSquare(): float
    {
        return pow($this->side, 2); //a^2
    }

    //Повернення значення периметру квадрата
    public function getPerimeter(): float
    {
        return 4 * $this->side; //4 * a
    }
}
