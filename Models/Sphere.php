<?php
//клас шар є реалізацією інтерфейсу iSphere
class Sphere implements iSphere
{
    public $radius; //радіус

    public function __construct($radius)
    {
    }
    // Метод знаходження обсягу кулі:
    public function getVolume()
    {
        // V=4/3*π*R^3.
        return 4 / 3 * $this->PI * pow($this->radius, 3);
    }
    // Метод знаходження площі поверхні кулі:
    public function getSquare()
    {
        // S=4*π*R^2.
        return 4 * $this->PI * pow($this->radius, 2);
    }
}
