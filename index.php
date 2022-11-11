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
    class Employee extends User
    {
        public $salary;

        public function __construct($name , $surname , $birthday , $salary)
        {
            parent::__construct($name,$surname,$birthday);
            $this->salary = $salary;
        }
        public  function getSalary()
        {
            return $this->salary;
        }
    }

    class Product
    {
        public $name;
        public $price;
    }
    
    $user = new User('Jon','Look','1992-02-03');
    $employee = new Employee('Jon','Look','1987-02-03',15000);
    $product1 =  new Product;

    echo "<pre>";
    print_r($user);
    print_r($employee);

    print_r($product1);
    $product2 = $product1;
    $product2->name = 'Jon';
    print_r($product1);
    print_r($product2);
