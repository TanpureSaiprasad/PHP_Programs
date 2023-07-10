<?php
//Write a PHP Script to display the surface area and volume of a cuboid.(Hint: surface area=2(lb+lh+bh ), volume = l*b*h )
    $l=12;
    $b=3;
    $h=15;
       echo("lenth: $l");
       echo("<br>breath: $b");
       echo("<br>height: $h");
  $a=2*($l*$b+$l*$h+$b*$h);
  $v=$l*$b*$h;
      echo("<br><br>surface area of cuboid: $a ");
      echo("<br>volume of cuboid: $v");
?>