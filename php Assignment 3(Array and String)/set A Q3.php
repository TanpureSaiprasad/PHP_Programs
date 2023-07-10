<?php
/*Write a PHP Script for the following:
a) Declare and Display a multidimensional Array.
b) Search and display a specific element from a Multidimensional array.*/
    $a=array(array(10,20,30,40),
                   array("DS","PHP","SE"),
                   array("sai","rahul","ganesh"));     
     print_r($a);   
    
     if(in_array("PHP",$a[1]))
           echo("<br>element PHP found in array....");
     else
           echo("<br>element  not found in array....");
?>
