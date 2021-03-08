<?php
// Connecting to the Database
$servername = "localhost";
$username = "root";
$password = "root";
$database = "dbharry";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    echo "Connection was successful<br>";
}

$sql = "SELECT * FROM `phptrip`";
$result = mysqli_query($conn, $sql);

// Find the number of records returned
$num = mysqli_num_rows($result);
echo $num;
echo " records found in the DataBase<br>";
// Display the rows returned by the sql query
if($num> 0){
    //mysqli_fetch_assoc($result)--Hume one by ONE RECORD FETCH KRKE DETA HAI TBTK JBTK RECORD KHATAM NHI HOO JATE DATABASE MEIN. ISLIYE ISSE BAAR BAAR LIKHNE SE ACCHA ISSE WHILE LOOP MEIN DAAL DO TB YE JITNA BHI DATA FETCH KRNA HOGA APNE AAP HII YE SAARA FETCH KRLEGA EK SAATH HUME BAAR BAAR FUNCTION CALL KRNE KI JARURAT NHI NHI HAR NEXT RECORD KO CALL KRNE KE LIYE YE FUNCTION CHLANA PDTA HAI  ismein assoc KA MATLAB HAI ASSOCIATIVE ARRAY

    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";
    // $row = mysqli_fetch_assoc($result);
    // echo var_dump($row);
    // echo "<br>";

    // We can fetch in a better way using the while loop
    while($row = mysqli_fetch_assoc($result)){//ye tb tk true hoga jbtk mysqli_fetch_assoc($result) NULL return nhi krega aur mysqli_fetch_assoc($result) har baar call hone pe agle record ko fetch krta hai purane wale ko baar baar nhi
        // echo var_dump($row);
        echo $row['sno'] .  ". Hello ". $row['name'] ." Welcome to ". $row['dest'];
        echo "<br>";
    }


}
?>
