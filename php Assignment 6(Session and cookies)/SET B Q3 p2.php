<?php
/*Write a PHP script to create an inventory management system. On the first page accept the 
highest sold product details like product name, total quantity and total sold. On the second 
page accept the latest sales details like product name, date and total sale. Display highest sold 
product details in one table and latest sales details in another table on the third page.*/

  session_start();
     $pname=$_POST['t1'];
     $totalq=$_POST['t2'];
     $totals=$_POST['t3'];
         $_SESSION['t1']=$pname;
         $_SESSION['t2']=$totalq;
         $_SESSION['t3']=$totals;
?>

<htmI>
   <body>
     <h2>Iatest sales Product Details :</h2>
         <form action="SET B Q3 p3.php" method="post">
              Product Name :<input type="text" name="l1"><br>
              Date :<input type="date" name="l2"><br>
              TotaI Sell :<input type="text" name="l3"><br>
           <input type="submit"  vaIue="next">
        </form>
   </body>
</htmI>
