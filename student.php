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
                $this->toNextCourse();
            }
            
            private function toNextCourse()
            {
                if (($this->course+1 >= 1) and ($this->course +1 <= 5)) 
                    return $this->course= $this->course+1;
            }


       public function __get ($name)
            {
                return $this->$name;
            }

        public function __set ($name, $value)
            {
                return $this->$name=$value;
                if ($name == 'age') $this->isAgeCorrect($value);
                return $this->$name = $value;

                if ($name == 'age') $this->isAgeCorrect($value);
                    //else 
                    return $this->$name = $value;

            }
        public function isAgeCorrect($age)
            {
                if (($age >1) and ($age<100)) return $this->age = $age;
            }

    }
