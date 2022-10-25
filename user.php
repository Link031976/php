<?php
    class user
        {
            public $name;
            public $age;

        public function __construct($a,$b) 
            {
                $this->name=$a;
                $this->age=$b;                
            } 
        
        public function setAge($age) 
            {
                if ($age>=18) $this->age=$age; //lesson5 line 18
            }
        
            public function subAge($age) 
            {
                $this->age = $this->age - $age;
            }
        }