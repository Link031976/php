<?php
abstract class User
{
    public $name;
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    // абстрактний метод increaseRevenue (збільшення доходу)
    abstract public function increaseRevenue($value);
}