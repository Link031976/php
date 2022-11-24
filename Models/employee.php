<?php
    class Employee //клас Employee
    {
        public $name; //the name of the profession / назва професії
        public $salary; // payment / оплата

        public function __construct($name, $salary)
        {
            $this->name = $name;
            $this->salary = $salary;
        }
        
        //повернення назви професії
        //returning the name of the profession
        public function getName() 
        {
            return $this->name;
        }

        //return of salary
        // повернення суми зарплати
        public function getSalary()
        {
            return $this->salary;
        }
    }
