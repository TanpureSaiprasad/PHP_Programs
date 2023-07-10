<?php
/*Q.Write a PHP script to perform the following operations on string : 
i) Convert each word of a string to Lowercase and Uppercase. 
ii) Find the first and last occurrence of string2 in string1.*/ 
    $s1="cdj college,shrirampur";
     
       echo("converting each word in uppercase :  ".ucwords($s1));

    echo("<br><br>occurence string : ".strstr($s1,'shrirampur'))
    
?>