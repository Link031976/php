<?php

class User
    {
        public $surname; // прізвище
        public $name; // ім'я
        public $patronymic; // по батькові
        public $age;


        public function __construct($surname, $name, $patronymic, $age)
            {
                $this->surname = $surname;
                $this->name = $name;
                $this->patronymic = $patronymic;
                $this->age = $age;                          
            }
        public function getName()
            {
                return $this->name;
            }
        
            public function getAge()
            {
                return $this->age;
            }
    }