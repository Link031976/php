<?php
//автозавантаження описів інтерфейсів
$f = 'Interfaces';
require('autoloader.php');
//автозавантаження опісів класів
$f = 'Models';
require('autoloader.php');

//можливість переходу до виконання завдання в уроці 18
echo "<a href='index_in_lesson18.php'>Перейти до завдання з уроку 18</a><br>";
echo "<pre> ";
echo "<h4 style='color: red'>Урок 18 завдання 3</h4>";

$disk = new Disk(20);
$rectangle = new Rectangle(30, 10);

$figuresCollection = new FiguresCollection;
$figuresCollection->addFigure($disk);
$figuresCollection->addFigure($rectangle);
echo "Сумарний периметр всіх фігур " . $figuresCollection->getTotalSquare();

echo "<h4 style='color: red'>Урок 18 завдання 10</h4>";

//10.	Створіть декілька об'єктів класу Quadrate, кілька об'єктів класу Rectangle та кілька об'єктів класу Cube. 
//Запишіть їх у масив $arr у випадковому порядку.
$figuresCollection = new FiguresCollection();

for ($i = 0; $i <= 5; $i++) {
    $ii = rand(0, 2);

    switch ($ii) {
        case 0:
            $figuresCollection->addFigure(new Quadrate(rand(0,50)));
            break;
        case 1:
            $figuresCollection->addFigure(new Rectangle(rand(0,50), rand(0,50)));
            break;
        case 2:
            $figuresCollection->addFigure(new Cube(rand(0,50)));
            break;
    }
}

$figuresCollection->getCollection();

echo "<h4 style='color: red'>Урок 18 завдання 11</h4>";

$figuresCollection->volumeFigure();

