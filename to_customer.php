<?php





$name1= $_POST['name1'];
$email1= $_POST['email1'];
$phone1= $_POST['phone1'];
$city1= $_POST['city1'];
$header1="From msmedost.com";
$message1= "Thank you for contacting us. Our team will call you back in sometime.";

$to="sskjha2016@gmail.com";
$enquiry="Requested for a call from msmedost.com";
$msg="Name:         ".$name1."\n"."Phone no.:        ".$phone1."\n"."city:         ".$city1;
$header="from:".$email1;
if(mail($email1, " For Requesting a call from msmedost.com", $message1, $header1))
{
    include "assets/inc/header.php";
    include "assets/inc/thankyoucontact.php";
    include "assets/inc/footer.php";
    echo "<script>setTimeout(\"location.href='index.php';\",3000);</script>";
    
}
else{
    echo "Submission Failed! Try again later.";
    echo "<script>setTimeout(\"location.href='index.php';\",3000);</script>";
}
if(mail($to, $enquiry, $msg, $header))
{
    echo "Message sent to the team!";
    
}
else{
    echo "Submission Failed! Try again later.";
}

?>





