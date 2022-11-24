<?php
    class Employee
    {
        private $name; //ім'я працівника
        public $salary; // розмір зарплати працівника

        public function __construct($name, $salary)
        {
            $this->name = $name;
            $this->salary = $salary;
        }
        //повертає ім'я працівника
        public function getName()
        {
            return $this->name;
        }
        //повертає розмір зарплати працівника
        public function getSalary()
        {
            return $this->salary;
        }
    }
