<?php
/*Write a PHP script to define a function “DisplayDay”, which will display the day of the 
current date.*/
    function DisplayDay()
    {
        $today = date("D j");  
        echo  $today;
    }
    
    DisplayDay();
?>