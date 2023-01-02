<?php
class Arr
{
    private $numbers = []; // масив номерiв / array of numbers

    //додаю до масиву numbers нове значення
    //add a new value to the numbers array
    public function add($num)
    {
        $this->numbers[] = $num;       
    }

    // повертаю суму елемен масиву 
    //return the sum of array elements
    public function getSum()
    {
        return array_sum($this->numbers);
    }
}
