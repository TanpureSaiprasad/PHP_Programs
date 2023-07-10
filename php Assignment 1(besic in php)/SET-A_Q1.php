<html>
  <body>
       <form method="post" action="SET-A_Q1.php">
          enter numerator:
                       <input type="text" name="t1"><br>
          enter dinominator:
                       <input type="text" name="t2"><br>
         <input type="submit" value="ok">
  </body>
</html>

<?php
//Q1. Write a PHP Script to display Quotient and Remainder of the division of two variables.
     $n1=$_POST["t1"];
     $n2=$_POST["t2"];
          $q=(int)$n1/$n2;
          $r=(int)$n1%$n2;
     echo("<br>Quotient=".$q);
     echo("<br>Reminder=".$r);
?>