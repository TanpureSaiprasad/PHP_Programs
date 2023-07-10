<?php
    session_start();
     $t1=$_SESSION["t1"];
     $t2=$_SESSION["t2"];
     $t3=$_SESSION["t3"];
     $proname=$_POST["l1"];
     $date=$_POST["l2"];
     $totalsale=$_POST["l3"];
 
         echo("<center>");
       echo("<table border=1>");
       echo("<caption>Product Details</caption>");
       echo("<tr><th colspan=3>Highest Sold Product</tr>");
       echo("<tr><th>Product_Name <th>Total_Quantity<th>Total_Sold</tr>");
       echo("<tr><td>$t1<td>$t2<td>$t3</tr>");    
       echo("<tr><th colspan=3>Latest Sold Product</tr>");
       echo("<tr><th>Product_Name <th>Date<th>Total_Sale</tr>");
       echo("<tr><td>$proname<td>$date<td>$totalsale</tr>");   
       echo("</table>");
       echo("</center>");
?> 