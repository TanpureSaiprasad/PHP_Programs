<?php
       session_start();

     $fname=$_POST["t1"];
     $source=$_POST["t2"];
     $desti=$_POST["t3"];
     $depdate=$_POST["t4"];
     $deptime=$_POST["t5"];
     $charges=$_POST["t6"];

     $name=$_SESSION["name"];
     $addr=$_SESSION["addr"];
     $dob=$_SESSION["dob"];
     $mob=$_SESSION["mob"];

    $_SESSION["expire"]=$_SESSION["start"];
    
      {
        echo("<h2>Passenger Details:</h2><br>");
        echo("Name: $name<br>");
        echo("Address: $addr<br>");
        echo("Date of Birth: $dob<br>");
        echo("Mobile number: $mob<br><hr>");

        echo("<h2>Flight Details:</h2><br>");
        echo("Name: $fname<br>");
        echo("Sources: $source<br>");
        echo("Destination: $desti<br>");
        echo("departure date: $depdate<br>");
        echo("departure Time: $deptime<br>");
        echo("charges: $charges<br><hr>");
      }
?>

