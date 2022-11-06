<?php
$k=3;     
$strarr = ["tree", "foling", "trashy", "blue", "abcdef", "uvwxyz"]; 
 
echo "Нехай надано масив сліва:";     
$n=count($strarr); 
$flag=''; 
foreach ($strarr as $word)  
    { 
        echo " ".$word; 
        $str=str_split($word);//повертаэмо строку у масив символыв 
        $key=$str[0]; //ключь = перший символ слова 
        $calc=1; // це лічильник однакових символів 
        for ($i=1; $i < count ($str); $i++)  
            {                      
                 
                if ($str[$i] == $key) 
                    { 
                        $calc++; 

                        if ($calc ==$k) $flag=$word;                             
                    } 
                    else $key=$str[$i] ; 
                //echo "key = ".$key." look= ".$str[$i]." calc= ".$calc ."<br>";     
                if ($flag != '') break;                        
            } 
    } 
echo "<br> У наданих словах послідовність ".$k." однакових символів, "; 
if ($flag =='')  
    echo "таких слів не знайдено"; 
    else echo "знайдено слово: ".$flag;