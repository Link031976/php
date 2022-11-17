<?php
    require_once('arr.php');
    require_once('sumHelper.php');
    require_once('avgHelper.php');

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
