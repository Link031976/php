<?php
class Employee
    {
        public $name;//Ім'я
        public $age ;//Вік
        public $salary;//зарплата

        public function __construct($a,$b,$c) //конструктор
        {
            $this->name=$a;
            $this->age=$b;
            $this->salary=$c;
        }
        public function getName() //повернення ім'я
            {echo "Працівник ".$this->name;}

        public function getAge() //повернення віку
            {return $this->age;}

        public function getSalary() // повернення рівня зп
            {return $this->salary;}

        public function checkAge() //перевірка на повноліття
            {
                if ($this->$age>18) return TRUE;
                   else return FALSE;
            }

        public function doubleSalary()
            {$this->salary=$this->salary*2;}
    }
    class Arr
    {
        private $numbers = []; // масив чисел
        public function __construct($numbers)
        {
            $this->numbers = $numbers; // записуємо масив $numbers у властивість
        }
        // Додаємо ще одне число до нашого масиву:
        public function add($number)
        {
            $this->numbers[] = $number;
        }
        // Знаходимо суму чисел:
        public function getSum()
        {
            return array_sum($this->numbers);
        }
    }