<?php
//інтерфейс шар
interface iSphere
{
    const PI = 3.14; // число ПІ як константа
    // Конструктор кулі:
    public function __construct($radius);
    // Метод знаходження обсягу кулі:
    public function getVolume();
    // Метод знаходження площі поверхні кулі:
    public function getSquare();
}
