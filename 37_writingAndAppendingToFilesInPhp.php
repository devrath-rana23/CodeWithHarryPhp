<?php
/**WRITE MODE MEIN OVERwRITING Hoti hai*/
/*write mode mein jo bhi file hogi woh code run krne pe apne create hogi*/
$fptr = fopen("myFile2.txt", 'w');//isse nyi khali file bnayega aur agar fwrite comment krke run kroge toh ye command phir se ye name ki khali file create krr purani ko override krdega
fwrite($fptr,"This is content!");//isse kitne baar bhir run krro ye yhi write krega ek baar ye purane ka baar baar override krdega
fwrite($fptr,"This is conten111t!");//isse kitne baar bhir run krro ye yhi write krega ek baar 
fwrite($fptr,"This is conten111t!");//isse kitne baar bhir run krro ye yhi write krega ek baar ; agar jyada baar write krana hai toh loop chala do, aur end condition tk same string write hogi

fclose($fptr);

/*Appending in file ke aant mein add krna*/
//maanlo koi log file hai usmein aapko kuch add krna hai toh use a-append mode
$fptr1=fopen("myFile.txt","a");
fwrite($fptr1," DEVRATH This is conten111t!");//jitne baar refresh kroge ye ye content utne baar add krega upar wale ke tarah override nhi isse bina loop ke aap multiple baar add kr skte hoo code refresh krke
fclose($fptr1);//jb php script khatam hoti hai fclose() apne aap chl jaata hai
?>