<?php
class Employee
    {

        public readonly string $name;
        public readonly string $surname;
        private $age ;//Вік
       
        public function __construct($a,$b,$c) 
        {
            $this->name=$a;
            $this->surname=$b;
            $this->salary=$c;
        }
        
        public function getName() //повернення ім'я
            {return $this->name;}

        public function getAge() //повернення віку
            {return $this->age;}

        public function getSalary() // повернення рівня зп
            {return $this->salary."$";}

        public function checkAge() //перевірка на повноліття
            {
                if ($this->age>18) return TRUE;
                   else return FALSE;
            }

        public function doubleSalary()

            {$this->salary=$this->salary*2;}

            public function __get ($name)
            {
                return $this->$name;
            }

        public function __set ($name, $value)
            {
                if ($name == 'age') $this->isAgeCorrect($value);
                    else return $this->$name = $value;                    
            }

        public function isAgeCorrect($age)
            {
                if (($age >1) and ($age<100)) return $this->age = $age;
            }        

    }
