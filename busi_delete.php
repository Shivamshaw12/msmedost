<?php

include 'connection.php';

$id = $_GET['id'];

$q = " DELETE FROM `business` WHERE id = $id ";

mysqli_query($con, $q);

header('location:dashboard.php');

?>