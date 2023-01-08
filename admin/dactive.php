<?php
include('../config.php');
$y=$_GET['bb'];

$sql="update tbl_login  set status=0 where l_id='$y'";
$sql2="update tbl_doctor  set status=0 where l_id='$y'";
mysqli_query($con,$sql);
mysqli_query($con,$sql2);

header('location:removedoctor.php');
?>

