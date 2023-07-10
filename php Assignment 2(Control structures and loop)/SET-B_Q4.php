<?php    
//Q. Write a PHP Script to display Armstrong numbers between 1 to 500.
       
     echo("Armstrong no. in between 1 to 500:<br>");
         for($i=1;$i<500;$i++)
           {
            $n=$i;
            $s=0;
             for($j=1;$j<=$i;$j++)
                {
                   $d=$n%10;
                   $s=$s+($d*$d*$d);
                   $n=(int)$n/10;
                }
             if($i==$s)
                  echo(" $i ,");
           }
?>