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

$figuresCollection = new FiguresCollection(); //створюю об'экт класу колекцыя

$i0 = 0; //лічильник для класу Quadrate
$i1 = 0; //лічильник для класу Rectangle
$i2 = 0; //лічильник для класу Cube

do
    switch (rand(0, 2)) { //генерую число - тип фігури
        case 0: {
                $figuresCollection->addFigure(new Quadrate(rand(0, 50))); // створюю клас Quadrate до колекції
                $i0++; //інкримент лічильника фігур   Quadrate   
                break;
            }
        case 1: {
                $figuresCollection->addFigure(new Rectangle(rand(0, 50), rand(0, 50))); // створюю клас Quadrate до колекції
                $i1++; //інкримент лічильника фігур Rectangle     
                break;
            }
        case 2: {
                $figuresCollection->addFigure(new Cube(rand(0, 50))); // створюю клас Quadrate до колекції
                $i2++; //інкримент лічильника фігур  Cube    
                break;
            }
    } while ($i0 < 3 and ($i1 < 3 and $i2 < 3));

$figuresCollection->getCollection();
echo "<h4 style='color: red'>Урок 18 завдання 11, 12</h4>";
//11.	Переберіть циклом масив $arr і виведіть на екран лише площі об'єктів, що реалізують інтерфейс Figure.

//12.	Переберіть циклом масив $arr і виведіть для плоских фігур їхньої площі, а для об'ємних - площі їхньої поверхні.
//Всі плоскі фігури описані у інтерфейсі Figure. Реалізація завдання викладено у завданні 11
$figuresCollection->volumeFigure();
