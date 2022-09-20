<?php
echo "<h1>The if Statement</h1>" . "<br>";
/*if(cond){
    // Code to be executed
}*/
$d = date("D");
if ($d == "Sat") {
    echo "Have a nice weekend!";
}
echo "<h1>The if...else Statement</h1>" . "<br>";
/*if(cond){
    // Code to be executed if condition is true
} else{
    // Code to be executed if condition is false
}*/
$d = date("D");
if ($d == "Sat") {
    echo "Have a nice weekend!";
} else {
    echo "Have a nice day!";
}


echo "<h1>The if...elseif...else Statement</h1>" . "<br>";
/*
if(cond1){
    // Code to be executed if condition1 is true
} elseif(cond2){
    // Code to be executed if the condition1 is false and condition2 is true
} else{
    // Code to be executed if both condition1 and condition2 are false
}*/
$d = date("D");
if ($d == "Sat") {
    echo "Have a nice weekend!";
} elseif ($d == "Sun") {
    echo "Have a nice Sunday!";
} else {
    echo "Have a nice day!";
}

echo "<h1>The Ternary Operator</h1>" . "<br>";

/*if($age < 18){
    echo 'Child'; // Display Child if age is less than 18
} else{
    echo 'Adult'; // Display Adult if age is greater than or equal to 18
}*/
echo ($age > 18) ? 'Child' : 'Adult';
