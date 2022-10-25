<?php
require_once('employee.php');
require_once('student.php');

echo "<h4 style='color: red'>Урок 6 Завдання 3 </h4>";
$student = new Student ("П'яточкин",3);
echo "Додано студента ".$student->course." курсу ".$student->name."<br>";

echo "<h4 style='color: red'>Урок 6 Завдання 4 </h4>";
$student->transferToNextCourse();
echo " переведено на наступний ".$student->course." курс <br>";
$student->transferToNextCourse();
echo " переведено на наступний ".$student->course." курс <br>";
$student->transferToNextCourse();
echo " переведено на наступний ".$student->course." курс <br>";

$user1=new Employee('eric',25,1000); 
$user2=new Employee('kyle',30,2000); 
        
echo "<h4 style='color: red'>Урок 6 Завдання 10 </h4>";
echo "Загальна зарплата ".$user1->getSalary()+$user2->getSalary()."<br>";
echo "Сумарний вік ".$user1->getAge()+$user2->getAge()."<br>";

echo "<h4 style='color: red'>Урок 6 Завдання 13 </h4>";
$user1->__set('age',150);
echo "Змніню на 150 - ". $user1->__get('age')."<br>";
$user2->__set('age',15);
echo "Змніню на 15 - ". $user2->__get('age')."<br>";

