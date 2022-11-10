<?php
    $f='D:\Дом'; //Полный путь к корневой папке для построения дерева каталогов
    $f2='D:\Дом';//Имя каталога для подсчета чаще всего используемых файлов и папок
    class BilderDir
    {
        public $dirName=[];
        public $fileName=[];

        public function bildTree($f)
        {
            $bf = new DirectoryIterator($f); //создаю объект с методами для работы с файлами
            foreach ($bf as $fileinfo) //перебираю объекты (файлі и папки) текущей папки
            {                    
                $name = $fileinfo->getFilename(); // имя файла/папки
                $name8 = mb_convert_encoding($name, "utf-8", "windows-1251");                
                if ( $fileinfo->getType() == 'dir') // добавляю в список папок                   
                    if ($name != ".") // исключаю возврат в корневой каталог диска
                        if ($name != "..") // исключаю возврат из текущей папки
                            {
                                echo "<li style='color: blue'>".$name;//Если не верная кодировка, то $name8                                
                                echo "<ul >";
                                $name = $f."\\".$name;
                                    $this->bildTree($name); // рекурсивно вызывается данная функция                                
                                echo "</ul>";
                                echo"</li>";
                            }
                  
                if ( $fileinfo->getType() == 'file')
                    {                  
                        echo "<li style='color: green'>".$name; //Если не верная кодировка, то $name8                        
                        $name=$f."\\".$name;
                        $fSize = $this->get_filesize($name);
                        echo " - ".$fSize."</li>";
                    }                           
            }
        }

        public function get_filesize($file)
        {
            if(!file_exists($file)) return "Файл не знайдено";
            $filesize = filesize($file);
            if($filesize > 1024)
            {
                $filesize = ($filesize/1024);
                if($filesize > 1024)
                {
                    $filesize = ($filesize/1024);
                    if($filesize > 1024) 
                    {
                        $filesize = ($filesize/1024);
                        $filesize = round($filesize, 1);
                        return $filesize." ГБ";       
                    } 
                    else
                    {
                        $filesize = round($filesize, 1);
                        return $filesize." MБ";   
                    }       
                }
                else 
                {
                    $filesize = round($filesize, 1);
                    return $filesize." Кб";   
                }  
            }
            else 
            {
                $filesize = round($filesize, 1);
                return $filesize." байт";   
            }
        }    
        
        public function bildArr($f)
        {
            $bf = new DirectoryIterator($f); //создаю объект с методами для работы с файлами
            foreach ($bf as $fileinfo) //перебираю объекты (файлі и папки) текущей папки
            {                    
                $name = $fileinfo->getFilename(); // имя файла/папки                 
                if ( $fileinfo->getType() == 'dir') // добавляю в список папок                   
                    if ($name != ".") // исключаю возврат в корневой каталог диска
                        if ($name != "..") // исключаю возврат из текущей папки
                            {                                
                                $this->dirName[] = $name;                                
                                $name = $f."\\".$name;
                                $this->bildArr($name); // рекурсивно вызывается данная функция  
                            }                  
                if ( $fileinfo->getType() == 'file')
                    {                 
                        $this->fileName[] = $name;                        
                    }                           
            }
            
        }    
        public function macInArr($arr)
        {
            $mas = array_count_values($arr); // формируем ассіціативний массив з назви імен 
            //об'єктів (файлів чи папок) та кількості повторень
            $max = max($mas); //визначємо максимальне значення (максимальну кількість повторень)
            // print_r($mas); // вивести на екран ассіціативний массив
            echo $max." рази зустрічається: "; 
            //імен файлів та папок може зустрічатися декілько. Тому потрібно вивести на екран усі
            while ($fruit_name = current($mas)) 
            {
                if ($fruit_name == $max)
                {
                    echo key($mas), ", ";
                }
                next($mas);
            }            
        }         
    }

    echo "<h2 align='center'>Дерево папки ".$f."</h2><br>"; 
    echo "Умовні позначення: <span style='color: blue'>назва папки</span>, <span style='color: green'> 
        назва файлу </span></span><ul>";
    $bild = new BilderDir;  
    $bild->bildTree($f); 
    echo "</ul>";

    //2 часть задания
    $bild->bildArr($f2);   
      echo " назва файлів ";    
    $bild->macInArr($bild->fileName);

    echo "<br> назва папок ";    
    $bild->macInArr($bild->dirName);
   // echo $max;