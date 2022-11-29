<?php
// ім'я папки з описами класів
//the name of the class description folder
$f = 'Models';
//Виклик автолоадеру для приєднання файлів з описами класів
//attaching files with class descriptions
require_once('autoloader.php');


echo "<p style='color: blue'>Урок 17 завдання 1 </p>";

//1.	Самостійно, не підглядаючи в мій код, реалізуйте такий самий абстрактний клас
// User, а також класи Employee і Student, що успадковують від нього.

abstract class User
{
    public $name;
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    // абстрактний метод increaseRevenue (збільшення доходу)
    abstract public function increaseRevenue($value);
}

//2.	Додайте у ваш клас User такий же абстрактний метод increaseRevenue. 
//Напишіть реалізацію цього у класах Employee і Student.

//3.	Додайте також у ваш клас User абстрактний метод decreaseRevenue (зменшити зарплату). Напишіть реалізацію цього у класах Employee і Student.
//4.	Зробіть аналогічний клас Rectangle (прямокутник), який має дві приватні властивості: $a для ширини і $b для довжини. Цей клас також повинен успадковувати від класу Figure та реалізовувати його методи.
//5.	Додайте в клас Figure метод getSquarePerimeterSum, який знаходитиме суму площі та периметра.
