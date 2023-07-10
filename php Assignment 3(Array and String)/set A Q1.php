<?php
/*Q.Write PHP program to perform the following operations on Indexed Array:
a) Union of two arrays
b) Traverse the array elements in random order*/
    $a=array(12,44,32,11,66,88);
    $b=array(12,34,11,43,88);
       $c=array_merge($a,$b);
       $ans=array_unique($c);
    echo("Union of two array :  ");  
      print_r($ans);
   
    echo("<br><br>array in random order :");
    shuffle($ans);
    print_r($ans);
?>