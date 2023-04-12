<?php
include('../config.php');
session_start();
if(!isset($_SESSION["email"])) 
{
    header("Location:../user-login.php");
}
$id=$_GET["edit_id"];
//echo "$id";

$edit=mysqli_query($con, "SELECT * FROM `tbl_packages` WHERE `p_id`='$id'");
$row=mysqli_fetch_array($edit);

if (isset($_POST["submit"]))
{
    $name=$_POST["name"];
    $day=$_POST["day"];
    $amount=$_POST["amount"];
	 
	if($_FILES["image"]["tmp_name"]!="")
		$i=$_FILES["image"]["name"];//2d array type inst of name return type size
	//print_r($_FILES);exit;
	else
		$i=$row['p_image'];
	move_uploaded_file($_FILES["image"]["tmp_name"],"../images/".$_FILES["image"]["name"]);
  mysqli_query($con,"UPDATE `tbl_packages` SET `p_name`='$name',
  `p_image`='$i',`days`='$day',`p_amount`='$amount'
    WHERE `p_id`='$id';");
  header("location:addproduct.php");
 }

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <title>Admin</title>

  
    
</head>

<body>
    <section class="header">
        <div class="logo">
            <i class="ri-menu-line icon icon-0 menu"></i>
            <h2>Sim<span>ply</span></h2>
        </div>
   
    </section>
    <section class="main">
        <div class="sidebar">
            <ul class="sidebar--items">
                <li>
                    <a href="index.php" >
                        <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                        <span class="sidebar--item">Admin Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="addproduct.php"  id="active--link">
                        <span class="icon icon-2"><i class="ri-pie-chart-box-line"></i></span>
                        <span class="sidebar--item">Courses</span>
                    </a>
                </li>
                <li>
                <a href="viewpatients.php">
                        <span class="icon icon-3"><i class="ri-user-line"></i></span>
                        <span class="sidebar--item" style="white-space: nowrap;">Users</span>

                    </a>
                </li>
                <li>
                    <a href="adddoc.php">
                        <span class="icon icon-4"><i class="ri-user-add-line"></i></span>
                        <span class="sidebar--item">Add Teachers</span>
                    </a>
                </li>
                <li>
                    <a href="schedule">
                        <span class="icon icon-2"><i class="ri-pie-chart-box-line"></i></span>
                        <span class="sidebar--item">Academic Calendar</span>
                    </a>
</li>

<li>
                    <a href="viewtreatment.php">
                    <span class="icon icon-2"><i class="ri-pie-chart-box-line"></i></span>
                     <span class="sidebar--item"> Bookings</span>
                   </a>
                </li>
                


                 <li>
                    <a href="viewdoctors.php">
                        <span class="icon icon-4"><i class="ri-user-2-line"></i></span>
                        <span class="sidebar--item">Teachers List</span>
                    </a>
                </li>
                
            
                <li>
                    <a href="manage_drleave.php">
                        <span class="icon icon-6"><i class="ri-map-pin-user-line"></i></span>
                        <span class="sidebar--item">Manage Teacher's Leave</span>
                    </a>
                </li>
                <li>
                    <a href="removedoctor.php">
                    <span class="icon icon-4"><i class="ri-user-line"></i></span>
                        <span class="sidebar--item">Manage Teachers</span>
                    </a>
                </li>
                <li>
                    <a href="id">
                        <span class="icon icon-2"><i class="ri-pie-chart-box-line"></i></span>
                        <span class="sidebar--item">Employee Id card</span>
                    </a>
                </li>
                <li>
                    <a href="report.php">
                        <span class="icon icon-6"><i class="ri-feedback-fill"></i></span>
                        <span class="sidebar--item">Course report</span>
                    </a>
                </li>
                <li>
                    <a href="vw_fdbck.php">
                        <span class="icon icon-6"><i class="ri-feedback-fill"></i></span>
                        <span class="sidebar--item">Feedbacks</span>
                    </a>
                </li>
            </ul>
            <ul class="sidebar--bottom-items">
               
                <li>
                    <a href="../logout.php">
                        <span class="icon icon-8"><i class="ri-logout-box-r-line"></i></span>
                        <span class="sidebar--item">Logout</span>
                    </a>
                </li>
            </ul>
        </div>



        <div class="main--content">
            
            
            


        <main>
				<table>
            	    <div class="container">
					  <h2 style="color: #9f8e64;">EDIT COURSES</h2>
  						<form method="POST" action="#" enctype="multipart/form-data"> 
  							<label>Course Name:</label>
	    					<input type="text" id="name" name="name" value="<?php echo $row["p_name"];?> ">
							<label>Image:</label><br>
    						 
                            <img src="../images/<?php echo $row["p_image"]?>" height="100" width="100"/>
							<input type="file" name="image" value="images/<?php echo $row["p_image"]?>" >
							<br><br>
   							<label>Days:</label>
    						<input type="text" id="day" name="day" value="<?php echo $row["days"];?> ">
							<label>Amount:</label>
							<input type="text" id="amount" name="amount" value="<?php echo $row["p_amount"];?> ">
    						<input type="submit"name="submit" value="Submit">
  						</form>
					</div>
				</table>
			</main>

           
        </div>

    </section>

    

    <script src="assets/js/main.js"></script>



</body>

</html>