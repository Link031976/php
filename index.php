<?php

require_once('arr.php');
require_once('lib\ArraySumHelper.php');

echo "<h4 style='color: red'>Урок 10 Завдання 1 </h4>";
$arr = new Arr;
$arr->add(10); 
$arr->add(11); 
echo $arr->getSum();

echo "<h4 style='color: red'>Урок 10 Завдання 2 </h4>";
//echo (new Arr)->add(1)->add(2)->push([3, 4])->getSum();

echo "<h4 style='color: red'>Урок 10 Завдання 3 </h4>";
$mas=[1,2,3,4,5,6];
echo "В масиві: <pre>";
print_r($mas);

echo "Знаходить суму перших ступенів елементів масиву: ".(new ArraySumHelper)->getAvg1($mas)."\n";
echo "Знаходить суму других ступенів елементів масиву і витягує з неї квадратний корінь: ".
    (new ArraySumHelper)->getAvg2($mas)."\n";
echo "Знаходить суму третіх ступенів елементів масиву і витягує з неї кубічний корінь:  ".
    (new ArraySumHelper)->getAvg3($mas)."\n";
echo "Знаходить суму четвертих ступенів елементів масиву і витягує з неї корінь четвертого ступеня: ".
    (new ArraySumHelper)->getAvg4($mas)."\n";


