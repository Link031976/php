<?php
   
    require_once('autoloader.php');
    
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
     //Task 8
    $cart->add(new Product('{Хліб}',18,20));
    $cart->add(new Product('Масло',75,20));
    $cart->add(new Product('Батон дорожній',33,20));
    $cart->add(new Product('Здоба',300,20));
    print_r($cart);
         //Task 9
    $cart->remove('Масло');
    print_r($cart);
    //Task 10
    echo "Загальна вартість Продуктів ".$cart->getTotalCost()."<br>";
    //Task 11
    echo "Всього ".$cart->getTotalQuantity()." продуктів <br>";
       //Task 12
    echo "Середня вартість продукту ".$cart->getAvgPrice();    
