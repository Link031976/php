<?php
	$f='Models11';
	require_once('autoloader.php');    
	//
	//Completing the task from 11 to 15
	//
	
		echo "<p style='color: red'>Урок 15 Завдання 12 </p>";
		echo "Сумма ".Num::getSum();
		
		echo "<p style='color: red'>Урок 15 Завдання 13 </p>";
		Geometry::$radius=10;
		echo "Об'эм кулі радіусом ".Geometry::$radius." дорівнює ".Geometry::volume();
		
		echo "<p style='color: red'>Урок 15 Завдання 15 </p>";
		$arr=[1,2,3];
		echo ArraySumHelper::getSum2($arr);
		
		