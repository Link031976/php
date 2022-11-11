<?php
    $f='D:\Дом'; //Полный путь к корневой папке для построения дерева каталогов
    $f2='D:\Дом';//Имя каталога для подсчета чаще всего используемых файлов и папок
    
    require_once('bilderdir.php');  

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