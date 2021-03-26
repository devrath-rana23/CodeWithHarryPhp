<?php 
    // Access modifiers in Php
    // 1. Public - can be accessed from anywhere
    // 2. Private - can only be accessed from within the class
    // 3. Protected - can be accessed from withing the class and from derived class

    // By default the properties and methods are treated as public
    // Private properties and methods can only be accessed by other member functions of the class
//Private example- fb use krre toh humein uske internal api se matlab nhi jaise woh facial recognition ke liye jo api bnayenge hum usse access nhi krskte bhale hii hum uska filter feature use krre
    
    class Employee{

        // Generally properties ko hii private bnate hai
        private $name = "harry";//yha var keyword ke madad se btana pdta hai class ke andar ki property bnare agar koi access modifier nhi diya

        function showName(){
            echo "$this->name";
        }
    }

    $harry = new Employee();
    // echo $harry->name; -> This will not work if harry is private isse access krne ke liye aapko function ka use krna hoga $name property private hone ki wajah se khali uss class ke andar define function hii access kr skta hai uske bahar uss property ko direct access possible nhi hai
    $harry->showName();
?>