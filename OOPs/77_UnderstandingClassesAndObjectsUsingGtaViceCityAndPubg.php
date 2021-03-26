<?php
//class is like a template jaise humare report card ka template jismein marks field chodke sb cheez print hoti hai aur teacher uski xerox krake har bacche ke marks aur detail bharta hai
class Player {
    //Player mein kya kya hota hai
    // Properties varables ko kehte hai class mein
    public $name;//name of the player
    public $speed = 5;//kitne speed se run krega yha capture hoga aur iski by default value 5 set krdi
    public $running = false;//jb bhi game chalu hota hai toh player by default toh bhagta nhi

    // Methods
    function set_name($name){//ye method player ka name set krra hai
        //$this ka matlab hai yaha; yaha accha insaan hai, yaha bura insaan hai
        // $this ek tareeka hai uss object ko refer krne ke liye jiske liye hum set_name method run krre
        $this->name = $name;//$this yha pe player class se jo bhi nya object crete hoga usse represent krra uss object ki name field ko $name assign krre yha; $this ke madad se aap player class ke har field ya propertyy an method ya function ko access kr skte hoo
    }
    
    function get_name(){
        return $this->name;//$this mein class ki sari fields aur methods milti hai toh aap $this->name arrow name se aap name field ki stored value ko access krke return krare 
    }

    function run(){
        $this->running = true;
    }

    function stopRun(){
        $this->running = false;
    }
}

echo "Lets understand OOPs Using GTA Vice City <br>";
$player1 = new Player();
$player1->set_name("Harry");//object data ko persist krke rkhte hai jaise harry bnaya player1 toh player1 ka name harry sstore ho jyega
echo $player1->get_name();
echo "<br>";
echo $player1->speed;
echo "<br>";

$player2 = new Player();
$player2->set_name("Rohan");
echo $player2->get_name();
echo "<br>";

$player3 = new Player();
$player3->set_name("SkillF");
echo $player3->get_name();
echo "<br>";


?>