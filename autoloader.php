<?php
//program for receiving files with class description
// код програми для приєднання файлів з описом классів 
//Вхідні дані:
// $f - назва папки з файлами описами классів якы потрыбно приэднати
//
//    
//create an object with methods for working with files
//Створюю об'єкт "база файлів"

$bf = new DirectoryIterator($f);

//I go through the $f directory with files
//перебираю ктаталог ($f) з файлами 
foreach ($bf as $fileinfo) {
    // return filename
    // повертаю ім'я файлу
    $name = $fileinfo->getFilename();
    // exclude links to return to the root directory of the disk
    // виключаю посилання на повернення у коріневий каталог диску  
    if ($fileinfo->getFilename() != ".")
        if ($fileinfo->getFilename() != "..") {
            //add a class description file to the program
            // додаю файл з описом классу до програми
            require_once($f . "\\" . $fileinfo->getFilename());

            //for code testing для тестування коду
            //echo $f."\\".$name."<br>";
        }
        
}
