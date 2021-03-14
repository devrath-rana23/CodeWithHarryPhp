<?php
/*Kya tareeka hai ki hum ek file ko read krke file pinter ko nikal ske puuri file se */

$fptr =fopen("myFile.txt","r");//r-read mode ;fopen() mein pehla perimeter file name aur dusra mode name jiss mode mein aap file ko open krna chahte hoo
echo var_dump($fptr);//ye humein resource id dega yhi file pointer hai isse humnein khali file ko point kraya hai ab usse read krna padega; fopen() true hone pe file pe point krega nhi toh false return krega
echo "<br>";
if(!$fptr){
    echo "File Not Found";die;
}
$content = fread($fptr, filesize("myFile.txt"));//ye jispein file pointer point krega toh file pointer ko pehla perimeter aur jitna length of characters print krana hai woh dusra perimeter lekar file ka content read krake display kra dega
fclose($fptr);//isse file mein jo bhi operation hoo rha close ho jyega aur memory bhi free ho jyegi toh isse use krna jaruri hai optimization ke liye; $content mein read se content aagya hai toh ab humein koi jarurat nhi file ki open rehne ki toh hum usse close krdenge
echo $content;


?>