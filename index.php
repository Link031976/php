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

    echo "<h4 style='color: red'>Урок 11 Завдання 5 </h4>";
    require_once('Student.php');
    $stud = new Student;
    $stud -> setCourse(3);
    echo "Студент ".$stud -> getCourse()." курсу переведено на ";
    $stud -> addOneYear();
    echo $stud -> getCourse()."-й курс";
