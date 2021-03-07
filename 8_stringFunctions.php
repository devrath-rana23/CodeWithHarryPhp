<?php 
//humare browser mein HTML pARSER lga hota hai jo kisi bhi text ko html ki tarah lega
$name = "DEVRATH is my name is.";
echo "The length is " . strlen($name) . " of our string";
echo "<br>";
echo str_word_count($name);//sentence mein kitne words hai count krega not "." or "," only words
echo "<br>";
echo strrev($name);//reverse the string
echo "<br>";
echo strpos($name,"is");//position of pehla is in sentence kha hoga woh number return hoga ;; ye use ho skta hai ye find krne ke liye ki koi substring ya word given string ya sentence mein present hai ya nhi aur agar hai toh uski first occurence kb hai
echo "<br>";
echo str_replace("DEVRATH", "Manny", $name);
echo "<br>";
echo str_repeat($name, 4);
echo "<br>";
// echo trim("<pre>     this is a good boy </pre>");//pre tag isse as it is dikhayega trim kaam hii nhi krega aur html mein jo whitespaces apne aap parse hoki hati hoti hai woh pre ke waja se kitni bhi whitespaces hoo usse ek hii manwata hai isliye hum pre use krte
echo("<pre>");
echo trim("    this is a good boy    ");//dono end se whitespaces remove krdega
echo("</pre>");
echo "<br>";
echo("<pre>    this is a good boy    .   </pre>");//pre ke wajah se whitespaces dikhegi
echo "<br>";
echo "    this is a good boy    .     ";//ismein html parsing hone pe whitespace hata dega
echo("<pre>");
echo trim("    this is a good boy    ");//dono end se whitespaces remove krdega
echo("</pre>");
echo "<br>";
echo("<pre>");
echo rtrim("    this is a good boy    ");//right end se whitespaces remove krdega
echo("</pre>");
echo "<br>";
echo("<pre>");
echo ltrim("    this is a good boy    ");//left end se whitespaces remove krdega
echo("</pre>");
echo "<br>";


?>