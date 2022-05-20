<?php

$name= $_POST['name'];

$phone= $_POST['phone'];

$message= $_POST['message'];

$to="shivam12shaw@gmail.com";
$enquiry="contact form submission of MSMEDost";
$msg="Name:".$name."\n"."phone:".$phone."\n"."wrote the following:".$message;
if(mail($to, $enquiry, $msg))
{
    include "assets/inc/header.php";
    include "assets/inc/thankyoucontact.php";
    include "assets/inc/footer.php";
    echo "<script>setTimeout(\"location.href='index.php';\",3000);</script>";
}
else{
    echo "submission failed";
    echo "<script>setTimeout(\"location.href='index.php';\",3000);</script>";
}

?>
