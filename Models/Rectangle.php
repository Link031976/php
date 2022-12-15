<?php

//Прямокутник
class Rectangle implements Figure 
{
    private $a; //довжина
    private $b;//ширина
    //конструктор з параметрами довжени та ширини
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
    }

    //Повернення площі прямокутника
    public function getSquare()
    {
        return $this->a * $this->b;
    }

    //Повернення периметру прямокутника
    public function getPerimeter()
    {
        return 2 * ($this->a + $this->b);
    }
}
