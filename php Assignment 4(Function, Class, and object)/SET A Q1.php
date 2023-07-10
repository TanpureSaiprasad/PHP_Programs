<html>
  <body>
     <form method="post" action="#">
         enter X:<input type="text" name="t1"><br>
         enter Y:<input type="text" name="t2"><br>
         <input type="submit" value="Submit">
     </form> 
  </body>
</html>

<?php
//Q.Write a PHP script to calculate x rais to y using a function
     function sqr($x,$y)
       {
           $ans=1;
            for($i=$y;$i>0;$i--)
                 $ans=$ans*$x;
            echo("solition of x^y is: ".$ans);
       }
    $x=$_POST["t1"];
    $y=$_POST["t2"];
    sqr($x,$y);
?>
