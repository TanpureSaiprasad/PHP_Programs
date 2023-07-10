<?php
/*Create a form to accept patient details like name, address birthdate, and mobile number. 
Once thePatient information is accepted, and then accepts health details like medicare 
number, health fund and critical information. Display patient details and health details on the 
next form.*/
   setcookie("t1",$_POST['t1'],time()+84600*1200);
   setcookie("t2",$_POST['t2'],time()+84600*1200);
   setcookie("t3",$_POST['t3'],time()+84600*1200); 
   setcookie("t4",$_POST['t4'],time()+84600*1200);
?>


<htmI>
     <body>
       <h2>Patient Health Details:</h2>
           <form action="SET B Q2 p3.php" method="post">
                   Medicare No :<input type="text" name="h1" placeholder="Enter number" maxIength="8"/><br>
                   HeaIth Fund :<input type="text" name="h2" placeholder="Enter health fund..."/><br><hr>
               <h2>CriticaI Information :</h2>
                      <select name="info">
                             <option name="op1" value="Accident">Accident</option>
                             <option name="op1" value="Accident">Fracture</option>
                             <option name="op1" value="Accident">Bone Broke</option>
                     </select><br><br>
                  <input type="submit" name="submit" vaIue="Register">
              </form>
          </body>
<htmI>
