<?php
    require_once('user.php');
    require_once('product.php');
    require_once('employee.php');
    require_once('student.php');

    $user = new User('Антон','Володимирович','1992-02-03');
    $employee = new Employee('Юлія','Станіславівна','1987-02-03',15000);
    
    echo "<pre>";
    print_r($user);
    print_r($employee);
    
    //Task11
    $product1 =  new Product;
    $product1->name = 'Юрій';
    echo "product1:";
    print_r($product1);
    $product2 = $product1;
    $product2->name = 'Павло';
    echo "product1:";
    print_r($product1);
    echo "product2:";
    print_r($product2);
