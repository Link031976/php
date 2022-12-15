<?php
//1.	Зробіть інтерфейс iCube, який описуватиме фігуру Куб. 
//Нехай ваш інтерфейс описує конструктор, що параметром приймає сторону куба, 
//а також методи для отримання об'єму куба та площі поверхні.
interface iCube
{
    public function __construct(float $edge); //конструктор отримує ребро кубу
    public function volume(): float; // повертає об'єм кубу
}