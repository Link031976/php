<?php


require_once('iUser3.php');
//6.	Зробіть інтерфейс iEmployee, що успадковує від інтерфейсу iUser і додає методи getSalary і setSalary.
interface iEmployee extends iUser3
{
    public function setSalary(int $salary); //внести значення зарплати
    public function getSalary(); // повернути значення зарплати
}
