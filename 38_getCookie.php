<?php

// ab humnein iss project ya folder ke liye cookie set krdi hai waise hii kisi domain ya website ke liye cookies set hoo jati hai ab isse fetch krne ke liye hum global variable $_COOKIE['Key'] use krenge

$cat = $_COOKIE['category'];
echo $cat;//ab humnein user ke computer mein ye nishaan rkh diya hai jisse woh jb bhi website access krega iss cookie ke madad se hum usse pehchaan lenge
//Cookie ke madad se user ko ban bhi krr skte hai given time period ke liye jisse woh website ke particular content se ban hoo jyega
?>