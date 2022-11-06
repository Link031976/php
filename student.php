<?php
    require_once('user.php');
    class Student extends User
        {
            public $course;

            public function getCourse()
            {
                return $this->course;
            }
            public function setCourse($course)
            {
                $this->course = $course;
            }
            public function addOneYear()
            {
                return $this->course++;
            }
        }