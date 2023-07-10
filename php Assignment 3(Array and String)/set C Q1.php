<?php
/*Write a PHP script to perform the following operations on string : 
i) Replace the string2 by string3 in string1.
ii) Reverse and display the string.*/

        $s1="VISIT ";
        $s2="  cdj college,shrirampur";    
       
        $s3=substr_replace($s2,$s1,0,1);
             echo("Replace string is :".$s3);
        $s4=strrev($s2);
             echo("<br><br>Reverse string is :".$s4);   
?>