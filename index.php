<?php
require_once('employee.php');

$user1=new Employee('Богдан','Ільков',1000); 
$user2=new Employee('Петро',"П'яточкин",2000);

//echo "Загальна зарплата ".$user1->getSalary()+$user2->getSalary()."<br>";
//echo "Сумарний вік ".$user1->getAge()+$user2->getAge()."<br>";
