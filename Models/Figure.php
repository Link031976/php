<?php
// абстрактний класс Figure (фігура)
abstract class Figure
{
    // метод обчислення площи прямокутника
    abstract public function getSquare();
    // метод обчислення периметру прямокутника
    abstract public function getPerimeter();
    //метод getSquarePerimeterSum, який знаходитиме суму площі та периметра
    abstract public function getSquarePerimeterSum();

}
