<html>
    <body>
        <form method="post" action="SET-C_Q2.php">
              enter day :<input type="text" name="t1"><br>
               <input type="submit" value="ok"><br> 
        </form>
    </body>
</html>

<?php
//Q. Write a PHP script to change the background color of the browser using a switch statement according to the day of the week.
         $d=$_POST["t1"];
           switch($d)
             {
                case "monday": echo(" <body bgcolor=red> ");
                                                 break;
                case "tuesday": echo("<body bgcolor=blue>");
                                                 break;
                case "wednesday": echo("<body bgcolor=green>");
                                                 break;
                case "thursday": echo("<body bgcolor=orange>");
                                                 break;
                case "friday": echo("<body bgcolor=yellow>");
                                                 break;
                case "saturday": echo("<body bgcolor=violet>");
                                                 break;
                case "sunday": echo("<body bgcolor=brown>");
                                                break;
                default : echo("default day.......");
             }      
?>