<?php
/*Q.Write a PHP program to perform the following operations on an associative array:
a) Display the elements of an array along with the keys.
b) Display the size of an array
c) Delete an element from an array from the given index.
d) Reverse the order of each element’s key-value pair
e) Traverse the elements in an array in random order.*/

    $a=array("MH"=>"maharashtra","RJ"=>"rajastan","HR"=>"hariyana","GJ"=>"gujrat","UP"=>"uttar pradesh");
     
    echo("<br>Display along with key : <br> ");
    print_r($a);

    echo("<br><br>Size of array :  ".count($a));

    unset($a['HR']);
    echo("<br><br>After delete : <br> ");
    print_r($a);

    $b=array_reverse($a);
    echo("<br><br>Reverse of array :<br>");
    print_r($b);

    shuffle($a);
    echo("<br><br>Random order array :<br>"); 
    print_r($a);   
?>
