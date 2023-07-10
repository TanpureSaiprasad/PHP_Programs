<?php
/*Create an online flight registration form. On the first page accept name, address, birthdate,
and mobile number. On the second page accept flight details (flight name, source, 
destination, departure date-time and charges). If the user doesn’t enter information within a 
specified time limit, expire his session and give a warning otherwise display details using 
sessions on the third page.*/
      session_start();
        $name=$_POST["t1"];
        $addr=$_POST["t2"];
        $dob=$_POST["t3"];
        $mob=$_POST["t4"];   
     
      $_SESSION["name"]=$name;
      $_SESSION["addr"]=$addr;
      $_SESSION["dob"]=$dob;
      $_SESSION["mob"]=$mob;
      $_SESSION["start"]=time()+(30*60);
                    
?>

<html>
  <body>
      <form method="post" action="SET B Q1 p3.php">
               <h2>Flight Details:</h2><br>
                Flight name:<input type="text" name="t1"><br>
                sources:<input type="text" name="t2"><br>
                Destination:<input type="text" name="t3"><br>
                Departure Date:<input type="date" name="t4"><br>
                Departure time:<input type="time" name="t5"><br>
                Charges:<input type="text" name="t6"><br>
              <input type="submit" value="next">
     </form>
  </body>
</html>

