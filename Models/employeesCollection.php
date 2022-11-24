<?php

class EmployeesCollection
{
    // an array of employees of the Employee class
    // масив працівників класу Employee
    private $employees = [];

    // adding a new employee of the Employee class to the employee array
    // додавання до масиву працівників нового працівника классу Employee
    public function add($newEmployee)
    {
        // worker duplication fuse
        // запобіжник дублювання робітників
        if (!in_array($newEmployee, $this->employees, true))
        {
            $this->employees[] = $newEmployee;
        }
    }
    // return an array of employees
    // повертаю масив працівників
    public function get()
    {
        return $this->employees;
    }
}