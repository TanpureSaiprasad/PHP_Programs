<html>
   <body>
     <form method="post" action="SET A Q3.php">
           <font size=6> Employee details :</font><br><br>
                Employee name:<input type="text" name="t1"><br>
                Employee address:<input type="text" name="t2"><br><hr>
            <font size=6>Earning details :</font><br><br>
                Besic salary:<input type="text" name="t3"><br>
                DA:<input type="text" name="t4"><br>
                HRA:<input type="text" name="t5"><br><hr>
           <input type="submit">
     </form>
   </body>
</html>

<?php
/*Q.Write a PHP script to accept employee details (name, address) and earning details (basic, 
DA, HRA). Display employee details and earning details in the proper format.*/
   $n=$_POST["t1"];
   $addr=$_POST["t2"];
   $sal=$_POST["t3"];
   $da=$_POST["t4"];
   $hra=$_POST["t5"];
   $t=$sal+$da+$hra;
        echo("<table border=1>");
               echo("<tr><th>Name :</th><td>$n</td></tr>");
               echo("<tr><th>address :</th><td>$addr</td></tr>");
               echo("<tr><th>Besic salary :</th><td>$sal</td></tr>");
               echo("<tr><th>DA :</th><td>$da</td></tr>");
               echo("<tr><th>HRA :</th><td>$hra</td></tr>");
               echo("<tr><th>Total salary :</th><td>$t</td></tr>");
       echo("</table>");
?>