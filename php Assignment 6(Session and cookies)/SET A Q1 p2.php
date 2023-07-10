<?php
/*Q.Write PHP program to store student information like Seat number, name, and class. On the 
second page, accept marks of the subject PHP, DS, CPP, and RDBMS. Display Result in 
table format on the third page (use cookies).*/
      setcookie("rno",$_POST["t1"]);
      setcookie("name",$_POST["t2"]);
      setcookie("class",$_POST["t3"]);
?>

<html>
  <body>
      <form method="post" action="SET A Q1 p3.php">
              Enter PHP marks: <input type="text" name="t1"> <br>
              Enter CPP:<input type="text" name="t2"> <br>
              Enter DS:<input type="text" name="t3"> <br>
              Enter RD MArks: <input type="text" name="t4"> <br>
              <input type="submit" value="next">
     </form>
  </body>
</html>

