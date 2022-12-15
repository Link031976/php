<?php
// Колекція 
class FiguresCollection
{
    private $figures = []; //масив фігур

    //Додавання нової фігури до колекції
    public function addFigure(Figure $figure)
    {
        $this->figures[] = $figure;
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
}
