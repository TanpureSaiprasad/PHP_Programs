<?php
/*Write a PHP script to create an employee table using attributes employee number, employee 
name, address joining date and salary. If a table is created then display the appropriate 
message otherwise end the PHP script*/
   $con=mysql_connect("localhost","root","");
   if($con==false)
        die("Error in conection....");
   mysql_select_db("my database");
 $res=mysql_query("create table employee(eno int,ename char(20),address char(20),join_date date,sal int)");
 if($res==true)
    echo("table create ");
 else
    echo("table alrady exist...");
 mysql_close($con);
?>