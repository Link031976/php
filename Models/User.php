<?php
//Опис класу Користувач
class User
{
    public static $calculator = 0; // для підрахування кількості об'єктів

    public function __construct()
    {
        //при створенні нового об'єкту, виконую інкримент calculator
        self::$calculator++;
    }
}
