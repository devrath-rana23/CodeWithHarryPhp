<?php
    class Employee{
        // Properties of our Class
        public $name;
        public $salary;

        // Methods of Our Class
        // Constructor - It allows you to initialize objects. It is the code which is executed whenever a new object is instantiated.

        // Constructor without parameters
        // function __construct(){
        //     echo "This is my constructor for employee";
        // }

        //instead of baar baar set name aur get name ke alag alag methods bnane se accha aap construct mein hii cheeze initialize krdo taki jaise hii object instantiate hua ya new object instance create kiya tbhi uski constructor mein defined properties set hoo jye aur baar baar humein define alag class ke help se woh fields set nhi krne ki jarurat pade
        //Constructor aisa function jo har object ke banne pe chlta hai
        // Constructor with parameters
        function __construct($name1, $salary1){
            $this->name = $name1;
            $this->salary = $salary1;

        }

    }

    $rohan = new Employee("Rohan", 73000);
    $harry = new Employee("Harry", 10000);
    $skillF = new Employee("SkillF", 56000); 

    echo "The salary of harry is $harry->salary <br>";
    echo "The salary of skillF is $skillF->salary";
?>