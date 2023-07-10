<html>
    <body>
         <form method="post" action="SET A Q2.php">
              Enter name:<input type="text" name="t1"><br>
              Enter address:<input type="text" name="t2"><br>
              Enter pin code:<input type="text" name="t3"><br>
              Gender:<input type="radio" name="r1" value="male">male
                           <input type="radio" name="r1" value="female">female
              <br><input type="submit">
         </form>
    </body>
</html>

<?php
/*Q.Write a PHP program to accept name, address, pincode, gender information. If any field 
is blank display error messages “all fields are required”.*/
   $n=$_POST["t1"];
   $addr=$_POST["t2"];
   $pin=$_POST["t3"];
   $g=$_POST["r1"];

   if(empty($n)||empty($addr)||empty($pin)||empty($g))
           echo("all fields are required........");
   else
       {
          echo("<br> Name :".$n);
          echo("<br> Address :".$addr);
          echo("<br> pin code :".$pin);
          echo("<br> Gender :".$g);
       }
?>