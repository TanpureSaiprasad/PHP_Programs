
<html>
   <body>
       <form method="post" action="SET-B_Q2.php">
             <font size="5">FOR CIRCLE</font><br><br>
                  Enter Radius:<input type="text" name="t1"><br>
            <font size="5">FOR RECTANGLE</font><br><br>
                  Enter Lenth:<input type="text" name="t2"><br>
                  Enter breadth:<input type="text" name="t3"><br>
            <font size="5">FOR SQUARE</font><br>
                  Enter Side:<input type="text" name="t4"><br>
                <input type="submit" value="ok">
       </form>   
   </body>
</html>

<?php
//Write a PHP Script to calculate the area of Circle, Square, and Rectangle
     $r=$_POST["t1"]; 
     $l=$_POST["t2"];
     $b=$_POST["t3"];
     $s=$_POST["t4"];
               $a1=3.14*$r*$r;
               $a2=$l*$b;
               $a3=$s*$s;
      echo("<br>Area of Circle: $a1");
      echo("<br>Area of Rectangle: $a2");
      echo("<br>Area of Square: $a3");
?>