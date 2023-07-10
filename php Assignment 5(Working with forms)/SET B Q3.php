<?php
/*Q.Write a PHP script to accept student name and list of programming languages (using drop 
down box) and display it on the next page in the proper format.*/

       $n=$_POST["t1"];
       $l=$_POST["s1"];
       
  echo("<h2> Student Name: $n");
  echo("<h2> select language is: $l");
?>