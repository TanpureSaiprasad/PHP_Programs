<html>
   <head>
         <form method="post" action="SET-C_Q1.php">
               name : <input type="text" name="t1"><br>
               address : <textarea name="t2"></textarea><br>
               contact no. : <input type="number" name="t3"><br>
               source : <input type="text" name="t4"><br>
               destination : <input type="text" name="t5"><br>
               date of journey : <input type="date" name="t6"><br>
               gender : <input type="radio" name="r1" value="male"> male
                            <input type="radio" name="r1" value="female"> female<br>
               no. of person : <input type="text" name="t7"><br>
               price per ticket : <input type="text" name="t8"><br>
           <input type="submit" value="ok">
         </form>
   </head>
</html>

<?php
/*Q. Write a PHP Script to calculate the total cost of AIR Ticket Reservation and display the 
details for Name, Address, Contact No, Source, Destination, Date of journey, Gender of 
passenger, No of Persons, Price per Ticket, etc.
*/
     $name=$_POST["t1"];
     $add=$_POST["t2"];
     $no=$_POST["t3"];
     $source=$_POST["t4"];
     $d=$_POST["t5"];
     $doj=$_POST["t6"];
     $g=$_POST["r1"];
     $p=$_POST["t7"];
     $t=$_POST["t8"];
        $total=$p*$t;
                           echo("<br>name of passanger :$name");
                           echo("<br>address of passanger :$add");
                           echo("<br>contact no. : $no");
                           echo("<br>source :$source");
                           echo("<br>destination :$d");
                           echo("<br>date of journey : $doj");
                           echo("<br>gender :$g");
                           echo("<br>no. of person :$p");
                           echo("<br>price per ticket :$t");
                 echo("<br><br>Total Cost:$total"); 
?>