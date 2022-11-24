<?php
    class UsersCollection
    {
        private $employees = []; // масив працівників
        private $students = []; // масив студентів

        // додаю до відповідного масиву користувача
        public function add($user)
        {
            //перевіряю $user - класу Student чи Employee та додаю до 
            // відповідного масиву значення user
            if ($user instanceof Student) $this->students[] = $user;
            if ($user instanceof Employee) $this->employees[] = $user;
        }
        // Підраховую загальну сумму виплачуваної степендії студентам
        public function sumScholarship()
        {
            $sum = 0;          
            foreach ($this->students as $element)
                $sum = $sum + $element->getScholarship();                          
            return $sum;
        }
        // підраховую загальну сумму виплаченьї зарплати працівникам
        public function sumSalary()
        {
            $sum = 0;           
            foreach ($this->employees as $element)
                $sum = $sum + $element->getSalary();
        return $sum;
        }

    }
