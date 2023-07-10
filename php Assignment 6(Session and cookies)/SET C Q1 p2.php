<?php
  session_start();
     $name=$_POST['t1'];
     $eaddr=$_POST['t2'];
     $addr=$_POST['t3'];
     $pay=$_POST['t4'];
         $_SESSION['t1']=$name;
         $_SESSION['t2']=$eaddr;
         $_SESSION['t3']=$addr;
         $_SESSION['t4']=$pay;
?>

<htmI>
   <body>
       <center>
     <h2>Shopping Details :</h2>
         <form action="SET C Q1 p3.php" method="post">
              <table border="1">
                <tr> 
                       <td>               
                           <img src="m.jpg" width="150" hight="150">
                            <br>MOBILE-Samsung Galaxy Z Flip3 5G:  Rs.40000<br>
                                  Quantity:<br><select name="t1_q">
                                                     <option value="1">1</option> 
                                                     <option value="2">2</option> 
                                                     <option value="3">3</option> 
                                                     <option value="4">4</option> 
                                                 </select><br><br>
                                  Color:<br><select name="t1_c">
                                                     <option value="red">red</option> 
                                                     <option value="orange">orange</option> 
                                                     <option value="black">black</option> 
                                                     <option value="green">green</option> 
                                                 </select><br><br>
                                  size:<br><select name="t1_s">
                                                     <option value="2Gb RAM">2Gb RAM</option> 
                                                     <option value="4Gb RAM">4Gb RAM</option> 
                                                     <option value="6Gb RAM">6Gb RAM</option> 
                                                     <option value="8Gb RAM">8Gb RAM</option> 
                                                 </select><br><br>
                       </td>
                       <td>               
                           <img src="w.jpg" width="250" hight="250">
                            <br>Smart Watch:  Rs.3250<br>
                                  Quantity:<br><select name="t2_q">
                                                     <option value="1">1</option> 
                                                     <option value="2">2</option> 
                                                     <option value="3">3</option> 
                                                     <option value="4">4</option> 
                                                 </select><br><br>
                                  Color:<br><select name="t2_c">
                                                     <option value="red">red</option> 
                                                     <option value="orange">orange</option> 
                                                     <option value="black">black</option> 
                                                     <option value="green">green</option> 
                                                 </select><br><br>
                                  size:<br><select name="t2_s">
                                                     <option value="45 mm">45 mm</option> 
                                                     <option value="42 mm">42 mm</option> 
                                                     <option value="40 mm">40 mm</option> 
                                                     <option value="38 mm">38 mm</option> 
                                                 </select><br><br>
                       </td>
                       <td>               
                           <img src="s.jpg" width="200" hight="200">
                            <br>Shoes:  Rs.2000<br>
                                  Quantity:<br><select name="t3_q">
                                                     <option value="1">1</option> 
                                                     <option value="2">2</option> 
                                                     <option value="3">3</option> 
                                                     <option value="4">4</option> 
                                                 </select><br><br>
                                  Color:<br><select name="t3_c">
                                                     <option value="red">red</option> 
                                                     <option value="orange">orange</option> 
                                                     <option value="black">black</option> 
                                                     <option value="green">green</option> 
                                                 </select><br><br>
                                  size:<br><select name="t3_s">
                                                     <option value="7">7</option> 
                                                     <option value="8">8</option> 
                                                     <option value="9">9</option> 
                                                     <option value="10">10</option> 
                                                 </select><br><br>
                       </td>
                  </tr>
              </table>
           <input type="submit" value="Genarate BILL">
        </form>
      </center>
   </body>
</htmI>
