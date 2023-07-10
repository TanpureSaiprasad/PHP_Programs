
<html>
    <form action="#" method="post">
        <label for="">A: </label>
        <input type="text" name="a" >
        <label for="">B : </label>
        <input type="text" name="b" ><br><br>
        <input type="submit" value="Submit">
    </form>
</html>
<?php
/*Write a PHP script to perform arithmetic operations on two numbers. Write a PHP function 
to display the result. (Use the concept of function and default parameters)*/

$a = $_POST['a'];
$b = $_POST['b'];
function add($num1, $num2=5)
{
    $sum=$num1+$num2;
    echo "The Addition is  : $sum";
}
function sub($num1, $num2=5)
{
    $sum=$num1-$num2;
    echo "The Subtraction is  : $sum";
}
function mul($num1, $num2=5)
{
    $sum=$num1*$num2;
    echo "The Multiplication is  : $sum";
}
function div($num1, $num2=5)
{
    $sum=$num1/$num2;
    echo "The Division is  : $sum";
}
add($a,$b) ;
echo "<br>";
sub($a,$b) ;
echo "<br>";
mul($a,$b) ;
echo "<br>";
div($a,$b);

?>
