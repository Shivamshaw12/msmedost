<?php

include 'connection.php';

$id = $_GET['id'];

$q = " DELETE FROM `celebration` WHERE id = $id ";

mysqli_query($con, $q);

header('location:dashboard.php');

?>