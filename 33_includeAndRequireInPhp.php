<?php
/*Both will include this file in this location jisse baar baar code likhne ki jarurat nhi
difference-
jb hum non existing file ko include krenge toh woh warning dega aur code effect nhi hoga 
pr agar hum non existing file ko require krenge toh error phaikega aur aage code execute nhi hoga

TOH YHI MAIN DIFFERENCE HAI KI FILE mein error hai toh include aapko allow krdega aage code excute krne ko pr require nhi krega
*/
// include '_dbconnect.php';
require '_dbconnect.php';
// echo "hello";
$sql = 'SELECT * FROM `phptrip`';
$result = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result)){
    echo $row['name'];//ismein agar $row ke jagah $result dete toh khali ek value display hoti loop nhi krta
}


?>