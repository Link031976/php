<?php

require_once('employee.php');
require_once('arr.php');
include ('arr.php');

$user1 = new Employee ('John',25,1000); //створення об'єкту work1 класу Employee
$user2 = new Employee ('urik',26,2000); //створення об'єкту work2 класу Employee
        
echo "Загальна зарплата ".$user1->getSalary()+$user2->getSalary()."<br>";
echo "Сумарний вік ".$user1->getAge()+$user2->getAge()."<br>";

$arr = new Arr ([1, 2, 3]); // створюємо об'єкт, записуємо до нього масив [1, 2, 3]
$arr->add(4); // Додаємо в кінець масиву число 4
$arr->add(5); // додаємо в кінець масиву число 5
// Знаходимо суму елементів масиву:
echo $arr->getSum(); // виведе 15
