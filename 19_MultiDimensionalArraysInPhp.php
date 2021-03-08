<?php

echo "Welcome to multi dimensional arrays in php <br>";
//Hum jaan skte hai kitni dimensions hai kisi array kii by checking the number of keys required to access any particular data in that array
//Multi Dimensional Array--> Array within an array

// Creating a 2 dimensional array
$multiDim = array(array(2,5,7,8),
                  array(1,2,3,1),
                  array(4,5,0,1));


// echo var_dump($multiDim);
// echo $multiDim[1][2];

// Printing the contents of a 2 dimensional array

// for ($i=0; $i < count($multiDim); $i++) { 
//     echo var_dump($multiDim[$i]);
//     echo "<br>";
// }

for ($i=0; $i < count($multiDim); $i++) { 
    for ($j=0; $j < count($multiDim[$i]); $j++) { //count($multiDim[$i]) ka matlab hai ki humare paas jo main array ken andar wala array hai uski andar kitne values hai wahi count hoga
        echo $multiDim[$i][$j];
        echo " ";
    }
    echo "<br>";
}
