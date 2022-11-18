<?php
    class Student
    {
        private $name;
        private $scholarship; // стипендія

        public function __construct($name, $scholarship)
        {
            $this->name = $name;
            $this->scholarship = $scholarship;
        }
        public function getName()
        {
            return $this->name;
        }
        public function getScholarship()
        {
            return $this->scholarship;
        }
    }
