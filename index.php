<?php
    class Lib
        {
            public function cancatinat ($a,$b)
            {
                return $a.$r;
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
            $elem[$i] = $strarr[$i-1].$strarr[$i];
            echo "<tr><td>".$elem[$i]."</td>
                <td>(length ".strlen($elem[$i]).")</td>
                <td> concatenation of strarr[". $i-1 ."] and strarr[".$i."] </td> </tr>";
        }
    echo "</table>";

 