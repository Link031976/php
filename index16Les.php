<?php

// ім'я папки з описами класів
//the name of the class description folder
$f = 'Models';
//приєднання файлів з описами класів
//attaching files with class descriptions
require_once('autoloader.php');
    class Test
    {
        public $name;
        public  $prop1;       
        public  $prop2;      
        private  $prop3;        
        private  $prop4;

        public function method1()
        {}
        public function method2()
        {}
        public function method3()
        {}
        public function getMetodList()
        {
            return get_class_methods($this);
        }
        public function getPropertiesList()
        {
            return get_class_vars(__CLASS__);
        }
        
    }
          
    $test1 = new Test1;
    $test2 = new Test2;
   
    //Зробіть об'єкт якогось класу. Використовуйте функцію get_class 
    //до об'єкта і дізнайтеся ім'я класу, якому належить об'єкт.
    echo "<p style='color: blue'>Урок 16 get_class </p>";
    echo get_class($test1)."<br>";

    //Зробіть два класи: Test1 та Test2. Нехай обидва класи мають 
    //властивість name. Створіть кілька об'єктів цих класів і запишіть 
    //у масив $arr у довільному порядку. Переберіть цей масив циклом і 
    //для кожного об'єкта виведіть значення властивості name і ім'я класу, 
    //якому належить об'єкт.
    $arr[]=$test1;
    $arr[]=$test2;
    $i=0;
    foreach ($arr as $element)
    {
        echo $i.' елемент классу '.get_class($element)."<br>";
        $i++;
    }

    echo "<p style='color: blue'>Урок 16 get_class_methods </p>";
    //Зробіть клас Test з методами method1, method2 та method3. 
    //За допомогою функції get_class_methods отримайте масив назв методів класу Test.
    $test = new Test;
    $val = get_class_methods($test);
    print_r($val);
    echo "<br>";
    $val = $test->getMetodList();
    print_r($val);
   
    echo "<p style='color: blue'>Урок 16 get_class_vars </p>";
    //Зробіть клас Test з громадськими властивостями prop1 та prop2, а також з приватними властивостями prop3 та prop4.
    //Викличте функцію get_class_vars зовні класу Test. Виведіть масив доступних властивостей.

    //Викличте функцію get_class_vars зовні класу Test. Виведіть масив доступних властивостей.
    echo "Зовній виклик: <br>";    
    print_r(get_class_vars(get_class($test))); //get_class - поветає ім'я класу
    //Викличте функцію get_class_vars усередині класу Test (наприклад, у конструкторі). Виведіть масив доступних властивостей.
    echo "<br> виклик з середини класу: <br>";  
    print_r($test->getPropertiesList());

    echo "<p style='color: blue'>Урок 16 get_object_vars </p>";
    //Зробіть клас Test з громадськими властивостями prop1 та prop2, а також з приватними властивостями prop3 та prop4.
    // Створити об'єкт цього класу. За допомогою функції get_object_vars отримайте масив властивостей створеного об'єкта.
    print_r(get_object_vars($test));

    echo "<p style='color: blue'>Урок 16 class_exists </p>";
    //Нехай у вас є клас Test1 і немає класу Test3. Перевірте, чи виведе функція class_exists для класу Test1 та для класу Test3.
    if (class_exists('Test1')) echo "Клас Test1 об'явлений<br>"; else echo "Клас Test1 не об'явлений <br>";
    if (class_exists('Test3')) echo "Клас Test3 об'явлений<br>"; else echo "Клас Test3 не об'явлений<br>";