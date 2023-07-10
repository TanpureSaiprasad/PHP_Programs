<html>
  <body>
    <form method="post" action="#">
       enter number 1:<input type="text" name="t1"><br>
       enter number 2:<input type="text" name="t2"><br>
       enter number 3:<input type="text" name="t3"><br>
   <input type="submit" value="maximum">
    </form>
  </body>
</html>

<?php
/*Q.Write a PHP script to define a function Maximum, which will accept 3 numbers as 
parameters and returns a maximum of 3 numbers. */

     function check($n1,$n2,$n3)
       {
          if($n1>$n2 && $n1>$n3)
              echo"first position $n1 is maximum number";
          if($n2>$n3 && $n2>$n1)
              echo"second position $n2 is maximum number";
          if($n3>$n2 && $n3>$n1)
              echo"third position $n3 is maximum number";
       }
   $n1=$_POST["t1"];
   $n2=$_POST["t2"];
   $n3=$_POST["t3"];

    check($n1,$n2,$n3);
?>