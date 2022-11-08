<?php
    $f='C:\EFI\Microsoft\Boot'; 

    function bildTree($f)
    {
        $bf = new DirectoryIterator($f); //создаю объект методов для работы с файлами
        foreach ($bf as $fileinfo) //перебираю объекты текущей папки
        {                    
            $name = $fileinfo->getFilename(); // имя файла/папки
            if ( $fileinfo->getType() == 'dir') // добавляю в список папок                   
                if ($name != ".")
                    if ($name != "..") 
                        {
                            echo "<li style='color: blue'>".$name;
                            echo "<ul >";
                            $name=$f."\\".$name;    
                            
                                bildTree($name);                                
                            echo "</ul>";
                            echo"</li>";
                        }
              
            if ( $fileinfo->getType() == 'file') echo "<li style='color: green'>".$name."</li>"; //добавляю в список файлов                              
        }
    }
    echo "Дерево папки ".$f."<br>";
    echo "Умовні позначення: <span style='color: blue'>назва папки</span>, <span style='color: green'> 
        назва файлу </span></span><ul>";
    bildTree($f);
    echo "</ul>";
    
    


  