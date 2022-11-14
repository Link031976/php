<?php
class User
    {
        protected readonly string $name;
        private   $age;
        private readonly string  $surname;
        private   $birthday;

        public function __construct($name,$surname,$birthday)
        {
            $this->name = $name;
            $this->surname = $surname;
            //Task 5. вношу дату народження
            $this->birthday = date($birthday);
            //Task 7  за допомогою calculateAge підраховую вік від дати народження
            $this->age = $this->calculateAge();
        }
        //Task 6
    private function calculateAge()
        {
            // strtotime — Преобразует текстовое представление даты на английском языке в метку времени Unix
            
            //підраховую вік. Від поточної дати віднімаю дату народженя,
            // З перераховую на  роки та беру цілу частину
            return floor((strtotime(date('Y-m-d')) - strtotime($this->birthday)) / 86400 / 365);
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
             //Task 1. повертаю розм iмен (кiлькiсть лiтер). 
            //Якщо довжина імені перевищує 3 символи, то змiнюю поточне значення
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