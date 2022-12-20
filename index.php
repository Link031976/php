<?php
//require_once('autoloader.php');

echo "<a href='index_in_lesson19.php'>Перейти до завдання з уроку 19</a><br>";

echo "<h4 style='color: green'>Урок 19 завдання 1</h4>";
//1.	Реалізуйте клас Country з властивостями name, age, population
// та гетерами для них. Нехай наш клас для скорочення свого коду використовує вже створений трейт Helper

trait Helper
{
    public $name;
    public $age;
    public $population;

    public function __construct($name, $age, $population)
    {
        $this->name = $name;
        $this->age = $age;
        $this->population = $population;
    }
  
}

class Country 
{
    use Helper;
}


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

trait Trait1
{
    private function method1():int
    {
        return 1;
    }
}
trait Trait2
{
    private function method2():int
    {
        return 2;
    }
}
trait Trait3
{
    private function method3():int
    {
        return 3;
    }
}

echo "<h4 style='color: green'>Урок 19 завдання 3</h4>";
//3.	Зробіть клас Test, який використовує всі три створені нами трейти.
// Зробіть у цьому класі публічний метод getSum, 
//який повертає суму результатів методів підключених трейтів.


class Test
{
    use Trait1, Trait2, Trait3; //підключення трейтів Trait1, Trait2, Trait3
    // метод суми
    public function getSum()
    {
        return $this->method1() + $this->method2() + $this->method3(); 
    }
}

$test = new Test;
echo "getSum= ".$test->getSum();
