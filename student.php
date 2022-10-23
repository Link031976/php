<?php

class Student
    {
        public $name; 
        public $course;

        public function __construct($name,$course) //конструктор
            {
                $this->name=$name;
                $this->course=$course;            
            }
        
        public function transferToNextCourse()
            {
                $this->toNextCourse();
            }
            
        private function toNextCourse()
            {
                if (($this->course++ >= 1) or ($this->course++ <= 5))
                    return $this->course++;
            }
            
       public function __get ($name)
            {
                return $this->$name;
            }

        public function __set ($name, $value)
            {
                return $this->$name=$value;
            }
    }