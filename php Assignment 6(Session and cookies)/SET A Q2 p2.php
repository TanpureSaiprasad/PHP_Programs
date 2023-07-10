<?php
/*Write a PHP script to accept username and password. If in the first three chances, username 
and password entered is correct, then display the welcome message on the second form, 
otherwise display an error message.*/
     $user=$_POST["t1"];
     $pass=$_POST["t2"];

     if(isset($_COOKIE["Saiprasad"]))
      {
         $cnt=$_COOKIE["Saiprasad"];
         $cnt=$cnt+1;
          setcookie("Saiprasad",$cnt);
      }
   else
       setcookie("Saiprasad",1);
    if($_COOKIE["Saiprasad"]>3)
                die("Your attempts are over.....");
    if($user=="Saiprasad" && $pass=="12345")
             header("location:SET A Q2 p3.php");
    else
            echo("Invalid user name and password");
            
?>

