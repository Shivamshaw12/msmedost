<?php

$name= $_POST['name'];
$phone= $_POST['phone'];
$entity= $_POST['entity'];

$address= $_POST['address'];
$locality= $_POST['locality'];
$pincode= $_POST['pincode'];
$post_office= $_POST['post_office'];
$services= $_POST['services'];
$service_area= $_POST['service_area'];
$webiste= $_POST['website'];
$alt_phone= $_POST['alt-phone'];

$to="sskjha2016@gmail.com";
$enquiry="Partner Form Submission";
$msg="Name:         ".$name."\n"."Phone no.:        ".$phone."\n"."Alternate phone no.:         ".$alt_phone."\n"."Address:         ".$address."\n"."Locality:          ".$locality."\n"."pinode:          ".$pincode."\n"."post office:          ".$post_office."\n"."Services:         ".$services."\n"."service_areae:          ".$service_area."\n"."website:          ".$website;
$header="from:".$email;
if(mail($to, $enquiry, $msg, $header))
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


