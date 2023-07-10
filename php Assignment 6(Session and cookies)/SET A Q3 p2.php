<?php
/*Write a PHP script to accept font style, font size, font color, background color using a cookie. 
Display selected values on the next second page and actual implementation on the third web 
page.*/
    $fstyle=$_POST["t1"];
    $fsize=$_POST["t2"];
    $fcolor=$_POST["t3"];
    $bcolor=$_POST["t4"];

      setcookie("fstyle",$_POST["t1"]);
      setcookie("fsize",$_POST["t2"]);
      setcookie("fcolor",$_POST["t3"]);
      setcookie("bcolor",$_POST["t4"]);

    echo("<br>Font Style:".$fstyle);
    echo("<br>Font Size:".$fsize);
    echo("<br>Font color:".$fcolor);
    echo("<br>Background Color:".$bcolor);
?>
<html>
       <body>
         <form method="post" action="SET A Q3 p3.php">
             <input type="submit" value="next">
         </form>
       </body>
</html>
