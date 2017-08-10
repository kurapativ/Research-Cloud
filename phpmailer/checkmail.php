<?php
$to='chundruravikanth@gmail.com';

// Your subject
$subject="Your confirmation link here";

// From
$header="admin<admin@mvrbikerentals.in>";

// Your message
$message="Your Comfirmation link \r\n";
$message.="Click on this link to activate your account \r\n";
$message.="http://www.mvrbikerentals.in/confirmation.php?passkey=abcd";

// send email
$sentmail = mail($to,$subject,$message,$header);
}


// if your email succesfully sent
if($sentmail){
echo "Your Confirmation link Has Been Sent To Your Email Address.";
}
else {
echo "Cannot send Confirmation link to your e-mail address";
}
?>
    ?>