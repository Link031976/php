<?php
// Колекція 
class FiguresCollection
{
    private $figures = []; //масив фігур

    //Додавання нової фігури до колекції
    public function addFigure($figure)
    {
        $this->figures[] = $figure;
    }
    //вивід колекції фігур
    public function getCollection()
    {
        print_r($this->figures);
    }
    // Повертає сумарний периметр всіх фігур.
    public function getTotalSquare()
    {
        $sumFigures = 0;
        foreach ($this->figures as $figure) {
            $sumFigures = $sumFigures + $figure->getSquare(); // використовуємо метод getSquare
        }
        return $sumFigures;
    }
    //11.	Переберіть циклом масив $arr і виведіть на екран лише площі об'єктів, що реалізують інтерфейс iFigure.
    public function volumeFigure()
    {
        foreach ($this->figures as $figure) {
            $a = class_implements($figure);
            if (isset($a['Figure'])) echo $figure->getSquare() . "<br>";
        }
    }
}
