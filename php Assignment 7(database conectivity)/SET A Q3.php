<html>
   <body>
       <form method="post" action="SET A Q3.php">
            enter product no. to update:<input type="number" name="t1"><br>
            enter new price:<input type="number" name="t2"><br>
            <input type="submit" value="update">
       </form>
   </body>
</html>

<?php
/*Write a PHP script to accept product number from the user. Update the price of the product 
and display an appropriate message.*/
   $con=mysql_connect("localhost","root","");
   if($con==false)
        die("Error in conection....");
  $no=$_POST["t1"];  
  $p=$_POST["t2"];
  
   mysql_select_db("test");
 $res=mysql_query("update product set price=$p where pno=$no");
 if($res==true)
    echo("Values update successfully......");
 else
    echo("Error in update query...");
 mysql_close($con);
?>