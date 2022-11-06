<?php
     require_once('lib.php');

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
 