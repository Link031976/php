<?php
    class Student 
    {
        // name of the student
        // ім'я студенту
        public $name; 
        // розмір стипендії
        public $scholarship ;

        public function __construct($name, $scholarship)
        {
            $this->name = $name;
            $this->scholarship  = $scholarship ;
        }
        //повертає значення імені студента
        public function getName()
        {
            return $this->name;
        }
        // повертає розмір степендії
        public function getScholarship ()
        {
            return $this->scholarship ;
        }
    }
