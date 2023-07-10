<?php
/*Q.Write a PHP script to accept font name, background color, and welcome message on 1st
page. Display the welcome message with the given font and background color on the next 
page.*/

    $bg=$_POST["t1"];
    $font=$_POST["t2"];
    $msg=$_POST["t3"];
     echo("<body bgcolor='$bg'>");
     echo("<font face='$font'>");
     echo($msg);
     echo("</font>");
     echo("</body>");
?>