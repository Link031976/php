<?php

class ArraySumHelper
{
    //підрахунок суми значень масиву arr у ступені 1
    //calculation of the sum of the values ​​of the arr array in power 1
    public static function getSum1($arr) //
    {
        return self::getSum($arr, 1);
    }
    //підрахунок суми значень масиву arr у ступені 2
    //calculation of the sum of the values ​​of the arr array in power 2
    public static function getSum2($arr)
    {
        return self::getSum($arr, 2);
    }
    //підрахунок суми значень масиву arr у ступені 3
    //calculation of the sum of the values ​​of the arr array in power 3
    public static function getSum3($arr)
    {
        return self::getSum($arr, 3);
    }
    //підрахунок суми значень масиву arr у ступені 4
    //calculation of the sum of the values ​​of the arr array in power 4
    public static function getSum4($arr)
    {
        return self::getSum($arr, 4);
    }
    // підрахунок суми значень масиву arr у ступені power
    // calculation of the sum of the values ​​of the arr array in the degree of power
    private static function getSum($arr, $power)
    {
        $sum = 0;
        foreach ($arr as $elem) 
        {
            $sum += pow($elem, $power);
        }
        return $sum;
    }
}
