<?php
    $f='Models';
    require_once('autoloader.php');    
	
	echo "<pre>";
	
	//line 2
	echo "<p style='color: red'>Урок 15 Завдання 2 </p>";
	$post1 = new Post('programmer',2000);
	$post2 = new Post('water',1000);
	$post3 = new Post('manager',1500);
	print_r($post1);
	print_r($post2);
	print_r($post3);
	
	//line 7
	
	$employee1 = new Employee ('Oliver','Williams',$post1);
	$employee2 = new Employee ('Jack','Peters',$post2);
	$employee3 = new Employee ('Harry','Gibson',$post3);	
	
	//line 8
	echo "<p style='color: red'>Урок 15 Завдання 8 </p>";
	echo $employee1->get('name')." ".$employee1->get('surname').", ".
		$employee1->getPost()->getName()." з зарплатою ".$employee1->getPost()->getSalary()."<br>";
	echo $employee2->get('name')." ".$employee2->get('surname').", ".
		$employee2->getPost()->getName()." з зарплатою ".$employee2->getPost()->getSalary()."<br>";
	echo $employee3->get('name')." ".$employee3->get('surname').", ".
		$employee3->getPost()->getName()." з зарплатою ".$employee3->getPost()->getSalary()."<br><br>";
		
	// line 9
	//Harry changed jobs to water
	echo "<p style='color: red'>Урок 15 Завдання 9 </p>";
	$employee3->changePost($post2);
	echo $employee3->get('name')." ".$employee3->get('surname').", змінив роботу на ".
		$employee3->getPost()->getName()." з зарплатою ".$employee3->getPost()->getSalary()."<br>";

	//Jack changed jobs to manager
	$employee2->changePost($post3);
	echo $employee2->get('name')." ".$employee2->get('surname').", змінив роботу на ".
		$employee2->getPost()->getName()." з зарплатою ".$employee2->getPost()->getSalary()."<br>";

	// line 10
	echo "<p style='color: red'>Урок 15 Завдання 10 </p>";
	Num::$num1=2;
	Num::$num2=3;
	echo 'сумма '.Num::$num1.' та '.Num::$num2.' дорівнює '.Num::$num1+Num::$num1;
	echo "<br><a href='line11.php'> Перегляд до виконання завдання 11 </a>";