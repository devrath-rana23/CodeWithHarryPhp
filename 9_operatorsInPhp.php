<?php
echo "<pre>                                                                               Hello   </pre>";
/*
1.Arithmetic Operators
2.Assignment Operators
3.Comparision Operators
4.Logical Operators
*/

$a = 66;
$b = 67;
/*Arithmetic Operators */
echo "For a + b, the result is ".($a + $b)."<br>";//ismein $a + $b jo hai bracket mein rkhenge nhi toh error ayega aur bracket mein rkhne se inn dona ko add krkr jo value ayegi usse baki ki string se concatenate krdenge
echo "For a - b, the result is ".($a - $b)."<br>";//ismein $a + $b jo hai bracket mein rkhenge nhi toh error ayega aur bracket mein rkhne se inn dona ko add krkr jo value ayegi usse baki ki string se concatenate krdenge
echo "For a * b, the result is ".($a * $b)."<br>";//ismein $a + $b jo hai bracket mein rkhenge nhi toh error ayega aur bracket mein rkhne se inn dona ko add krkr jo value ayegi usse baki ki string se concatenate krdenge
echo "For a / b, the result is ".($a / $b)."<br>";//ismein $a + $b jo hai bracket mein rkhenge nhi toh error ayega aur bracket mein rkhne se inn dona ko add krkr jo value ayegi usse baki ki string se concatenate krdenge
echo "For a % b, the result is ".($a % $b)."<br>";//ismein $a + $b jo hai bracket mein rkhenge nhi toh error ayega aur bracket mein rkhne se inn dona ko add krkr jo value ayegi usse baki ki string se concatenate krdenge
echo "For a ki power b, the result is ".($a ** $b)."<br>";//ismein $a + $b jo hai bracket mein rkhenge nhi toh error ayega aur bracket mein rkhne se inn dona ko add krkr jo value ayegi usse baki ki string se concatenate krdenge

/*Assignment Operator */
$x = $a;
echo "For x, the result is ".$x."<br>";//ismein $a + $b jo hai bracket mein rkhenge nhi toh error ayega aur bracket mein rkhne se inn dona ko add krkr jo value ayegi usse baki ki string se concatenate krdenge
$x += $a;
echo "For x, the result is ".$x."<br>";//ismein $a + $b jo hai bracket mein rkhenge nhi toh error ayega aur bracket mein rkhne se inn dona ko add krkr jo value ayegi usse baki ki string se concatenate krdenge
$x -= $a;
echo "For x, the result is ".$x."<br>";//ismein $a + $b jo hai bracket mein rkhenge nhi toh error ayega aur bracket mein rkhne se inn dona ko add krkr jo value ayegi usse baki ki string se concatenate krdenge
$x *= $a;
echo "For x, the result is ".$x."<br>";//ismein $a + $b jo hai bracket mein rkhenge nhi toh error ayega aur bracket mein rkhne se inn dona ko add krkr jo value ayegi usse baki ki string se concatenate krdenge
$x /= $a;
echo "For x, the result is ".$x."<br>";//ismein $a + $b jo hai bracket mein rkhenge nhi toh error ayega aur bracket mein rkhne se inn dona ko add krkr jo value ayegi usse baki ki string se concatenate krdenge
$x %= $a;
echo "For x, the result is ".$x."<br>";//ismein $a + $b jo hai bracket mein rkhenge nhi toh error ayega aur bracket mein rkhne se inn dona ko add krkr jo value ayegi usse baki ki string se concatenate krdenge

/*3.Comparision Operators*/
$x = 4;
$y = 3;
$z = 3;

echo "For x==y , the result is ".($x == $y)."<br>";//false ke liye kuch nhi return krta aur true ke liye 1 return krta hai
echo "For z==y , the result is ".($z == $y)."<br>";//false ke liye kuch nhi return krta aur true ke liye 1 return krta hai
echo "For z==y , the result is ".var_dump($z == $y)."<br>"."<br>"."<br>"."<br>";//false ke liye kuch nhi return krta aur true ke liye 1 return krta hai
echo "For z>y , the result is ".var_dump($z > $y)."<br>"."<br>"."<br>"."<br>";//false ke liye kuch nhi return krta aur true ke liye 1 return krta hai
echo "For z<y , the result is ".var_dump($z < $y)."<br>"."<br>"."<br>"."<br>";//false ke liye kuch nhi return krta aur true ke liye 1 return krta hai
echo "For x<>y HERE <> is same as !, the result is ".var_dump($x <> $y)."<br>"."<br>"."<br>"."<br>";//false ke liye kuch nhi return krta aur true ke liye 1 return krta hai
echo "Forz<>y HERE <> is same as !, the result is ".var_dump($z <> $y)."<br>"."<br>"."<br>"."<br>";//false ke liye kuch nhi return krta aur true ke liye 1 return krta hai
echo "Forz<=y HERE <> is same as !, the result is ".var_dump($z <= $y)."<br>"."<br>"."<br>"."<br>";//false ke liye kuch nhi return krta aur true ke liye 1 return krta hai

/*Logical Opertors */

$m = true;
$n = false;

echo "For m and n, the result is ";
echo var_dump($m and $n) . "<br>";
echo "For m and n, the result is ";
echo var_dump($m && $n) . "<br>";
echo "For m or n, the result is ";
echo var_dump($m or $n) . "<br>";
echo "For m or n, the result is ";
echo var_dump($m || $n) . "<br>";
echo "For !m, the result is ";
echo var_dump(!$m) . "<br>";
?>