<?php
require_once('employee.php');
require_once('student.php');
require_once('user.php');
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

echo "<h4 style='color: red'>Урок 5 Завдання 13 </h4>";
echo "Подвійна зарплата робітника ".$worker1->name." - $".$worker1->doubleSalary()."<br> ";
echo "Подвійна зарплата робітника ".$worker2->name." - $".$worker2->doubleSalary()."<br> ";

echo "<h4 style='color: red'>Урок 5 Завдання 14-16 </h4>";
require_once('rectangle.php');
$rectangle= new Rectangle (3,5);
echo "Є прямокутник ".$rectangle->a. " на ".$rectangle->b." площою ".$rectangle->getSquare().
    " та периметром ".$rectangle->getPerimeter()."<br>";

echo "<h4 style='color: red'>Урок 5 Завдання 17 </h4>";    
//У нас вже існує класс User. Неможно створити даний клас повторно. Можно створити нащадка.
//тому створюю Usersнащадок классу User.
class Users extends User
    {
        
    }

$users = new Users('Василь',25);
$users->setAge(50);
echo "Якщо змінити на 50, то отримаємо ".$users->age."<br>";
$users->setAge(5);
echo "Якщо змінити на 5, то отримаємо ".$users->age."<br>";
echo "<h4 style='color: red'>Урок 5 Завдання 18 </h4>";   
$users->subAge(5);
echo "Віднімемо 5, та отримаємо ".$users->age."<br>";

