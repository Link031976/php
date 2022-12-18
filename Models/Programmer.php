<?php
//16.	Скопіюйте код мого класу Employee та код інтерфейсу iProgrammer.
// Не копіюйте мою заготівлю класу Programmer - не підглядаючи в мій код, реалізуйте цей клас самостійно.
class Programmer extends Employee implements iProgrammer
{
    //інтерфейс iProgrammer має методи:  __construct($name, $salary), getName(), getSalary(), getLangs() та
    //addLang($lang)

    //клас Employee має властивості:$name, $age, $salary та властивості:
    //__construct(string $name, int $age) - не відповідає вимогам інтерфейсу
    //setName($name)
    //getName() - відповідає вимогам інтерфейсу
    //setAge($age)
    //getAge()
    //setSalary(int $salary)
    //getSalary() - відповідає вимогам інтерфейсу
    //
    // додаємо властівості для реалізації інтерфейсу
    public $lang = []; // масив мов, якими володіє програміст    

    // описую реалізацію методів інтерфайсу
    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    //повертає масив мов програміста
    public function getLangs()
    {
        return $this->lang;
    }
    // додаю новий язик, яким володіє програміст
    public function addLang($lang)
    {
        $this->lang = $lang;
    }
}
