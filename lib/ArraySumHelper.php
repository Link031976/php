<?php
class ArraySumHelper
{
    /* Знаходить суму перших ступенів елементів масиву: */
    public function getAvg1($arr)
    {
        return $this->getSum($arr, 1);
    }
    /* Знаходить суму других ступенів елементів масиву і витягує з неї квадратний корінь: */
    public function getAvg2($arr)
    {        
        return $this->calcSqrt($this->getSum($arr,2),1/2);
    }
    /* Знаходить суму третіх ступенів елементів масиву і витягує з неї кубічний корінь: */
    public function getAvg3($arr)
    {
        return $this->calcSqrt($this->getSum($arr,3),1/3);
    }
    /* Знаходить суму четвертих ступенів елементів масиву і витягує з неї корінь четвертого ступеня: */
    public function getAvg4($arr)
    {
        return $this->calcSqrt($this->getSum($arr,4),1/4);
    }
    /* Допоміжний метод, який параметром приймає масив та ступінь та повертає суму ступенів елементів масиву: */
    private function getSum($arr, $power)
    {
        $sum=0;
        foreach ($arr  as $element)
            {
                $sum+= pow($element,$power);
            }
        return $sum;
    }
    /* Допоміжний метод, який параметром приймає ціле число та ступінь і повертає корінь заданого ступеня з числа: */
    private function calcSqrt($num, $power)
    {
        return pow($num,$power);
    }
}
