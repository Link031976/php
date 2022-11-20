<?php
    $bf = new DirectoryIterator($f); //создаю объект с методами для работы с файлами
    foreach ($bf as $fileinfo) //перебираю объекты (файлі и папки) текущей папки
        {                    
            $name = $fileinfo->getFilename(); // имя файла/папки                
            if ($name != ".") // исключаю возврат в корневой каталог диска
                if ($name != "..") 
                {
                    require_once($f."\\".$name);  
                    //echo $f."\\".$name."<br>";
                } 
        }