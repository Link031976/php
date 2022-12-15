<?php
echo "<a href='index.php'>Повернутися до виконання д/з до уроку 18</a>";


//in interface_exists
//Нехай у вас є інтерфейс iTest1 і немає інтерфейсу iTest2.
//Перевірте, чи виведе функція interface_exists для інтерфейсу iTest1 та для інтерфейсу iTest2
echo "<h4 style='color: green'>interface_exists</h4>";

interface iTest1
{
}
//Перевірка наявності опису інтерфейсу iTest1
if (interface_exists('iTest1')) echo " interface iTest1  - exists<br>";
else  echo " interface iTest1  - not exists<br>";
//Перевірка наявності опису інтерфейсу iTest2
if (interface_exists('iTest2')) echo " interface iTest2  - exists<br>";
else  echo " interface iTest2  - not exists<br>";

echo "<h4 style='color: green'>get_declared_interfaces</h4>";
//Виведіть список усіх оголошених інтерфейсів.
echo "<pre>";
print_r(get_declared_interfaces());
