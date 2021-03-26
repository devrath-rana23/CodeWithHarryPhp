<?php
    class Employee{
        var $name;
        var $lang;
        var $salary;

        public function __construct($name, $lang, $salary){
            $this->name = $name;
            $this->lang = $lang;
            $this->salary = $salary;
            //you can access protected AND private method this way ab agar aap object create kroge ye function bhi run hoga pr agar iss bahar class ke alag se acces kroge tb nhi hoga
            $this->describe();
            $this->intro();
        }
        protected function describe(){
            echo "Name: $this->name";
            echo "language: $this->lang";
            echo "Salary: $this->salary";
        }
        private function intro(){
            echo "Hello Everyone";
        }
    }
    class Programmer extends Employee{
   
        public function __construct($name, $lang, $salary){
            $this->name = $name;
            $this->lang = $lang;
            $this->salary = $salary;
           
            $this->describe();
            // $this->intro();//ye error phaikega kyunki ye private method hai so not inherited in this class
        }
    }
    $harry = new Employee("Harry", "PHP", 20000);
    echo "<br>";
    $geeta = new Programmer("Geeta","penguin",22222);
?>