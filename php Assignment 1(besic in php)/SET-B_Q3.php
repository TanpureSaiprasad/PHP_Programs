<html>
    <body>
        <form method="post" action="SET-B_Q3.php">
              <font size="7">  enter subject marks </font><br><hr><br>
               Data Structure:
                           <input type="text" name="t1"><br><br>
               Digital Marketing:
                           <input type="text" name="t2"><br><br>
               PHP:
                           <input type="text" name="t3"><br><br>
               SE:
                          <input type="text" name="t4"><br><br>
               Bigdata:
                          <input type="text" name="t5"><br><br>
               <input type="submit" value="result"><br> 
        </form>
    </body>
</html>

<?php
/*Write a PHP Script to display the total and percentage of Marks of Subjects (Out of 100) 
Data Structure, Digital Marketing, PHP, SE, and Bigdata.*/

         $ds=$_POST["t1"];
         $dm=$_POST["t2"];
         $php=$_POST["t3"];
         $se=$_POST["t4"];
         $bd=$_POST["t5"];
             
                           $total=$ds+$dm+$php+$se+$bd;
                           $per=($total/500)*100;
                               echo("<br>total marks obtain by student= $total");
                               echo("<br>percentage= $per%");
                           if($per>=40)
                               echo("<br>result: PASS");
                          else
                              echo("<br>result: FAIL");
                     
?>