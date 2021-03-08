<?php
/*
If-else statement
$a = 654;
$b = 33;

if($a >23){
    echo "a is grater than 23";
}
else{
    echo "a is not greater than 23";
}
*/

/*Nested If Else statement 
elseif mein jo bhi pehle satisfy ho jaati hai condition uska result print hoo jaata hai baki mein check nhi krta elseif ladder ke tarah hota hai jismein se khali ek hii execute hota hai
IF-ELSE LADDER
$age = 54;

if($age>18){
    echo "You can drink water with chai and alcohol";
}
elseif($age>13){
    echo "You can drink chai only with water. No alcohol for you";
}
else{
    echo "You can drink water only";
}
*/
/*
ismein 2 ladders bni hai ek if($age>18) aur dusri if-else wali isliye dono hi alag consider honge aur elseif ke tarah ek hii execute nhi hoga balki multiple if execute hoo skte hai
$age = 54;
if($age>18){
    echo "You can drink water with chai and alcohol";
}
if($age>13){
    echo "You can drink chai only with water. No alcohol for you";
}
else{
    echo "You can drink water only";
}
*/
$age = 54;
if($age>18){
    echo "You can drink water with chai and alcohol <br>";
}
if($age>13){
    echo "You can drink chai only with water. No alcohol for you<br>";
}
else{
    echo "You can drink water only<br>";
}
echo "Done";
/* 
Quick QUiz - 
1.create an if else ladder using more than one elseif
2.Write a program to allow a driver to drive only when his age is greater than 25 and less than or equal to 65
*/ 
?>