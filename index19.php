<?php
    //line 19
   // ім'я папки для опрацювання
    //the name of the folder to process
    $f='Model2';
    echo "<p style='color: red'>Урок 14 Завдання 19 </p>";
    require_once('autoloader.php');
    

    
    $arr[] = new Employee('Student 1',10000);
    $arr[] = new Employee('Student 2',11000);
    $arr[] = new Employee('Student 3',12000);

    $arr[] = new Student('Employee 1',1000);
    $arr[] = new Student('Employee 2',2000);
    $arr[] = new Student('Employee 3',3000);

    echo "<pre>";
    //print_r($arr);
    $usersCollection = new UsersCollection;
    foreach ($arr as $element)
    { 
        $usersCollection->add($element);        
    }
    print_r($usersCollection);

    echo "сума зарплата працівників : ".$usersCollection->sumSalary()."<br>";
    echo "сума стипендій студентів: ".$usersCollection->sumScholarship()."<br><br>";

    echo "<a href='index.php'>На початок</a>";