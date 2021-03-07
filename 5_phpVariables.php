<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
ECHO "hELLO!!";//php ke keywords case sensitive nhi hote
echo "<br>";
ecHo "hELLO!!";
echo "<br>";
echo "hELLO!!";
echo "<br>";
// Variables are case sensitive
//variables Information store krne ke liye containers hote hai
$name = "Devrath";
$income = 3000.1;//variable ka datat type alag se specify krne ki jarurat nhi

echo "This guy is $name and his income is $income <br>";//ye text ko as an html pass krega
echo "$name is a good man<br>";
echo "$name is a real gangsta<br>";
echo "$namE is a real gangsta<br>";//will not print name as variable is case sensitive 

?>
    
</body>
</html>