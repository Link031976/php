<?php
    require_once('autoloader.php');
    require_once('line.php');
    
    function compare($obj1, $obj2)
    {
        return var_dump($obj1 instanceof $obj2);
    }

    function compare3($obj1, $obj2)
    {   
        if ($obj1 === $obj2)  return 1; 
            if ($obj1 == $obj2) return 0;
                else return -1;  
        
    }
    
    echo "<pre>";
    $obect1 = new Line1;    
    $obect3 = new Line1;      
    
    $obect2 = new Line2;
    print_r($obect1);
    print_r($obect2);
    print_r($obect3);

    //Line 1
    echo "<p style='color: red'>Урок 14 Завдання 1 </p>";
    //мають однакові властивості та значення є екземплярами одного і того ж класу
    echo compare($obect1,$obect3);
    //мають однакові властивості та значення є екземплярами НЕ одного і того ж класу
    echo compare($obect1,$obect2);

    echo "<p style='color: red'>Урок 14 Завдання 2 </p>";    
    $obect4 = $obect1;
    echo compare($obect1,$obect4);//змінні посилаються на той самий об'єкт    
    echo compare($obect1,$obect2);//змінні НЕ посилаються на той самий об'єкт

    echo "<p style='color: red'>Урок 14 Завдання 3 </p>";
    echo compare3($obect1,$obect4)." "; //  1
    echo compare3($obect1,$obect3)." "; //  0
    echo compare3($obect1,$obect2)." "; // -1

    echo "<p style='color: red'>Урок 14 Завдання 4 </p>";
    $employeesCollection = new EmployeesCollection;
    $employee1 = new Employee ( 'john', 100);    
    $employeesCollection->add($employee1);
    $employee2 = new Employee ( 'joh', 100);       
    $employeesCollection->add($employee2); // не додасть, тк той самий об'єкт    
    print_r($employeesCollection);

    echo "<p style='color: red'>Урок 14 Завдання 8 </p>";
    $arr[] = new Employee('Oliver',2000);
    $arr[] = new Employee('Harry',2000);
    $arr[] = new Employee('Jack',2000);

    $arr[] = new Student('Jacob',1000);
    $arr[] = new Student('Charley',1000);
    $arr[] = new Student('Thomas',1000);

    //print_r($arr);
    echo "<p style='color: red'>Урок 14 Завдання 9 </p>";

    echo "Список імен: <ul>";
    foreach ($arr as $element)
        echo "<li>".$element->name."</li>";    
    echo "</ul>";

    echo "<p style='color: red'>Урок 14 Завдання 10 </p>";
    echo "Список студентів: <ul>";
    foreach ($arr as $element)
    {        
        if ($element instanceof Student)
            echo "<li>".$element->name."</li>";
    }
    echo "</ul>";
    
    echo "<p style='color: red'>Урок 14 Завдання 11 </p>";
    $sumStudent = 0;
    $sumEmployee = 0;
    foreach ($arr as $element)
    {        
        if ($element instanceof Student)  $sumStudent+=$element->scholarship;
        if ($element instanceof Employee) $sumEmployee+=$element->salary;            
    }
    echo "сума зарплата працівників : ".$sumEmployee."<br>";
    echo "сума стипендій студентів: ".$sumStudent."<br>";