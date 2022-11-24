<?php
    class Student
    {
        private $name;// ім'я студента
        private $scholarship; // розмір стипендії 

        public function __construct($name, $scholarship)
        {
            $this->name = $name;
            $this->scholarship = $scholarship;
        }
        // повертає ім'я студента
        public function getName()
        {
            return $this->name;
        }
        
        //поветає розмір степендії студента
        public function getScholarship()
        {
            return $this->scholarship;
        }
    }
