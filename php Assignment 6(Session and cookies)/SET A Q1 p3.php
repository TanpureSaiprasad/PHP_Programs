<?php
     $rno=$_COOKIE["rno"];
     $name=$_COOKIE["name"];
     $class=$_COOKIE["class"];

     $m1=$_POST["t1"];
     $m2=$_POST["t2"];
     $m3=$_POST["t3"];
     $m4=$_POST["t4"];
      $total=$m1+$m2+$m3+$m4;
      $per=$total/4;

       echo("<center>");
       echo("<table border=1>");
       echo("<caption>Seat no.:$rno<br> Name:$name<br>Class:$class</caption>");
       echo("<tr><th>Subject Name <th>Marks</tr>");
       echo("<tr><td>PHP <td>$m1</tr>");
       echo("<tr><td>CPP <td>$m2</tr>");
       echo("<tr><td>DS <td>$m3</tr>");
       echo("<tr><td>RDBMS <td>$m4</tr>");
       echo("<tr><th colspan='2'>Total Marks: $total</tr>");
       echo("<tr><th colspan='2'>Percenyage: $per</tr>");
       echo("</table>");
       echo("</center>");
?>

