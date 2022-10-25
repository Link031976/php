<?php
require_once('employee.php');
require_once('student.php');

$user1=new Employee('Богдан','Ільков',1000); 
$user2=new Employee('Петро',"П'яточкин",2000);

$student= new Student('Семен',3);


$student->transferToNextCourse();
echo " переведено на наступний ".$student->course." курс <br>";
$student->transferToNextCourse();
echo " переведено на наступний ".$student->course." курс <br>";
$student->transferToNextCourse();
echo " переведено на наступний ".$student->course." курс <br>";

//echo "Загаль"<h4 style='color: red'>Урок 8 Завдання 13 </h4>";на зарплата ".$user1->getSalary()+$user2->getSalary()."<br>";
//echo "Сумарний вік ".$user1->getAge()+$user2->getAge()."<br>";
