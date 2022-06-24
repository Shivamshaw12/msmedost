<?php

$name= $_POST['name'];
$email= $_POST['email'];
$phone= $_POST['phone'];
$alt_phone= $_POST['alt-phone'];
$city_select= $_POST['city_select'];
$city= $_POST['city'];
$address= $_POST['address'];
$landmark= $_POST['landmark'];
$service_category= $_POST['service_category'];

$service_cat1= $_POST['service-cat1'];
$service_cat2= $_POST['service-cat2'];
$service_cat3= $_POST['service-cat3'];
$service_cat4= $_POST['service-cat4'];
$service_cat5= $_POST['service-cat5'];
$message= $_POST['message'];

$to="shivam12shaw@gmail.com";
$enquiry="services";
$msg="Name:         ".$name."\n"."Phone no.:        ".$phone."\n"."Alternate phone no.:         ".$alt_phone."\n"."city:         ".$city."\n"."Address:         ".$address."\n"."Landmark:          ".$landmark."\n"."Service category:         ".$service_category."\n"."Service Required:         ".$service_cat1."\n"."Service Required:         ".$service_cat2."\n"."Service Required:         ".$service_cat3."\n"."Service Required:         ".$service_cat4."\n"."Service Required:         ".$service_cat5."\n"."Special Instruction/ Message:          ".$message;
$header="from:".$email;
if(mail($to, $enquiry, $msg, $header))
{
    include "assets/inc/header.php";
    include "assets/inc/thankyoucontact.php";
    include "assets/inc/footer.php";
    echo "<script>setTimeout(\"location.href='index.php';\",3000);</script>";
    
}
else{
    echo "Submission Failed! Try again later.";
    
}



?>
