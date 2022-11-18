<?php
    class City 
    {
        public $name;
        public $population;
        
        public function __construct($name)
        {
            $this->name = $name;            
        }
    }