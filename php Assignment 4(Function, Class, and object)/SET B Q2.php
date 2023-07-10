<?php
/*Q.Write a PHP Script to create a class Student that contains data members as Roll_Number, 
Stud_Name, and Percentage. Write member functions to accept Student information.*/
class student 
{
  public $Roll_Number;
  public $Stud_Name;
  public $Percentage;
  function __construct($Roll_Number,$Stud_Name,$Percentage) 
  {
     $this->Roll_Number = $Roll_Number;
     $this->Stud_Name = $Stud_Name;
     $this->Percentage = $Percentage;
   }
   function get_name() 
    {
       echo $this->Roll_Number ." ". $this->Stud_Name ."  ".$this->Percentage;
    }
}
$s1 = new student("215101","rahul","78%");
$s2 = new student("215102","suresh","83%");
$s3 = new student("215103","gaurav","92%");
echo"<br>".$s1->get_name();
echo"<br>".$s2->get_name();
echo"<br>".$s3->get_name();
?>