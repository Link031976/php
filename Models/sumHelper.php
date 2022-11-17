<?php
class SumHelper
{
    // Сума квадратів:
    public function getSum2($arr)
    {
        return $this->getSum($arr, 2);
    }
    // Сума кубів:
    public function getSum3($arr)
    {
        return $this->getSum($arr, 3);
    }
    // Допоміжна функція для знаходження суми:
    public function getSum($arr, $power)
    {
        $sum = 0;
        foreach ($arr as $elem)
        {
            $sum =$sum + pow($elem, $power) ;
        }
        return $sum;
    }
}
