<?php
 include('arr.php');
 include('city.php');
 include('user.php');

 $arr = new Arr;
 $arr->set(10);
 $arr->set(11);
 $arr->set(12);
 $arr->set(13);

 //echo $arr->getSum(); // виведе 0
 echo "<h4 style='color: red'>Завдання 1 </h4>";
 echo "Початковий:";
 $result=$arr->get();
 
 echo "Додаємо: <pre>";
 $mas=array(20,21,22,23,24);
 print_r($mas);
     
 $arr->add($mas); 
 echo "Отримано:";    
 $result=$arr->get();

 echo "<h4 style='color: red'>Завдання 2 </h4>";
 $result=$arr->get();
 echo "Середнє арифмітичне ".$arr->getAvg()."\n";

 echo "<h4 style='color: red'>Завдання 3-4 </h4>";
 $city= new City;
 $class_vars = get_class_vars(get_class($city));
 print_r($city->props);

 echo "<h4 style='color: red'>Завдання 5 </h4>"; 
 $user = new User('Іванов', 'Іван', 'Іванович',52);
 $props = ['prop1' => 'surname', 'prop2' => 'name', 'prop3' => 'patronymic'];
 echo $user->{$props['prop1']}." "; // виведе 'Іванов'
 echo $user->{$props['prop2']}." "; // виведе 'Іванов'
 echo $user->{$props['prop3']}; // виведе 'Іванов'

  echo "<h4 style='color: red'>Завдання 6 </h4>";
 $methods = ['method1' => 'getName', 'method2' => 'getAge'];    
 foreach ($methods as $i)
     {
         echo $user->$i();            
     }
