<?php
$f = 'Models';
require_once('autoloader.php');


//1. Зробіть клас User, у якому будуть такі властивості - name, surname, patronymic. Зробіть так, щоб при виведенні об'єкта через echo на екран виводилося ПІБ користувача.
echo "<h4 style='color: green'>Урок 20 завдання 1</h4>";

$user = new User;
$user->name = 'Петро';
$user->surname = 'Петров';
$user->patronymic = 'Петрович';
echo $user->fio;
echo "<br>";

//2. Не підглядаючи в мій код, реалізуйте такий самий клас Arr.
echo "<h4 style='color: green'>Урок 20 завдання 2</h4>";

$arr = new Arr;

$arr->add(10);
$arr->add(11);
$arr->add(12);
echo $arr->getSum(); // очикую 33 / expect 33

// 3. Нехай дано такий клас User, властивості якого доступні тільки для читання за допомогою гетерів:
echo "<h4 style='color: green'>Урок 20 завдання 3</h4>";
$user3 = new User3('Петре', 35);
echo $user3->name . ', йому ' . $user3->age . ' років';

//4 Зробіть клас Date з громадськими властивостями year, month і day.
// За допомогою магії зробіть властивість weekDay,
// яка повертатиме день тижня, що відповідає даті.
echo "<h4 style='color: green'>Урок 20 завдання 4</h4>";

$data = new Date;
echo "02.11.1983 року - ";
echo $data->weekDay(02, 11, 1983) . "<br>";
$lastDay = getdate();
echo "Сьогоднi " . $lastDay['mday'] . '.' . $lastDay['mon'] . '.' . $lastDay['year'] . ' - ';
echo $data->weekDay($lastDay['mday'], $lastDay['mon'], $lastDay['year']);

//5 Нехай дано такий клас User з геттерами і сеттерами властивостей:
//Переробте код цього класу так, щоб замість гетерів та сеттерів використовувалися магічні методи __get та __set.
echo "<h4 style='color: green'>Урок 20 завдання 5</h4>";


$user5 = new User5;
$user5->name = 'Оскар';
$user5->age = 55;

echo $user5->name . ', йому ' . $user5->age . ' років';
