<?php
//4.	Нехай у нас дано такий інтерфейс:

//5.	Зробіть інтерфейс iUser із методами getName, setName, getAge, setAge.
interface iUser
{
    public function setName($name); // встановити ім'я
    public function getName(); // отримати ім'я
    public function setAge($age); // встановити вік
    public function getAge(); // отримати вік
}