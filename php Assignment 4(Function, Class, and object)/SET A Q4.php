<html>
   <body>
       <form method="post" action="#">
             enter value a:<input type="text" name="t1"><br>
             enter value b:<input type="text" name="t2"><br><br>
           <input type="submit" value="swap">
       </form>
   </body>
</html>

<?php
/*Q. Write a PHP script to swap two numbers using a function (Use Call by value and Call by 
reference)*/

     function cvswap($a,$b)
       {
           $temp=$a;
           $a=$b;
           $b=$temp;
          echo"<br>after swapping by call by value  a=$a  and  b=$b";
       } 
     function crswap(&$a,&$b)
       {
           $temp=$a;
           $a=$b;
           $b=$temp;
          echo"<br>after swapping by call by reference  a=$a  and  b=$b";
       } 
 $a=$_POST["t1"];
 $b=$_POST["t2"];
    echo"<br>before swapping  a=$a  and  b=$b";
  cvswap($a,$b);
  crswap($a,$b)
?>