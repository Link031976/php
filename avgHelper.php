<?php
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