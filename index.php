<?php
    class Lib
        {
            //* Возвращает колличество символов самой длинной строки массива
            public function strLong($arr)
            {
                $long=0;                
                foreach ($arr as $element)
                    {
                        if ($long<strlen($element)) $long = strlen($element);
                    }
                return $long;
            }

            //Возвращает значение количество самых длинных строк массива
            public function calcLong($arr,$n)
            {
                $i=0;                
                foreach ($arr as $element)
                    {
                        if ($n == strlen($element)) $i++;
                    }
                return $i;
            }

            //* возвращает сами длинные строки (значения элементов)
            public function longStr ($arr, $long)
            {
                $l="";                
                foreach ($arr as $element)
                    {
                        if ($long == strlen($element)) $l=$l."\"".$element."\", ";
                    }
                $l=substr($l,0,-2); //удаляю лишние символы ", "
                return $l;
            }

            //* поиск первого самого длинного слова
            public function longFirst ($arr, $long)
            {
                $l="";                
                foreach ($arr as $element)
                    {
                        if ($long == strlen($element)) 
                            {
                                $l=$element;
                                break;
                            }
                    }                
                return $l;
            }
            //* поиск индекса первого самого длинного слова
            public function longID ($arr, $long)
            {
                $i=1;                
                foreach ($arr as $element)
                    {
                        if ($long == strlen($element)) 
                            {                                
                                break;
                            }
                        $i++;
                    }                
                return $i;
            }

        }

    $k = 2;     
    $strarr = ["tree", "foling", "trashy", "blue", "abcdef", "uvwxyz"]; 
    echo "strarr = <pre>";
    print_r ($strarr);
    echo "Concatenate the consecutive strings of strarr by ".$k.", we get: \n";    

    echo "<table>";    
    for ($i=1; $i<count($strarr); $i++)
        {
            $elem[$i] = $strarr[$i-1] . $strarr[$i];
            echo "<tr><td>".$elem[$i]."</td>
                <td>(length ".strlen($elem[$i]).")</td>
                <td> concatenation of strarr[". $i-1 ."] and strarr[".$i."] </td> </tr>";
        }
    echo "</table>";
    $longStr = (new Lib)->strLong($elem); 

    
    echo "\n \n \n".(new Lib)->calcLong($elem,$longStr).
        " strings are the longest: ".(new Lib)->longStr($elem,$longStr).". 
        The first that came is \"".(new Lib)->longFirst($elem,$longStr)."\" 
        so longest_consec(strarr, ".(new Lib)->longID($elem,$longStr).") should return \"".(new Lib)->longFirst($elem,$longStr)."\"  ";
 