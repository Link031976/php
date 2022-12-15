<?php
abstract class User
{
    public $name;
    public function getName()
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
    // абстрактний метод increaseRevenue (збільшення доходу)
    abstract public function increaseRevenue($value);
    // абстрактний метод decreaseRevenue (зменшити зарплату)
    abstract public function decreaseRevenue($value);
}
