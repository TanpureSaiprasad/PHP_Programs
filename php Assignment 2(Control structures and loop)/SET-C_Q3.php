<?php  
/*Q.Write a PHP script to count the total number of even and odd numbers between 1 to 1000.*/         
       $ecnt=0;
       $ocnt=0;
         for($i=1;$i<=1000;$i++)
           {
             if($i%2==0)
                   $ecnt++;
             else
                   $ocnt++;
           }
         echo("count of even numbers :$ecnt");
         echo("<br>count of odd numbers :$ocnt");
?>