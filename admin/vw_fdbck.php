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
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <title>Admin</title>

  
    
</head>

<body>
    <section class="header">
            <div class="logo">
                <i class="ri-menu-line icon icon-0 menu"></i>
                <h2>SIM<span>PLY</span></h2>
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
                            <span class="sidebar--item">Teacher List</span>
                        </a>
                    </li>
                    <a href="adddoc.php">
                            <span class="icon icon-4"><i class="ri-user-add-line"></i></span>
                            <span class="sidebar--item">Add Teacher</span>
                        </a>
                    </li>
             
                    <li>
                    <a href="manage_drleave.php">
                            <span class="icon icon-6"><i class="ri-map-pin-user-line"></i></span>
                            <span class="sidebar--item">Manage Teacher Leave</span>
                        </a>
                    </li>
                    <li>
                    <a href="removedoctor.php">
                        <span class="icon icon-4"><i class="ri-user-line"></i></span>
                            <span class="sidebar--item">Manage Teacher</span>
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
							<h3>Feedback</h3>
						</div>
						<table>
							<thead>
								<tr>
                                <th>sl no.</th>
									<th>Name</th>
									<th>E-mail</th>
									<th>Feedback</th>
								</tr>
							</thead>
							<tbody>
							<?php
                                $d=1;
                                
		  					
		 				   $query="SELECT * FROM tbl_feedback ";
                                            $data = mysqli_query($con,$query);
                                            while($res=mysqli_fetch_assoc($data))
                                            {
                                                $uid = $res['fr_id'];
                                                $nameval='';
                                                $emailval='';
                                                $lid='';
                                                $query1="SELECT * FROM tbl_patient where user_id = '$uid' ";
                                                $data1 = mysqli_query($con,$query1);
                                                while($res1=mysqli_fetch_assoc($data1))
                                                {
                                                        $nameval = $res1['u_name'];
                                                        $lid = $res1['l_id'];
                                                }
                                                $query2="SELECT * FROM tbl_login where l_id = '$lid' ";
                                                $data2 = mysqli_query($con,$query2);
                                                while($res2=mysqli_fetch_assoc($data2))
                                                {
                                                        $emailval = $res2['email'];
                                                        
                                                }
							?>
							<tr>
                            <td><?php echo $d++;?></td>
								<td><?php echo $nameval;?></td>
								<td><?php echo  $emailval ; ?></td>
                                <td><?php echo $res['feedback'];?></td>	
							</tr>
							<?php
							}
							?>								
						   	</tbody>
					    </table>
					</div>
				</div>
			</main>
		</section>
	 	<script src="js/script.js"></script>
	</body>
</html>
