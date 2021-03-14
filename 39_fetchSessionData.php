<?php

//start the session and get the data
session_start();
if(isset($_SESSION['username']) && isset($_SESSION['favCat'])){
    echo "Welcome". $_SESSION['username'];
    echo "<br> Your cat name is". $_SESSION['favCat'];
    echo "<br>";
}
else{

    echo "No data to display";
}
?>