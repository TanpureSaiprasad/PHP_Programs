<html>
   <body>
       <form method="post" action="SET A Q2.php">
            enter account no.:<input type="number" name="t1"><br>
            enter account type:<input type="text" name="t2"><br>
            enter balance:<input type="number" name="t3"><br>
            <input type="submit" value="insert">
       </form>
   </body>
</html>

<?php
/*Write a PHP script to accept account details (account number, account type and balance). 
Store these details in the account table and display an appropriate message*/
   $con=mysql_connect("localhost","root","");
   if($con==false)
        die("Error in conection....");
  $no=$_POST["t1"];
  $type=$_POST["t2"];
  $bal=$_POST["t3"];
   mysql_select_db("test");
 $res=mysql_query("insert into account values($no,'$type',$bal)");
 if($res==true)
    echo("Values inserted successfully......");
 else
    echo("Error in insert query...");
 mysql_close($con);
?>