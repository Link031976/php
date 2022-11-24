<?php
   
    //program for receiving files with class description
    // програма для приєднання файлів з описом классі 

    // ім'я папки для опрацювання
    //the name of the folder to process
    $f='Models';

    //create an object with methods for working with files
    //Створюю об'єкт з методом для роботи з файлами
    $bf = new DirectoryIterator($f); 
   
    //I go through the $f directory with files
    //перебираю ктаталог $f з файлами 
    foreach ($bf as $fileinfo) 
        {                    
            // return filename
            // повертаю ім'я файлу
            $name = $fileinfo->getFilename(); 
            // exclude links to return to the root directory of the disk
            // виключаю посилання на повернення у коріневий каталог диску  
            if ($name != ".")          
                if ($name != "..") 
                {
                    require_once($f."\\".$name);  //add a class description file to the program
                    // додаю файл з описом классу до програми

                    //for code testing для тестування коду
                    //echo $f."\\".$name."<br>";
                } 
        }