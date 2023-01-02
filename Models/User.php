<?php
class User
{
    public $name;       // iм'я /name
    public $surname;    // прiзвище /surname
    public $patronymic; // по-батьковi /patronymic

    // повертає повне ПIБ
    // turn around surname name patronymic
    public function __get($fio)
    {
        return $this->surname . ' ' . $this->name . ' ' . $this->patronymic; // встановлюємо значення }
    }
    // встановлює значення для властивостi name значення vol
    // sets the name property to vol
    public function __set($name, $vol)
    {
        $this->$name = $vol;
    }
}
