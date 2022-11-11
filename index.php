<?php
    require_once('user.php');
    require_once('product.php');
    require_once('user.php');

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
