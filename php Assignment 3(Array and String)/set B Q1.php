<?php
/*Write a PHP script to perform the following operations on string : 
i) Compare string 2 with string3.
ii) Convert all the strings to Upper case
iii) Convert all the strings to Lowercase*/
    $s1="VISIT";
    $s2="cdj college,shrirampur";
    $s3=strcmp($s1,$s2);
     if($s3>0)    
       echo("$s1 string is Grater");
     else
       echo("$s2 string is Grater");
    echo("<br><br>string in upper case :".strtoupper($s2));
    echo("<br><br>string in lower case :".strtolower($s1));    
?>