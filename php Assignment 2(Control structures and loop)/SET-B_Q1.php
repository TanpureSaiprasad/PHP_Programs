<?php
//Q.Write a PHP Script to display prime numbers between 1 to 50           
     echo("prime no. between 1 to 50:<br>");
         for($i=2;$i<50;$i++)
           {
             for($j=2;$j<$i;$j++)
                {
                   if((int)$i%$j==0)
                     break;
                }
             if($i==$j)
                  echo("  $i , ");
           }
?>