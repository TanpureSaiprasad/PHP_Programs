<?php
//Q.Write a PHP Script to display a perfect numbers between 1 to100.
           
     echo("perfect no. between 1 to 100 :<br>");
         for($i=1;$i<100;$i++)
           {
            $s=0;
             for($j=1;$j<$i;$j++)
                {
                   if((int)$i%$j==0)
                     $s=$s+$j;
                }
             if($i==$s)
                  echo(" $i ,");
           }
?>