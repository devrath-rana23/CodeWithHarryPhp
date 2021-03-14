<?php
//What is Session
// Ek tareeka hai information store krne ka different pages mein
//Used to manage information across different pages
//Manlo aap facebook.com mein login krte hoo phir aap dusre page access krte hoo facebook domain kaa.....kya aapko phir login krna padega ....nhi kyunki aapka ye kaam session manage krdega

//session_start() tbhi krna jb if condition lgakr check krre user verified hai
session_start();
$_SESSION['username'] = "Devrath";
$_SESSION['favCat'] = "Tom";
echo "Your session data has been stored";
?>