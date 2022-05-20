

<?php

$name = $_POST["name"];
$email = $_POST["email"];
$number = $_POST["number"];
$message = $_POST["message"];
$exp = $_POST["exp"];

#file name with a random number so that similar dont get replaced
$pname = rand(1000,10000)."-".$_FILES["attach"]["name"];
 
#temporary file name to store file
$tname = $_FILES["attach"]["tmp_name"];

$to="sskjha2016@gmail.com";
$enquiry="form submission";
$msg="Name:".$name."\n"."email:".$email."\n"."phone number:".$number."\n"."Expertise:".$exp."\n"."wrote the following message:"."\n".$message."\n"."Resume:".$tname;
$header="from:".$email;
if(mail($to, $enquiry, $msg, $header))
{
    include "assets/inc/header.php";
    include "assets/inc/thankyouresume.php";
    include "assets/inc/footer.php";
    echo "<script>setTimeout(\"location.href='index.php';\",3000);</script>";
}
else{
    echo "Submission Failed! Try again later.";
    echo "<script>setTimeout(\"location.href='index.php';\",3000);</script>";
}



?>



