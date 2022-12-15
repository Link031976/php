<?php

//Коло
class Disk implements Figure
{
    private $radius; //радіус float
    //конструктор з параметром радіус float
    public function __construct(float $radius)
    {
        $this->a = $radius;
    }

    //Повернення значення площі кругу
    public function getSquare(): float
    {
        return Disk::PI * pow($this->radius, 2); //pi*r^2
    }

    //Повернення значення периметру кругу
    public function getPerimeter(): float
    {
        return 2 * $this->PI * $this->radius; //2*pi*r
    }
}
