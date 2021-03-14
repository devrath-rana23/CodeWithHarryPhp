<?php
$name = "Devrath";
$integer = 200;
/*
Php DATA types
1. String
2. Integer
3. Float
4. Boolean
5. Object
6. Array
7. NULL
*/

//STRING - sequence of characters
$name = "Harry";
$friend = "Ronnie";
echo "$name's best friend is $friend";

//Integer - Non Decimal Number ko kehte hai
$income = 344;
$debts = -23;
echo "$income is my income <br> $debts is my debt <br> My Net income is ";echo $income + $debts."<br>";
//Float - Decimal point number
$income = 344.5;
$debts = -45.5;
echo "My new income is $income <br>";
echo "My new debt is $debts <br> My new net income is-";echo $income + $debts."<br>";
//Boolean = Can be either true or false
$x = true;
$is_friend = false;
echo var_dump($x);//var_dump() data ka type aur value dono deta hai; yhi shi tareeka hai variables ko print krane ka for debugging purposes
echo "<br>";
echo var_dump($is_friend);echo "<br>";
/*Object - Instances of classes
Employee is a class ---> harry can be one object
*/

//Array - is used to store multiple values in a single container
$friend = array("Rohan", "Ram", "Skillf", "Majon");
echo $friend;//Not right
echo "<br>";
echo var_dump($friend);echo "<br>";
print_r($friend);echo "<br>";
echo $friend[0];echo "<br>";
// echo $friend[4];echo "<br>";will not print as size of array is 4 

//NULL
echo NULL;echo "<br>";//will print nothing
echo var_dump(NULL);echo "<br>";

?>
