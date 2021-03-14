<?php
echo "Welcome to the stage where we are ready to get connected to a database <br>";
/* 
Ways to connect to a MySQL Database
1. MySQLi extension can be used in procedural way or object oriented way
2. PDO Php Data Objects-> ye bahut sare databases ke saath kaam krta hai aur mysqli khali mysql database ke saath kaam krta hai Agar aap aisa code likhre jismein 10 se 15 baar database switch krre tb PDO use krre else agar aap mysql ke andar hii kaam krre then MYSQLi is best
*/
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "root";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful";
}

?>
