<?php
/* Q.Write HTML code to design multiple choice question paper for PHP subject. Display 
question wise marks and total marks received by the student in table format.*/
       $n=$_POST["t1"];
       $q1=$_POST["r1"];
       $q2=$_POST["r2"];
       $q3=$_POST["r3"];
       $q4=$_POST["r4"];
       $q5=$_POST["r5"];
   $t=$q1+$q2+$q3+$q4+$q5;
   $p=($t/25)*100;
  echo("<table border=1>");
  echo("<caption>Student name: $n");
  echo("<tr><th>Questions <th>Marks  <th>Total <th>percentage</tr>");
        echo("<tr><td>1 <th>$q1  <td rowspan=5>$t <td rowspan=5>$p%</tr>");
        echo("<tr><td>2 <th>$q2</tr> ");
        echo("<tr><td>3 <th>$q3</tr> ");
        echo("<tr><td>4 <th>$q4</tr> ");
        echo("<tr><td>5 <th>$q5</tr> ");
  echo("</table>");
?>