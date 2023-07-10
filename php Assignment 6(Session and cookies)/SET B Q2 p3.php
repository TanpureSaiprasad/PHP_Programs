<?php	
     setcookie("h1",$_POST['h1'],time()+84600*1200);
     setcookie("h2",$_POST['h2'],time()+84600*1200);
     setcookie("info",$_POST['info'],time()+84600*1200);
?>

<?php

         echo"<h1>Patient Details</h1>";
         echo"Patient Name:".$_COOKIE['t1']."<br>";
         echo"Patient Address:".$_COOKIE['t2']."<br>";
         echo"Patient Birth Date:".$_COOKIE['t3']."<br>";
         echo"Patient Mobile No.:".$_COOKIE['t4']."<br>";
         echo"<hr>";
         echo"<h1>Health Details:</h1>";
         echo"Patient Medicare No.:".$_COOKIE['h1']."<br>";
         echo"Patient Health Fund:".$_COOKIE['h2']."<br>";
         echo"Patient Critical information:".$_COOKIE['info']."<br>";
       
?>