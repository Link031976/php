<?php
    class User
    {
        public $name;
        public $surname;

        public function __construct($name)
        {
            $this->name = $name;            
        }
    }
