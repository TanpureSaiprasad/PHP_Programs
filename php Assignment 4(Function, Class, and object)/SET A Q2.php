
<?php
/*Q.Write a PHP script to define a function EvenOdd, which will display even and odd numbers 
between 1 to 50. */
     function evenodd()
       {
          echo"even no.: ";
            for($i=1;$i<50;$i++)
              {
                  if($i%2==0)
                       echo("  $i,  ");
              }
          echo"<br>odd no.: ";
            for($i=1;$i<50;$i++)
              {
                  if($i%2==1)
                       echo("  $i,  ");
              }
       }
   
    evenodd();
?>