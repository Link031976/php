<?php
// ім'я папки з описами класів
//the name of the class description folder
$f = 'Models';
//Виклик автолоадеру для приєднання файлів з описами класів
//attaching files with class descriptions
include_once('autoloader.php');

//1.	Самостійно, не підглядаючи в мій код, реалізуйте такий самий абстрактний клас
// User, а також класи Employee і Student, що успадковують від нього.
echo "<p style='color: blue'>Урок 17 завдання 1 </p>";

$employee = new Employee;
$employee->salary = 12000;
echo "Робітнеку встановлено зарплату".$employee->salary."<br>";

$student = new Student;
$student->scholarship = 10000;
echo "Студенту встановлено степендію".$student->scholarship."<br>";

//2.	Додайте у ваш клас User такий же абстрактний метод increaseRevenue. 
//Напишіть реалізацію цього у класах Employee і Student.
echo "<p style='color: blue'>Урок 17 завдання 2 </p>";

echo "Робітнику та студенту збільшено зарплату/степендію на 500.<br> Тепер:<br>";
$employee->increaseRevenue(500);
$student->increaseRevenue(500);

echo "зарплата робітника - ".$employee->salary."<br>";
echo "степендія студента - ".$student->scholarship."<br>";

echo "<p style='color: blue'>Урок 17 завдання 3 </p>";
//3.	Додайте також у ваш клас User абстрактний метод decreaseRevenue (зменшити зарплату).
// Напишіть реалізацію цього у класах Employee і Student.
echo "Робітнику та студенту зменшено зарплату/степендію на 200.<br> Тепер:<br>";

$employee->decreaseRevenue(200);
$student->decreaseRevenue(200);

echo "зарплата робітника - ".$employee->salary."<br>";
echo "степендія студента - ".$student->scholarship."<br>";

echo "<p style='color: blue'>Урок 17 завдання 4 </p>";
//4.	Зробіть аналогічний клас Rectangle (прямокутник), який має дві приватні властивості:
// $a для ширини і $b для довжини. Цей клас також повинен успадковувати від класу Figure та реалізовувати його методи.


//5.	Додайте в клас Figure метод getSquarePerimeterSum, який знаходитиме суму площі та периметра.
