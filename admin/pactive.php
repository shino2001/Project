<?php
include('../config.php');
$y=$_GET['p_id'];
$sql="update tbl_packages  set p_status=0 where p_id='$y'";
mysqli_query($con,$sql);
header('location:manage_product.php');
?>
