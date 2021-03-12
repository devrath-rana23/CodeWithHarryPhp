<?php
$a =readfile("myFile.txt");
echo $a;//iska utput mein file ka content aur uss content ki length ayegi content ki length matlab number of characters read AGAR COntent ka size nhi chiye toh seedha read file krdo
echo "<br>";
//YE function jyada tar use hota hai agar aap kisi file ka content khali read krke uska use krna chahte hoo
readfile("myFile.txt");//ye khali file ka text seedha print kra dega
echo "<br>";
readfile('22_RdbmsMysql.html');//ye html page aram se display hoo jyega
echo "<br>";
readfile("logo.png");//isko text ki tarah interpret krke jibrish print krega

?>