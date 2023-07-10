<?php
/*Q.Write a PHP Script to create a class Book (Book_id, Book_name, Publication, Author, 
Book_price). Write a member function to accept and display Book details.*/
 
class Book 
{
  public $Book_id;
  public $Book_name;
  public $Publication;
  public $Author;
  public $Book_price;

  function __construct($Book_id, $Book_name,$Publication,$Author,$Book_price)
  {
    $this->Book_id = $Book_id;
    $this->Book_name = $Book_name;
    $this->Publication = $Publication;
    $this->Author = $Author;
    $this->Book_price = $Book_price;
  }
  function display()
  {
    echo $this->Book_id ."    ".$this->Book_name ."    ". $this->Publication."    ".$this->Author."    ".$this->Book_price;
  }
}

$b1 = new Book("1. |","data structure |","Mcgraw Publication |","Lipschute |","217.00 |");
$b2 = new Book("2. |","DOS Guide |","PHI Publication |","Nortron |","175.00 |");
$b3 = new Book("3. |","turbo C++ |","Galgotia Publication |","Robart Lefore |","270.00 |");
echo"<table border=1><tr><td>";
echo"<br>".$b1->display();
echo"</td></tr><tr><td>";
echo"<br>".$b2->display();
echo"</td></tr><tr><td>";
echo"<br>".$b3->display();
echo"</td></tr>";
?>