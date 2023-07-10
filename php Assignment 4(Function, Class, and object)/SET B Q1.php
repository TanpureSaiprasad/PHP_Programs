<?php
/*Q.Write a PHP script to swap two numbers using a function (Use Call by value and Call by 
reference)*/

class Fruit 
{
  public $name;
  public $color;
  public $price;
  function __construct($name,$color,$price)
  {
    $this->name = $name;
    $this->color = $color;
    $this->price = $price;
  }
  function get_name() 
  {
    echo $this->name ." ". $this->color ."  ".$this->price;
  }
}

$apple = new Fruit("Apple","Red","20");
$mango = new Fruit("mango","yellow","40");
$orange = new Fruit("orange","orange","30");
echo"<br>".$apple->get_name();
echo"<br>".$mango->get_name();
echo"<br>".$orange->get_name();
?>