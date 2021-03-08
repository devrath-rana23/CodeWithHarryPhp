<?php
$age = 45;
/*
switch case mein koi case match ho jaata hai hai toh woh aur uske neeche wale saare cases bhi execute hoo jaate hai iska solution hai break; statement joki joh case match hota hai usse print krayega phir switch case se bahar aa jyega
switch($age){
    case 12:
        echo "You are 12 years old<br>";

    case 45:
        echo "You are 45 years old<br>";

    case 56: 
        echo "You are 56 years old<br>";
        
    default:
        echo "Invalid age<br>";
    }  
*/
switch($age){
    case 12:
        echo "You are 12 years old<br>";
        break;

    case 45:
        echo "You are 45 years old<br>";
        break;

    case 56: 
        echo "You are 56 years old<br>";
        break;
        
    default:
        echo "Invalid age<br>";
        break;
    }
