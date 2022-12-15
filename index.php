<?php
//автозавантаження описів інтерфейсів
$f = 'Interfaces';
require('autoloader.php');
//автозавантаження опісів класів
$f = 'Models';
require('autoloader.php');

//можливість переходу до виконання завдання в уроці 18
echo "<a href='index_in_lesson18.php'>Перейти до завдання з уроку 18</a><br>";

echo "<h4 style='color: red'>Урок 18 завдання 3</h4>";

$disk = new Disk(20);
$rectangle = new Rectangle(30, 10);

$figuresCollection = new FiguresCollection;
$figuresCollection->addFigure($disk);
$figuresCollection->addFigure($rectangle);
echo "Сумарний периметр всіх фігур " . $figuresCollection->getTotalSquare();

echo "<h4 style='color: red'>Урок 18 завдання 4</h4>";
