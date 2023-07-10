<html>
   <body>
         <form method="post" action="SET-A_Q2.php">
             enter 1st no. :<input type="text" name="t1"><br>
             enter 2nd no. :<input type="text" name="t2"><br>
             1-Addition<br>
             2-Substraction<br>
             3-Multiplication<br>
             4-Division<br>
             enter coice :<input type="text" name="t3"><br>
            <input type="submit" value="ok">
         </form>
   </body>
</html>

<?php
/*Q.Write a PHP Script which will perform the Addition, Subtraction, Multiplication, and 
Division of two numbers as per the choice. (Use Switch Case) */
    $n1=$_POST["t1"];
    $n2=$_POST["t2"];
        echo("1-addition<br>2-substraction<br>3-multiplication<br>4-division");
    $ch=$_POST["t3"];
            switch($ch)
             {
                   case 1: $c=$n1+$n2;
                                 echo("<br><br>addition= $c");
                                 break;
                   case 2: $c=$n1-$n2;
                                 echo("<br><br>substraction= $c");
                                 break; 
                   case 3: $c=$n1*$n2;
                                 echo("<br><br>multiplication= $c");
                                 break; 
                   case 4: $c=$n1/$n2;
                                 echo("<br><br>division= $c");
                                 break;
                   default: echo("<br><br>invalid choice");
             }
?>