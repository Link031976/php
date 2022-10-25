<?php
class Employee
    {
        public readonly string $name;
        public readonly string $surname;      
        private $salary;//зарплата


        public function __construct($a,$b,$c) 
        {
            $this->name=$a;
            $this->surname=$b;
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
