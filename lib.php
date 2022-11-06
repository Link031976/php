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