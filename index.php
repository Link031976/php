<?php
    require_once('arr.php');
    require_once('sumHelper.php');
    require_once('avgHelper.php');

    class Product
    {
        private readonly string $name;
        private readonly int $price;
        private readonly int $quantity;

        public function __construct($name,$price,$quantity)
        {
            $this->name = $name;
            $this->price = $price;
            $this->quantity = $quantity;
        }
        //Task 6
        public function getCost()
        {
            return $this->price * $this->quantity;
        }
    }

    class Cart
    {
        public $product;

        public function add($products)
        {
            $this->product = $products;
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
    echo "сума середнього арифметичного та середнього квадратичного масиву ".$arr->getAvgMeanSum()."<br>";
        //Task 5
    $product = new Product('шкарпетки',5,10);
    //Task 6
    echo "Вартість продукту ".$product->getCost()."<br>";
    //Task 7
    $cart = new Cart;
    $cart->add()
