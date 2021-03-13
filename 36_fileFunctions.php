<?php


$fptr =fopen("myFile.txt","r");
echo var_dump($fptr);
echo "<br>";
if(!$fptr){
    echo "File Not Found";die;
}
/*fgets()


$content = fgets($fptr);//Ye file ki khali first line read krta hai 
echo "<br>";
echo $content;
//fgets() reads file line by line 
echo fgets($fptr);//issse fclose se pehle likhenge kyunki file close krne ke baad usmein kuch nhi kr skte; aur isse phir se echo krane se pehle file ki dusri line dikhegi matlab jitne baar call krenge utni hii line ek ek krr read krenge
echo "<br>";
echo var_dump(fgets($fptr));
echo "<br>";
echo var_dump(fgets($fptr));//ye false dega agar line read krne kii khatam hogi isliye hum while ke andar iss function chala skte hai jbtk false nhi mil jaata
while($a = fgets($fptr)){
    echo $a;
}

echo "END OF FILE HAS BEEN REACHED";
*/

/*fgetc()*/

/*Reading a file character by character-fgetc() */
// while($a = fgetc($fptr)){//isse ye logic bn skta hai ki jbtk ye character nhi milega loop end mat krro
//     echo $a;
//     break;
// }
// fclose($fptr);

//Write a program which reads the content of a file until "." has been encountered

while($a = fgetc($fptr)){//filepointer update hota rehta hai
    echo $a;
    if($a=== "."){
        break;
    }
}
fclose($fptr);
?>
