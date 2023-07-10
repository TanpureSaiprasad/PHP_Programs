<html>
   <body>
       <form method="post" action="SET B Q1.php">
            enter project name :<input type="text" name="t1"><br>
            <input type="submit" value="result">
       </form>
   </body>
</html>

<?php
/*Q.Consider the following entities and their relationships.
Employee (eno, ename, sal)
Project (pno, pname,duration)
Employee and Project are related with a many-many relationship. Create a RDB in 3 NF for 
the above.
Using the above database write a PHP script to accept the project name. Display the name of 
the employees and the duration of the project.*/
   $con=mysql_connect("localhost","root","");
   if($con==false)
        die("Error in conection....");
  
  $p=$_POST["t1"];
  
   mysql_select_db("test");
 $res=mysql_query("select ename,duration from employee,project,EP
                                  where employee.eno=EP.eno 
                                  and project.pno=EP.pno 
                                  and pname='$p'");

      $f=0;
        while($row=mysql_fetch_array($res))
           {   
             if($f==0)
                 {
                    echo" <br><u><font size=5>Duration of Project: </u></font><br>".$row[1];
                    echo"<br><u><font size=5>Employees Names:</u></font>"; 
                 }
             $f=$f+1;
             echo"<br>".$row[0];  
           }

 mysql_close($con);
?>