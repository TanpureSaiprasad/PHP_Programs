<html>
    <body>
        <form method="post" action="SET-A_Q3.php">
              enter percentage :<input type="text" name="t1">
               <input type="submit" value="result"><br> 
        </form>
    </body>
</html>

<?php
/*Q.Write a PHP Script to display the grade of the student according to percentage. Use the 
following conditions: 
Percentage <40 => Grade=”Fail”
Percentage >= 40 and Percentage <=50 => Grade= “Pass Class”
Percentage >=50 and Percentage <=60 => Grade= “Higher Second Class”
Percentage >60 and Percentage <=70 => Grade= “First Class”
Percentage >70 => Grade= “First Class with Distinction”*/
         $p=$_POST["t1"];
            if($p<40)
                  echo("<br>Fail");

            elseif($p>=40&&$p<=50)
                  echo("<br>Pass Class"); 

            elseif($p>50&&$p<=60)
                  echo("<br>Higher Second Class");       

            elseif($p>60&&$p<=70)
                  echo("<br>First Class");       

            else
                  echo("<br>First  Class With Distinction");                   
      
?>