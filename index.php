<?php

$f='Models\trait';
require_once('autoloader.php');
unset($f);

//$f='Models';
require_once('Models\Country.php');
require_once('Models\Test.php');


echo "<a href='index_in_lesson19.php'>Перейти до завдання з уроку 19</a><br>";

echo "<h4 style='color: green'>Урок 19 завдання 1</h4>";
//1.	Реалізуйте клас Country з властивостями name, age, population
// та гетерами для них. Нехай наш клас для скорочення свого коду використовує вже створений трейт Helper

$country = new Country('Англія',date('Y')-927,55977000);
echo 'В '.$country->name.', якій вже '.$country->age.', мешкає понад '.$country->population.' осіб<br>';
unset($country);

$country = new Country('Франція',date('Y')- 486,68084217);
echo 'В '.$country->name.', якій вже '.$country->age.', мешкає понад '.$country->population.' осіб<br>';

//2.	Зробіть 3 трейти з назвами Trait1, Trait2 та Trait3. 
//Нехай у першому трейте буде метод method1, який повертає 1, 
//у другому трейте - метод method2, який повертає 2, 
//а в третьому трейте - метод method3, який повертає 3.
// Нехай усі ці методи будуть приватними

echo "<h4 style='color: green'>Урок 19 завдання 3</h4>";
//3.	Зробіть клас Test, який використовує всі три створені нами трейти.
// Зробіть у цьому класі публічний метод getSum, 
//який повертає суму результатів методів підключених трейтів.

$test = new Test;
echo "getSum= ".$test->getSum();
