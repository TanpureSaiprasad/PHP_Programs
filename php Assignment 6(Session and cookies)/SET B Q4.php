<?php
/*Q.Write a PHP script to accept user name, email address and age. If data entered by the user 
is valid then display it on the next page otherwise display the appropriate message(use 
filter_var()).*/
       $name=$_POST["t1"];
       $email=$_POST["t2"];
       $age=$_POST["t3"];
     $f=0;
             if(empty($name))
                {
                   $f=1;
                   echo("must enter  name....");
                }
            if(filter_var($email,FILTER_VALIDATE_EMAIL)==false)
                {
                   $f=1;
                   echo("must enter valid email address....");
                }          
            if(filter_var($age,FILTER_VALIDATE_INT)==false)
                {
                   $f=1;
                   echo("must enter valid age....");
                }  
              if($f==0)
                {
                   echo("<br>Name: $name");
                   echo("<br>Email address: $email");
                   echo("<br>Age: $age");
                }                  
?>