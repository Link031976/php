<?php
// абстрактний класс Figure (фігура)
abstract class Figure
{
    // метод обчислення площи прямокутника
    abstract public function getSquare(): float;
    // метод обчислення периметру прямокутника
    abstract public function getPerimeter(): float;
    //метод getSquarePerimeterSum, який знаходитиме суму площі та периметра
    abstract public function getSquarePerimeterSum(): float;

}
