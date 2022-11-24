<?php
// ім'я папки з описами класів
//the name of the class description folder
$f = 'Models';
//приєднання файлів з описами класів
//attaching files with class descriptions
require_once('autoloader.php');

echo "<a href='index16Les.php?in_class_exists=GetClassName&in_metod_exists=GetMetodName'>
    Функції для роботи з класами та об'єктами</a>";

echo "<p style='color: blue'>Урок 16 завдання 1 </p>";
//1.	Не підглядаючи в мій код, реалізуйте такий же клас User, який підраховує кількість своїх об'єктів.


class User
{
    public static $calculator = 0; // для підрахування кількості об'єктів
    
    public function __construct()
    {   
        //при створенні нового об'єкту, виконую інкримент  calculator
        self::$calculator++;
    }
}

$user1 = new User(); // створюємо перший об'єкт класу
$user2 = new User(); // створюємо другий об'єкт класу
$user3 = new User(); // створюємо другий об'єкт класу
echo "Додано ". User::$calculator." об'єктів класу User"; 

echo "<p style='color: blue'>Урок 16 завдання 2 </p>";
//2.	Самостійно переробте код вашого класу User відповідно до теоретичної частини уроку.