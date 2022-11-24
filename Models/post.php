<?php
    class Post 
    {		
        private readonly string $name;	// назва професії
        public readonly string $salary;	 //зарплата 
       		
        public function __construct ($name,$salary)
        {
            $this->name = $name;
            $this->salary = $salary;			
        }
        public function getName() //повернення назви професії
        {
            return $this->name;
        }
        public function getSalary() // повернення розміру зарплати
        {
            return $this->salary;
        }
    }