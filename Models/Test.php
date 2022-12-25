<?php
// Клас Test
// class Test
class Test
{
    use Trait1, Trait2, Trait3; //підключення трейтів Trait1, Trait2, Trait3
    // метод суми
    // sum method
    public function getSum()
    {
        return $this->method1() + $this->method2() + $this->method3(); 
    }
}