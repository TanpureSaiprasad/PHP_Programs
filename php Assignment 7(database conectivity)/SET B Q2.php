<html>
   <body>
       <form method="post" action="SET B Q2.php">
            enter date :<input type="text" name="t1"><br>
            <input type="submit" value="result">
       </form>
   </body>
</html>

<?php
/*Q.Consider the following entities and their relationships.
Train(t_no, t_name)
Passenger (p_no, p_name, addr, age)
The relationship between Train and Passenger is many-to-many with descriptive attribute 
date,seat_no and amt. Create a RDB in 3 NF for the above.
Using the above database write a PHP script to accept a date. Display train details having 
maximum passenger for a given date.*/

   $con=mysql_connect("localhost","root","");
   if($con==false)
        die("Error in conection....");
  
  $d=$_POST["t1"];
  
   mysql_select_db("test");
 $res=mysql_query("select train.*,count(tname) from train,passenger,TP
                                where train.tno=TP.tno
                                and passenger.pno=TP.pno
                                and TPdate='$d'
                                group by tname");

        while($row=mysql_fetch_array($res))
           {   
              echo("<br><br> Train number :".$row[0]);
              echo("   Train name :".$row[1]);
              echo("    number of passengers :".$row[2]);
           }

 mysql_close($con);
?>