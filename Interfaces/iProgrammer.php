<?php
// інтерфейс iProgrammer
interface iProgrammer
{
    public function __construct($name, $salary);
    public function getName(); // повернути значення імені
    public function getSalary(); // повернути значення зарплати
    public function getLangs(); // повернути значення масиву мов
    public function addLang($lang); //додати знання мови
}
