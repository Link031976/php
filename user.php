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
                $this->age=$age;
            }
        }