<?php
require_once('employee.php');
require_once('arr.php');

$user1=new Employee('John',25,1000); //створення об'єкту work1 класу Employee
$user2=new Employee('urik',26,2000); //створення об'єкту work2 класу Employee
        
echo "Загальна зарплата ".$user1->getSalary()+$user2->getSalary()."<br>";
echo "Сумарний вік ".$user1->getAge()+$user2->getAge()."<br>";

$arr = new Arr;
$arr->set(10);
$arr->set(11);
$arr->set(12);
$arr->set(13);

//echo $arr->getSum(); // виведе 0
echo "Початковий:";
$result=$arr->get();

echo "Додаємо: <pre>";
$mas=array(20,21,22,23,24);
print_r($mas);

$arr->add($mas);
echo "Отримано:";
$result=$arr->get();