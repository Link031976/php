<?php
// ім'я папки з описами класів
//the name of the class description folder
$f = 'Models';
//Виклик автолоадеру для приєднання файлів з описами класів
//attaching files with class descriptions
require_once('autoloader.php');
//Завдання поділяється на дві частини. Перша міститься у самому уроці. Переход за цим посиланням
echo "<a href='index16Les.php?in_class_exists=GetClassName&in_metod_exists=GetMetodName'>
    Функції для роботи з класами та об'єктами</a>";

//друга частина реалізована у коді, що нище
echo "<p style='color: blue'>Урок 16 завдання 1 </p>";
//1.	Не підглядаючи в мій код, реалізуйте такий же клас User, який підраховує кількість своїх об'єктів.

$user1 = new User(); // створюємо перший об'єкт класу User
$user2 = new User(); // створюємо другий об'єкт класу User
$user3 = new User(); // створюємо другий об'єкт класу User
echo "Додано " . User::$calculator . " об'єктів класу User";

echo "<p style='color: blue'>Урок 16 завдання 2 </p>";
//2.	Самостійно переробте код вашого класу User відповідно до теоретичної частини уроку.
$calc = 0;
if (is_a($user1, 'User')) $calc++;
if (is_a($user2, 'User')) $calc++;
if (is_a($user3, 'User')) $calc++;

echo "Додано " . $calc . " об'єктів класу User";

//3.	Реалізуйте запропонований клас Circle самостійно.
$circle = new Circle;
echo "<p style='color: blue'>Урок 16 завдання 4 </p>";
//4.	За допомогою написаного класу Circle знайдіть довжину кола та площу кола з радіусом 10
$circle::$radius = 10;
echo "Площа кола з радіулом " . $circle::$radius . " дорівнює " . $circle->area() . "<br>";
echo "Довжину кола з радіулом " . $circle::$radius . " дорівнює " . $circle->circuit() . "<br>";
