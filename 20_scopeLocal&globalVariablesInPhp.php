<?php
echo "Welcome to scope and local/global vars in php<br>";
//Php mein global variables ka scope defined functions ke bahar hii rehta hai aur agar tumhe kisi function ke andar usse access krna ho toh "global" keyword se access kr skte hoo
$a = 98; // Global Variable
$b = 9;

function printValue(){
    // $a = 97; // Local Variable
    global $a, $b; // Give me the access to this global variable
    $a = 100;//ye global variable $a ki value ko override krdega
    $b = 1000;//ye global variable $b ki value ko override krdega
    echo "<br>The value of your variable a is $a and b is $b";
}

echo $a; 
printValue();
echo "<br>The value of your variable a is $a and b is $b";
echo "<br>";
echo "<br>".var_dump($GLOBALS)."<br>"; //ye saare global variables ko print kra dega
echo var_dump($GLOBALS["a"]);
echo var_dump($GLOBALS["b"]);

?>
