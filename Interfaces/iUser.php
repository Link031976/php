<?php
//опис інтерфейсу iUser
interface iUser
{
    public function setName($name); // встановити ім'я
    public function getName(); // отримати ім'я
    public function setAge($age); // встановити вік
    public function getAge(); // отримати вік
}