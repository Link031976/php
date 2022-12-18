<?php
//5.	Зробіть так, щоб клас Disk також реалізовував два інтерфейси: і iFigure, і iCircle
//Коло

class Disk implements Figure, iCircle
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
    public function getRadius(): float
    {
        return $this->radius;
    }
    public function getDiameter(): float
    {
        return 2 * $this->radius;
    }
}
