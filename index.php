<?php
    $f='D:\Дом'; //Полный путь к корневой папке для построения дерева каталогов
    
    class BilderDir
    {
        private $dirName=[];
        private $fileName=[];
        
        public function bildTree($f)
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
                                $this->dirName[] = $name;
                                echo "<ul >";
                                $name = $f."\\".$name;
                                    $this->bildTree($name); // рекурсивно вызывается данная функция                                
                                echo "</ul>";
                                echo"</li>";
                            }
                  
                if ( $fileinfo->getType() == 'file')
                    {                  
                        echo "<li style='color: green'>".$name; //добавляю в список файлов  
                        $this->fileName[] = $name;
                        $name=$f."\\".$name;
                        $fSize = $this->get_filesize($name);
                        echo " - ".$fSize."</li>";
                    }                           
            }
        }

        public function get_filesize($file)
        {
            if(!file_exists($file)) return "Файл  не найден";

            $filesize = filesize($file);

            if($filesize > 1024){
            $filesize = ($filesize/1024);
                if($filesize > 1024){
                $filesize = ($filesize/1024);
                    if($filesize > 1024) {
                    $filesize = ($filesize/1024);
                    $filesize = round($filesize, 1);
                    return $filesize." ГБ";       
                    } else {
                    $filesize = round($filesize, 1);
                    return $filesize." MБ";   
                    }       
                } else {
                $filesize = round($filesize, 1);
                return $filesize." Кб";   
                }  
                } else {
                $filesize = round($filesize, 1);
                return $filesize." байт";   
                }
        }
    }

   
    

    echo "<h2 align='center'>Дерево папки ".$f."</h2><br>"; 
    echo "Умовні позначення: <span style='color: blue'>назва папки</span>, <span style='color: green'> 
        назва файлу </span></span><ul>";
    $bild = new BilderDir;
    $bild->bildTree($f);
    echo "</ul>";  