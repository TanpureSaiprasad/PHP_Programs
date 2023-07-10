<html>
    <body>
        <form method="post" action="SET-B_Q3.php">
              enter no :<input type="text" name="t1"><br>
               <input type="submit" value="result"><br> 
        </form>
    </body>
</html>

<?php
//Q.Write a PHP Script to display the reverse of a number. E.g. 607 =>706
         $n=$_POST["t1"];
         $s=0;
           while((int)$n>0)
              {
                 $d=$n%10;
                 $s=$s*10+$d;
                 $n=(int)$n/10;
              } 
          echo("reverse No. :$s");    
?>