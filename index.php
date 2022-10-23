<?php
require_once('employee.php');

$user1=new Employee('John',25,1000); //створення об'єкту work1 класу Employee
$user2=new Employee('urik',26,2000); //створення об'єкту work2 класу Employee
        
echo "Загальна зарплата ".$user1->getSalary()+$user2->getSalary()."<br>";
echo "Сумарний вік ".$user1->getAge()+$user2->getAge()."<br>";
