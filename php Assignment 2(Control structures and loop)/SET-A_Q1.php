<html>
    <body>
        <form method="post" action="SET-A_Q1.php">
              enter year :<input type="text" name="t1">
               <input type="submit" value="result"><br> 
        </form>
    </body>
</html>

<?php
//Q.Write a PHP Script to check whether a year is a leap or not.
         $y=$_POST["t1"];
            if($y%4==0)
                  echo("<br>$y is leap year");
            else
                  echo("<br> $y is not leap year");       
?>