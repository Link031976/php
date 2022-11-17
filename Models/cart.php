<?php
class Cart
{
    public $product=[];

        //Task 8
    public function add($products)
    {
        $this->product[] = $products;
    }
         //Task 9
    public function remove($name)
    {
        $i=0;
        foreach ($this->product as &$prod)
            {   
                if ($prod->name == $name) unset($this->product[$i]);
                $i++;
            }            
    }
    //Task 10
    public function getTotalCost()
    {
        $sum=0;
        foreach ($this->product as &$prod)
        {
            $sum = $sum + $prod->getCost();                
        }
        return $sum;
    }
    //Task 11
    public function getTotalQuantity()
    {
        $sum = 0;
        foreach ($this->product as &$prod)
        {
            $sum = $sum + $prod->getQuantity();                
        }
        return $sum;
    }
    //Task 12
    public function getAvgPrice()
    {           
        return $this->getTotalCost()/$this->getTotalQuantity();
    }
}