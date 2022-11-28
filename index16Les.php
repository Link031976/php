<?php
//Реалізація завданнь, що міспиться у середині уроку 16

// ім'я папки з описами класів
//the name of the class description folder
$f = 'Models16';
//приєднання файлів з описами класів
//attaching files with class descriptions
require_once('autoloader.php');

$test1 = new Test1;
$test2 = new Test2;

//Зробіть об'єкт якогось класу. Використовуйте функцію get_class 
//до об'єкта і дізнайтеся ім'я класу, якому належить об'єкт.
echo "<p style='color: blue'>Урок 16 get_class </p>";
echo get_class($test1) . "<br>";

//Зробіть два класи: Test1 та Test2. Нехай обидва класи мають 
//властивість name. Створіть кілька об'єктів цих класів і запишіть 
//у масив $arr у довільному порядку. Переберіть цей масив циклом і 
//для кожного об'єкта виведіть значення властивості name і ім'я класу, 
//якому належить об'єкт.
$arr[] = $test1;
$arr[] = $test2;
$i = 0;
foreach ($arr as $element) {
    echo $i . ' елемент классу ' . get_class($element) . "<br>";
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
if (class_exists('Test1')) echo "Клас Test1 об'явлений<br>";
else echo "Клас Test1 не об'явлений <br>";
if (class_exists('Test3')) echo "Клас Test3 об'явлений<br>";
else echo "Клас Test3 не об'явлений<br>";

//Нехай GET параметр в адресний рядок передається назву класу. 
//Перевірте, чи є такий клас. Виведіть відповідне повідомлення на екран.
$nameClass = $_GET['in_class_exists']; //із глобального масиву GET повертає значення імені класу
if (class_exists($nameClass)) echo "Клас " . $nameClass . " об'явлений<br>";
else echo "Клас " . $nameClass . " не об'явлений<br>";

echo "<p style='color: blue'>Урок 16 method_exists </p>";
//Зробіть клас Test із методом method1 і без методу method4. 
//Перевірте, чи виведе функцію method_exists для методу method1 та методу method4.
if (method_exists($test, 'method1')) echo "Метод method1 існує<br>";
else echo "Метод method1 не існує<br>";
if (method_exists($test, 'method4')) echo "Метод method4 існує<br>";
else echo "Метод method4 не існує<br>";

//Нехай GET параметрами в адресний рядок передаються назва класу та його метод. Перевірте, чи є такий клас.
// Якщо існує – перевірте існування переданого методу. Якщо й метод існує - створіть об'єкт даного класу,
// викличте вказаний метод та виведіть результат його роботи на екран.
$nameMethod = $_GET['in_metod_exists']; //із глобального масиву GET повертає значення імені методу
if (class_exists($nameClass))
    if (method_exists($nameClass, $nameMethod)) {
        $newClass = new $nameClass;
        echo $newClass->$nameMethod();
    }

echo "<p style='color: blue'>Урок 16 property_exists </p>";
//Зробіть клас Test із властивістю prop1 і без властивості prop5. Перевірте, 
//чи виведе функція property_exists для властивості prop1 та для властивості prop5.
if (property_exists($test, 'prop1')) echo "Атрибут prop1 існує<br>";
else echo "Атребут prop1 не існує<br>";
if (property_exists($test, 'prop5')) echo "Атрибут prop5 існує<br>";
else echo "Атребут prop5 не існує<br>";
//Даний масив із властивостями класу. Даний також клас, що має частину цих властивостей. Переберіть цей масив циклом,
// для кожної властивості перевірте, чи існує вона у класі і, якщо існує, виведіть на екран значення цієї властивості.
foreach ($arr as $element) {
    if (property_exists($element, 'name')) echo get_class($element) . " має атребут name <br>";
    else echo get_class($element) . " не має атребут name <br>";
}
echo "<p style='color: blue'>Урок 16 get_parent_class </p>";
//Зробіть клас ChildClass успадкований від ParentClass. 
//За допомогою функції get_parent_class виведіть на екран батька класу ParentClass.    



$obj = new ChildClass;
echo "батьківським класом для " . get_class($obj) . " є " . get_parent_class(get_class($obj));

echo "<p style='color: blue'>Урок 16 is_subclass_of </p>";
//Зробіть клас ChildClass успадковуючий від ParentClass, який у свою чергу успадковує від GrandParentClass
//За допомогою функції is_subclass_of перевірте, чи є клас ChildClass нащадком GrandParentClass.
if (is_subclass_of($obj, 'GrandParentClass')) echo "Так objChildClass є нащадком класу GrandParentClass<br>";
else echo " objChildClass не має нащадком клас GrandParentClass<br>";
//За допомогою функції is_subclass_of перевірте, чи клас ParentClass є нащадком GrandParentClass
if (is_subclass_of($obj, 'ParentClass')) echo "Так objChildClass є нащадком класу ParentClass<br>";
else echo " objChildClass не має нащадком клас ParentClass<br>";
//За допомогою функції is_subclass_of перевірте, чи клас ChildClass є нащадком ParentClass.
if (is_subclass_of($obj, 'ChildClass')) echo "Так objChildClass є нащадком класу ChildClass<br>";
else echo " objChildClass не має нащадком клас ChildClass<br>";

echo "<p style='color: blue'>Урок 16 is_a </p>";
//Зробіть клас ChildClass успадкований від ParentClass. Створіть об'єкт класу ChildClass, запишіть його у змінну $obj.
//За допомогою функції is_a перевірте, чи об'єкт $obj належить класу ChildClass.
if (is_a($obj, 'ChildClass')) echo "да, \$obj належить до класу ChildClass<br>";
//За допомогою функції is_a перевірте, чи об'єкт $obj належить класу ParentClass.
if (is_a($obj, 'ParentClass')) echo "да, \$obj належить до класу ParentClass<br>";

echo "<p style='color: blue'>Урок 16 get_declared_classes </p>";
//Виведіть список усіх оголошених класів.
echo "<pre>";
print_r(get_declared_classes());
echo "<a href='index.php'>Повернутися до домашнього завдання</a>";
