<?php
    class Employee{
        // Properties of our Class
        public $name;
        public $salary; 

        // Constructor
        function __construct($name1, $salary1){
            $this->name = $name1;
            $this->salary = $salary1;
        }

        // Destructor -jitne baar object instantiate hoga utne baar construct chlega uske baad jb puri php script end hoo jyegi tb jitne baar object create hua hai utne hii baar destructor chlega jo pure code ke khatam hone ke baad saare object ko destruct ya khatam ya destroy krdega
        function __destruct(){//jo object sbse last mein create hua woh sbse pehle destruct hoga;ismein woh kaam krra skte hoo jo aap code ke end hote hii automatically krana chahte hoo
            echo "I am destructing $this->name <br>";//$this->name se aap dekh skte hoo kaunsa object destruct hora pehle
        }
    }

    $rohan = new Employee("Rohan", 73000);
    $harry = new Employee("Harry", 10000);
    $skillF = new Employee("SkillF", 56000); 

    echo "The salary of harry is $harry->salary <br>";
    echo "The salary of skillF is $skillF->salary <br>";
