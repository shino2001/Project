<?php
include('../config.php');
session_start();
if(!isset($_SESSION["email"])) 
{
    header("Location:../user-login.php");
}
$var = $_SESSION['email'];

$id=$_GET["d_id"];
 
$sq="select * from tbl_login where email='$var'";
$data=(mysqli_query($con,$sq));
if($row=mysqli_fetch_assoc($data))
{
$regid=$row['l_id'];
$result=mysqli_query($con,"DELETE FROM `tbl_c_packages` WHERE `p_id`='$id' AND `u_id`='$regid'");

header("location:pack.php");
}
?>