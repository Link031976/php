<?php
    require_once('employee.php');
    class Driver extends Employee
    {
        private $seniorityWater;    //стаж водія
        private $categoryWater;     //категорія водіння

        public function __set($name,$val)
        {
            $this->$name=$val;
        }
        public function __get($name)
        {
            return $this->$name;
        }
    }