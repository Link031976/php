<?php
echo "<a href='index.php'>Повернутися до виконання д/з до уроку 19</a><br><br>";

//Нехай у вас є трейт Trait1 і немає трейту Trait2. Перевірте, чи виведе функція trait_exists для трейта Trait1 та для трейта Trait2.
trait Trait1
{
    private function method()
    {
        return 1;
    }
}
if (trait_exists('Trait1')) echo 'Trait1 - існує <br>'; else echo 'Trait1 - не існує<br>'; 
if (trait_exists('Trait2')) echo 'Trait2 - існує<br>'; else echo 'Trait2 - не існує<br>'; 

//Виведіть на екран список усіх оголошених трейтів.
echo "Взагалі, описані наступні Трейт(и):<pre>";
print_r(get_declared_traits());