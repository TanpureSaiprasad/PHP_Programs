<?php
/*Q.Write a PHP script to accept customer name and the list of product and quantity on the 
first page. On the next page display the name of the customer, name of the products, rate 
of the product, quantity, and total price in table format.*/
   $n=$_POST["t1"];
   $tv=$_POST["t2"];
   $r=$_POST["t3"];
   $w=$_POST["t4"];
   $b=$_POST["t5"];
   $tvtot=$tv*18000;
   $rtot=$r*31000;
   $wtot=$w*11000;
   $btot=$b*180;
   $total=$tvtot+$rtot+$wtot+$btot;
    
           echo("<table border=1>");
            echo("<caption><h3><u> Customer name: $n</u></h3></caption>");
            echo("<tr><th>Sr.no. <th>Product_name <th>Quantity <th>Price <th>Total</th></tr>");
            echo("<tr><td>1.<td>Television(TV) <td>$tv <td>18000 <td>$tvtot</td></tr>");
            echo("<tr><td>2.<td>referigerator <td>$r <td>31000 <td>$rtot</td></tr>");
            echo("<tr><td>3.<td>washing machine <td>$w <td>11000 <td>$wtot</td></tr>");
            echo("<tr><td>4.<td>Book<td>$b <td>180 <td>$btot</td></tr>");
            echo("<tr><td colspan=4>Total amount: <td>$total</td></tr>");
           echo("</table>")
?>