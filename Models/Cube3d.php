<?php
//9.	Зробіть клас Cube, який реалізовуватиме інтерфейс Figure3d.
class Cube3d implements Figure3d
{
    public $edge; //ребро

    //отримати обсяг
    public function getVolume()
    {
        return pow($this->edge, 3);
    }
    //отримати площу поверхні
    public function getSurfaceSquare()
    {
        return 6 * pow($this->edge, 2);
    }
}
