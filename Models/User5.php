<?php
class User5
{
    private $name;
    private $age;

    public function __get($name)
    {
        return $this->$name;
    }
    
    public function __set($name, $vol)
    {
        switch ($name) {
            case 'name':
                if ($vol != '') {
                    // перевіряємо ім'я на непустоту
                    $this->name = $vol;
                }
                break;
            case 'age':
                if ($vol >= 0 and $vol <= 70) {
                    // перевіряємо вік
                    $this->age = $vol;
                    break;
                }
        }
    }
}
