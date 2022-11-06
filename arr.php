<?php
    class Arr
    {
        private $numbers = []; // масив чисел
        
        // Додаємо ще одне число до нашого масиву:
        public function add($number)
        {
            $this->numbers[] = $number;
        }
        // Знаходимо суму чисел:
        public function getSum()
        {
            return array_sum($this->numbers);
        }        
    }
    
    