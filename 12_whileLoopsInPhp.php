<?php
//While loop tb use krenge jb multiple updations hori hoo kisi entry ki code mein toh for loop can be confusing so while loop use krro aur single updation ke liye for loop is sufficient
echo "while loops in php";echo"<br>";
// echo 1;echo"<br>";
// echo 2;echo "<br>";
// echo 3;echo "<br>";
// echo 4;echo "<br>";
// echo 5;echo "<br>";

/* 
while (condition){
    some lines of code here;
}
*/

$i = 0; 
while($i<5){
    echo "The value of i is ".($i+1)."<br>";
    $i+=1; 
} 
?>
