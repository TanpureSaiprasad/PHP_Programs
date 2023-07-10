<html>
   <body>
        <form method="post" action="SET-C_Q1.php">
               enter no:
                        <input type="text" name="t1">
               <input type="submit" value="ok">
        </form>
   </body>
</html>

<?php
//Q.Write a PHP script to display a number in words (Use Switch case)e.g. 345–three four five
     $n=$_POST["t1"];
      while($n>=1)
        {
            $d=$n%10;
            $s=$s*10+$d;
            $n=(int)$n/10;    
        }  
        echo("number in digit :<br>");
        while($s>=1)
         {
                 $num=$s%10;
                switch($num)
                   {
                       case 0: echo(" zero ");
                                     break;
                       case 1: echo(" one ");
                                     break;
                       case 2: echo(" two ");
                                     break;
                       case 3: echo(" three ");
                                     break;
                       case 4: echo(" four ");
                                     break;
                       case 5: echo(" five ");
                                     break;
                       case 6: echo(" six ");
                                     break;
                       case 7: echo(" seven ");
                                     break;
                       case 8: echo(" eight ");
                                     break;
                       case 9: echo(" nine ");
                                     break;
                       default : echo("invalid no.");
                   }
                $s=(int)$s/10;   
         }
?>