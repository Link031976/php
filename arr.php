<?php
class Arr
{
    /**  Место хранения перегружаемых данных.  */
    private $numbers = array();
    private $index = 0;

    public function set($value)
    {
        $this->numbers[$this->index] = $value;
        $this->index++;
    }
    public function add ($mas)
    {
        $n=count($mas);
        for ($i=0;$i< $n;$i++)
            {
                $this->numbers[]=$mas[$i];               
                $this->index++;
            }
        $this->index--;
    }  
    public function get()
        {
            echo "<pre>";
            print_r($this->numbers);
        }    
    
    public function getAvg()
    {
        $sum=0;
        for ($i=0;$i<= $this->index;$i++)
            $sum=$sum + $this->numbers[$i];
        return array_sum($this->numbers)/$this->index;
    }
}