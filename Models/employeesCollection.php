<?php

class EmployeesCollection
{
    private $employees = [];

    public function add($newEmployee)
    {
        // Еквівалентно методу exists з ===
        if (!in_array($newEmployee, $this->employees, true))
        {
            $this->employees[] = $newEmployee;
        }
    }

    public function get()
    {
        return $this->employees;
    }
}