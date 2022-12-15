<?php
abstract class User
{
    public string $name;
    public function getName():string
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }
    // абстрактний метод increaseRevenue (збільшення доходу)
    abstract public function increaseRevenue(int $value);
    // абстрактний метод decreaseRevenue (зменшити зарплату)
    abstract public function decreaseRevenue(int $value);
}
