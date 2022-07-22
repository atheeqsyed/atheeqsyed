<?php
//Arithmetic Operators
echo "<h1>Arithmetic Operators</h1>";
$x = 10;
$y = 4;
echo "Addition of two numbers:  " . ($x + $y) . "<BR>"; // 0utputs: 14
echo "Subtraction of two numbers:  "  . ($x - $y) . "<BR>"; // 0utputs: 6
echo "Multiplication of two numbers:  " . ($x * $y) . "<BR>"; // 0utputs: 40
echo "Divide the two numbers:  " . ($x / $y) . "<BR>"; // 0utputs: 2.5
echo "Modolus of two numbers:  "  . ($x % $y) . "<BR>"; // 0utputs: 2
echo (6 % 4) . "<BR>"; // output 2
echo (6 % -4) . "<BR>"; // output 2
echo (-6 % 4) . "<BR>"; // output -2
echo 2 * (6 - 4) . "<BR>"; // output 4 (The first working code in brackets)
echo "<br>";
//Assigment Operator
echo "<h1>Assignment Operators</h1>";
$x = 10;
echo $x . "<br>"; // Outputs: 10

$x = 20;
$x += 30;
echo $x . "<br>";  // Outputs: 50            Add and assign

$x = 50;
$x -= 20;
echo $x . "<br>"; // Outputs: 30              Subtract and assign

$x = 5;
$x *= 25;
echo $x . "<br>"; // Outputs: 125            Multiply and assign

$x = 50;
$x /= 10;
echo $x . "<br>"; // Outputs: 5               Divide and assign quotient

$x = 100;
$x %= 15;
echo $x . "<br>"; // Outputs: 10            Divide and assign modulus
echo "<br>";
//Comparison Operators
echo "<h1>Comparison Operators</h1>";
$x = 25;
$y = 35;
$z = "25";
var_dump($x == $z) . "<br>";  // Outputs: boolean true      True if $x is equal to $z
var_dump($x === $z) . "<br>"; // Outputs: boolean false     True if $x is equal to $z, and they are of the same type
var_dump($x != $y) . "<br>";  // Outputs: boolean true    	True if $x is not equal to $y
var_dump($x !== $z) . "<br>"; // Outputs: boolean true      True if $x is not equal to $z, or they are not of the same type
var_dump($x < $y) . "<br>";   // Outputs: boolean true      True if $x is less than $y
var_dump($x > $y) . "<br>";   // Outputs: boolean false     True if $x is greater than $y
var_dump($x <= $y) . "<br>";  // Outputs: boolean true      True if $x is less than or equal to $y
var_dump($x >= $y) . "<br>";  // Outputs: boolean false     True if $x is greater than or equal to $y


echo "<br>";
//Incrementing and Decrementing Operators
echo "Increment and Decerment Operators";
$x = 10;
echo ++$x . "<br>"; // Output: 11   	Increments $x by one, then returns $x
echo $x . "<br>"; // Output 11

$x = 10;
echo $x++ . "<br>";  // Output ; 10
echo $x . "<br>"; // Output: 11    	Returns $x, then increments $x by one

$x = 10;
echo --$x . "<br>"; // Outputs: 9         Decrements $x by one, then returns $x
echo $x . "<br>";   // Outputs: 9

$x = 10;
echo $x-- . "<br>"; // Outputs: 10     Returns $x, then decrements $x by one
echo $x . "<br>";   // Outputs: 9


//String Operators
echo "<h1>String Operators</h1>";
$x = "Hello";
$y = " World!";
echo $x . $y . "<br>"; // Outputs: Hello World!     Concatenation of $str1 and $str2

$x .= $y;
echo $x . "<br>"; // Outputs: Hello World!   Appends the $str2 to the $str1


//Logical Operators
echo "<h1>Logical Opeartors</h1>";

$x = 50;
$y = 30;
if ($x == 50 and $y == 30)
    echo "and Success \n" . "<br>";  // Output: and Success        True if both the operands are true else false

if ($x == 50 or $y == 20)
    echo "or Success \n" .  "<br>";  // Output: or Success     True if either of the operands is true else false

if ($x == 50 xor $y == 20)
    echo "xor Success \n" . "<br>"; // Output: xor Success True if either of the operands is true and false if both are true

if ($x == 50 && $y == 30)
    echo "&& Success \n" . "<br>"; // Output: && Success     True if both the operands are true else false

if ($x == 50 || $y == 20)
    echo "|| Success \n" . "<br>"; // Output: || Success  True if either of the operands is true else false

if (!$z)
    echo "! Success \n" . "<br>"; // Output: ! Success  	True if $x is false

//Array Operators
echo "<h1>Array Operators</h1>";

$x = array("a" => "Red", "b" => "Green", "c" => "Blue");
$y = array("u" => "Yellow", "v" => "Orange", "w" => "Pink");
$z = $x + $y; // Union of $x and $y
var_dump($z) . "<br>";
echo "<br>";
var_dump($x == $y) . "<br>";  // Outputs: boolean false
echo "<br>";
var_dump($x === $y) . "<br>"; // Outputs: boolean false
echo "<br>";
var_dump($x != $y) . "<br>";   // Outputs: boolean true
echo "<br>";

var_dump($x <> $y) . "<br>";   // Outputs: boolean true
echo "<br>";
var_dump($x !== $y) . "<br>";  // Outputs: boolean true