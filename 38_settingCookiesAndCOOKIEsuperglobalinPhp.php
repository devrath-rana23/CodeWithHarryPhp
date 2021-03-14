<?php
/*Maanlo ecommerce waali site hai usmein hume koi samaan pasand aata hai toh cookies ke madad se woh humari preferences save krke usse agli baar ussi tarah ka content dikhati hai */

// Cookie ek choti sii script hoti hai jo user ke computer mein store krke rkhti hai 

//cookies browser mein store hota hai not for sensitive data storage and session server mein store hota hai for sensitive details storage
/*Cookies ka syntax */
setcookie('category', 'Books', time()+86400, '/');/*"/" ka matlab hai poore website app ke liye ye cookie set hogyi hai toh ab mein iske dusre file ko bhi agar browser mein search krru aur console mein network section mein check krre details toh usmein cookies wali field mein ye show hoga*/
echo "The cookie is set";
?>