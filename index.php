<?php
//require_once('employee.php');

class Arr
    {
        private $nums = [];
        private $sumHelper;

        public function __construct()
        {
            $this->sumHelper = new SumHelper;
        }
        // Знаходимо суму квадратів і кубів елементів масиву:
        public function getSum23()
        {
        // Для стислості запишемо $this->nums в змінну:
            $nums = $this->nums;
        // Знайдемо описану суму:
            return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
        }
        public function add($number)
        {
            $this->nums[] = $number;
        }
         //Task 4
        public function getAvgMeanSum()
        {
            return ($this->sumHelper->getSum($this->nums,1)
            +$this->sumHelper->getSum2($this->nums))/count($this->nums);
        }
    }
    
    class SumHelper
    {
        // Сума квадратів:
        public function getSum2($arr)
        {
            return $this->getSum($arr, 2);
        }
        // Сума кубів:
        public function getSum3($arr)
        {
            return $this->getSum($arr, 3);
        }
        // Допоміжна функція для знаходження суми:
        public function getSum($arr, $power)
        {
            $sum = 0;
            foreach ($arr as $elem)
            {
                $sum =$sum + pow($elem, $power) ;
            }
            return $sum;
        }
    }

    class AvgHelper 
    {
        public $sumHelper;
        public function __construct()
        {
            $this->sumHelper = new SumHelper;
        }
        //Task 2
        public function getAvg($mas)
        {            
            return $this->sumHelper->getSum($mas,1)/count($mas);
        }
        //Task 3
        public function getMeanSquare($mas)
        {
            return $this->sumHelper->getSum2($mas)/count($mas);
        }
    }

    $mas = [1,2,3,4,5];
    $avgHelper = new AvgHelper;
    echo "Для масиву <pre>";
    print_r($mas);
      //Task 2
    echo "среднє арифметичне массиву дорівнює ".$avgHelper->getAvg($mas)."<br>";
      //Task 3
    echo "середнє квадратичне масиву дорівнює ".$avgHelper->getMeanSquare($mas)."<br>";
      //Task 4
    $arr = new Arr;
    $arr->add(10);
    $arr->add(11);
    $arr->add(12);
    echo "Для масиву Arr <pre>";
    print_r($arr);
    echo "сума середнього арифметичного та середнього квадратичного масиву ".$arr->getAvgMeanSum();
