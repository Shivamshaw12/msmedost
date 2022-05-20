<?php

$username= $_POST['username'];

$password= $_POST['pass'];


if($username=="admin" && $password=="admin")
{
    include "dashboard.php";
    
    
}
else{
    echo("wrong username or password");
    echo "<script>setTimeout(\"location.href='index.php';\",3000);</script>";
}



?>
    
