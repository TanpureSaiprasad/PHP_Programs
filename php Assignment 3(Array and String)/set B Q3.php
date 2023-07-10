<html>
      <body>
             <form method="post" action="set B Q3.php">
                 <br>1: Sort the array by values (changing the keys) in ascending, descending order.
                 <br>2: Also, sort the array by values without changing the keys.
                 <br>3: Find the intersection of two arrays.
                 <br>4: Find the union of two arrays.
                 <br><br>Enter choice : <input type="text" name="t1"><br>
                  <input type="submit"value="OK">
             </form>
      </body>
</html>

<?php
/*Q.Write a menu-driven program in PHP to perform the following operations on associative 
arrays:
i) Sort the array by values (changing the keys) in ascending, descending order.
ii) Also, sort the array by values without changing the keys.
iii) Find the intersection of two arrays.
iv) Find the union of two arrays.*/

  $ch=$_POST["t1"];
  $a=array("MH"=>"maharashtra","RJ"=>"rajastan","HR"=>"hariyana","GJ"=>"gujrat","UP"=>"uttar pradesh");
  $b=array("MP"=>"madhya pradesh","GA"=>"goa","RJ"=>"rajastan");  
     switch($ch)
         {
             case 1: echo("<br>Array in ascending order with changing key : <br>");
                          sort($a);
                          print_r($a);
                          echo("<br>Array in descending order with changing key : <br>");
                          rsort($a);
                          print_r($a);
                          break;
             case 2: echo("<br>Array in ascending order without changing key : <br>");
                          ksort($a);
                          print_r($a);
                          echo("<br>Array in descending order without changing key : <br>");
                          krsort($a);
                          print_r($a);
                          break;
             case 3: $c=array_intersect($a,$b);
                          echo("<br>intersection of two arrays :<br>");
                          print_r($c);
                          break;
             case 4: $c=array_merge($a,$b);
                          $c=array_unique($c);
                          echo("<br>union of two arrays :<br>");
                          print_r($c);
                          break;
         }
?>