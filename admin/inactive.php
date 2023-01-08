<?php
include('../config.php');
$y=$_GET['aa'];
$sql="update tbl_login  set status=1 where l_id='$y'";
$sql1="update tbl_patient  set status=1 where l_id='$y'";
$sql2="update tbl_doctor  set status=1 where l_id='$y'";
mysqli_query($con,$sql);
mysqli_query($con,$sql1);
mysqli_query($con,$sql2);
header('location:index.php');
?>
