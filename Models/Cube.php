<?php
//2.	Зробіть клас Cube, який реалізує інтерфейс iCube.
class Cube implements iCube
{
    private $edge; //ребро

    //конструктор отримує ребро кубу
    public function __construct(float $edge)
    {
        $this->edge = $edge;
    }

    // повертає об'єм кубу
    public function volume(): float
    {
        return pow($this->edge, 3);
    }
}
