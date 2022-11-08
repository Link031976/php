<?php
    $f='D:\Дом'; //Полный путь к корневой папке для построения дерева каталогов
    

    function bildTree($f)
    {
        $bf = new DirectoryIterator($f); //создаю объект с методами для работы с файлами
        foreach ($bf as $fileinfo) //перебираю объекты (файлі и папки) текущей папки
        {                    
            $name = $fileinfo->getFilename(); // имя файла/папки
            if ( $fileinfo->getType() == 'dir') // добавляю в список папок                   
                if ($name != ".") // исключаю возврат в корневой каталог диска
                    if ($name != "..") // исключаю возврат из текущей папки
                        {
                            echo "<li style='color: blue'>".$name;
                            echo "<ul >";
                            $name=$f."\\".$name;
                                bildTree($name); // рекурсивно вызывается данная функция                                
                            echo "</ul>";
                            echo"</li>";
                        }
              
            if ( $fileinfo->getType() == 'file') echo "<li style='color: green'>".$name."</li>"; //добавляю в список файлов                              
        }
    }

    echo "<h2 align='center'>Дерево папки ".$f."</h2><br>"; 
    echo "Умовні позначення: <span style='color: blue'>назва папки</span>, <span style='color: green'> 
        назва файлу </span></span><ul>";
    bildTree($f);
    echo "</ul>";
    
    


  