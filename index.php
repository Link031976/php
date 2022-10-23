<?php
require_once('employee.php');
require_once('user.php');

$worker1=new Employee('John',25,1000); 
$worker2=new Employee('urik',26,2000); 
        
echo "<h4 style='color: red'>Урок 5 Завдання 4-6 </h4>";
echo $worker1->getName()." ".$worker1->getAge()." років, і він отримує $".$worker1->getSalary()."<br>";
echo $worker2->getName()." ".$worker2->getAge()." років, і він отримує $".$worker2->getSalary();

echo "<h4 style='color: red'>Урок 5 Завдання 7 </h4>";
echo $worker1->getName()." повнолітній? ".$worker1->checkAge()."<br>";
echo $worker2->getName()." повнолітній? ".$worker2->checkAge();

echo "<h4 style='color: red'>Урок 5 Завдання 8 </h4>";
echo "Разом вони отримують $".$worker1->getSalary()+$worker2->getSalary()."<br>";

$user1=new User ('John',25); 
$user2=new User ('urik',26); 

echo "<h4 style='color: red'>Урок 5 Завдання 11 </h4>";
echo $user1->name." ".$user1->age." років<br>";
echo $user2->name." ".$user2->age." років<br>";

$user1->setAge(10);
$user2->setAge(30);
echo "Нові:<br>";
echo $user1->name." ".$user1->age." років<br>";
echo $user2->name." ".$user2->age." років<br>";
