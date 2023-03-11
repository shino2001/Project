<?php
include('../config.php');
session_start();
if(!isset($_SESSION["email"])) 
{
    header("Location:../user-login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>







  <title>Admin</title>

  <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
   
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([

 ['Course','Fees'],
 <?php 
      $query = "SELECT p_name, p_amount FROM tbl_packages";

       $exec = mysqli_query($con,$query);
       while($row = mysqli_fetch_array($exec)){

       echo "['".$row['p_name']."',".$row['p_amount']."],";
       }
       ?> 
 
 ]);

 var options = {
 title: 'Course and its fees',
  pieHole: 0,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
 };
 var chart = new google.visualization.BarChart(document.getElementById("columnchart12"));
 chart.draw(data,options);
 }
  
    </script>
    
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
                        <a  href="index.php" id="#">
                            <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                            <span class="sidebar--item">Admin Dashboard</span>
                        </a>
                    </li>
                    <li>
                    <a href="addproduct.php">
                            <span class="icon icon-2"><i class="ri-pie-chart-box-line"></i></span>
                            <span class="sidebar--item">Manage Courses</span>
                        </a>
                    </li>
                    <li>
                    <a href="viewpatients.php" >
                            <span class="icon icon-3"><i class="ri-user-line"></i></span>
                            <span class="sidebar--item" style="white-space: nowrap;">Users</span>

                        </a>
                    </li>



                    <li>
                    <a href="viewdoctors.php">
                            <span class="icon icon-4"><i class="ri-user-2-line"></i></span>
                            <span class="sidebar--item">Teachers List</span>
                        </a>
                    </li>
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
                    <a href="manage_drleave.php">
                            <span class="icon icon-6"><i class="ri-map-pin-user-line"></i></span>
                            <span class="sidebar--item">Manage Teachers Leave</span>
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
                        <a href="vw_fdbck.php" id="active--link">
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
  
    </section>
	<!-- CONTENT -->
		<section id="content">
			<!-- MAIN -->
			<main>
				        
				
				<div class="table-data">
					<div class="order">
						<div class="head">
							<h3>Statitics</h3>
						</div>
                        <div class="container-fluid">
 <div id="columnchart12" style="width: 100%; height: 500px;"></div>
 </div>  

			</main>
		</section>
	 	<script src="js/script.js"></script>
	</body>
</html>
