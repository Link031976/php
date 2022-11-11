<?php
class User
    {
        protected $name;
        private   $age;
        private   $surname;
        private   $birthday;

        public function __construct($name,$surname,$birthday)
        {
            $this->name = $name;
            $this->surname = $surname;
            $this->birthday = $birthday;
            $this->age = $this->calculateAge();
        }

    private function calculateAge()
        {
            return floor((strtotime(date('Y-m-d')) - strtotime(date($this->birthday))) / 86400 / 365); 
        }
        public function getName()
        {
            return $this->name;
        }
        public function getBirthday()
        {
            return $this->birthday;
        }
        public function getSurname()
        {
            return $this->surname;
        }
        public function setName($name)
        {
            if (strlen($name) > 3) $this->name = $name;
        }
        public function getAge()
        {
            return $this->age;
        }
        public function setAge($age)
        {
            if ($age >= 18)
            {
                $this->age = $age;
            }
        }
    }