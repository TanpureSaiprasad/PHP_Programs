<?php
    session_start();
     $name=$_SESSION["t1"];
     $eaddr=$_SESSION["t2"];
     $addr=$_SESSION["t3"];
     $pay=$_SESSION["t4"];
     $t=0;

     $p1_q=$_POST["t1_q"];
     $p1_c=$_POST["t1_c"];
     $p1_s=$_POST["t1_s"];
     $p1_tot=$p1_q*40000;

     $p2_q=$_POST["t2_q"];
     $p2_c=$_POST["t2_c"];
     $p2_s=$_POST["t2_s"];
     $p2_tot=$p2_q*3250;

     $p3_q=$_POST["t3_q"];
     $p3_c=$_POST["t3_c"];
     $p3_s=$_POST["t3_s"];
     $p3_tot=$p3_q*2000;
 
     $t=$p1_tot+$p2_tot+$p3_tot;
 
         echo("<center>");
       echo("<table border=1>");
       echo("<h2>Customer details</h2> <b>Name:</b>$name<br><b>E-mail Address:</b>$eaddr<br><b>Shopping Address:</b>$addr<br><b>payment:</b>$pay");
       echo("<caption>BILL</caption>");
       echo("<tr><th>Product_Name<th>Color<th>Size<th>Quantity<th>Price</tr>");
       echo("<tr><td>Smart Phone<td> $p1_c<td>$p1_s<td>$p1_q<td>40000</tr>"); 
       echo("<tr><td>Smart Watch<td> $p2_c<td>$p2_s<td>$p2_q<td>3250</tr>"); 
       echo("<tr><td>Shoes<td> $p3_c<td>$p3_s<td>$p3_q<td>2000</tr>");
       echo("<tr><th colspan=4>Total Amount:<td>$t");       
       echo("</table>");
       echo("</center>");
?> 