<?php
// Тестовий клас
class Test
{
    public $name;   // властивість name
    public $prop1;  // властивість prop1
    public $prop2;  // властивість prop2
    private $prop3; // властивість prop3
    private $prop4; // властивість prop4
    //Метод1
    public function method1()
    {
    }
    //Метод2
    public function method2()
    {
    }
    //Метод3
    public function method3()
    {
    }
    // повернення переліку методів поточного класу
    public function getMetodList()
    {
        return get_class_methods($this);
    }
    // повернення переліку властивостей поточного класу
    public function getPropertiesList()
    {
        return get_class_vars(__CLASS__);
    }
}
