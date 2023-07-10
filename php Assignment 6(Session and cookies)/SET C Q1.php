<?php
/*Q.A web application that takes name and age from an HTML page. If the age is less than 
18, it should send a page with “Hello <name>, you are not authorized to visit the site” 
message, where <name> should be replaced with the entered name. Otherwise, it should 
send a “Welcome <name> to this site” message.*/
       $name=$_POST["t1"];
       $age=$_POST["t2"];
     $f=0;
             if(empty($name))
                {
                   $f=1;
                   echo("must enter  name....");
                }
     
            if($age<18)
                {
                   $f=1;
                   echo("Hello $name, you are not authorized to visit site");
                }  
              if($f==0)
                   echo("Welcome $name to the site");      
?>