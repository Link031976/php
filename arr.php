<?php
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