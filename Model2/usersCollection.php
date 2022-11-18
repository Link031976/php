<?php
    class UsersCollection
    {
        private $employees = []; // масив працівників
        private $students = []; // масив студентів

        public function add($user)
        {
            if ($user instanceof Student) $this->students[] = $user;
            if ($user instanceof Employee) $this->employees[] = $user;
        }

        public function sumScholarship()
        {
            $sum = 0;          
            foreach ($this->students as $element)
                $sum = $sum + $element->getScholarship();                          
            return $sum;
        }

        public function sumSalary()
        {
            $sum = 0;           
            foreach ($this->employees as $element)
                $sum = $sum + $element->getSalary();
        return $sum;
        }

    }
