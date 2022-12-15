<?php
//$f='';
//require_once('autoloader.php');
echo "<a href='index_in_lesson17.php'>Перейти до завдання з уроку 17</a>";
interface Figure
{
    public function getSquare();
    public function getPerimeter();
}
class Quadrate implements Figure
{
    private $a;
    public function __construct($a)
    {
        $this->a = $a;
    }
    public function getSquare()
    {
        return $this->a * $this->a;
    }
    public function getPerimeter()
    {
        return 4 * $this->a;
    }
}

class Rectangle implements Figure
{
private $a;
private $b;
public function __construct($a, $b)
{
$this->a = $a;
$this->b = $b;
}
public function getSquare()
{
return $this->a * $this->b;
}
public function getPerimeter()
{
return 2 * ($this->a + $this->b);
}
}




class MyClass
{
}

class NotMyClass
{
}
$a = new MyClass;

var_dump($a instanceof MyClass);
var_dump($a instanceof NotMyClass);