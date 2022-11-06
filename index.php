<?php
    echo "<h4 style='color: red'>Урок 11 Завдання 3 </h4>";
    require_once('programmer.php');  

    $prg = new Programmer;
    $prg->setLang('PHP');
    $prg->setLang('Pascal');
    echo "<pre>";
    print_r($prg->getLangs());

    echo "<h4 style='color: red'>Урок 11 Завдання 4 </h4>";   
    require_once('drive.php');
    $water = new Driver;
    $water -> __set('name','Djon');
    $water -> __set('age',25);
    $water -> __set('seniorityWater',2);
    $water -> __set('categoryWate','A');
    
    echo "Водій ".$water -> __get ('name'). ", ".$water -> __get ('age').
        " років, водійської категорії \"" .$water -> __get ('categoryWate').
        "\" має водійський стаж ".$water -> __get ('seniorityWater')." роки"    ;
