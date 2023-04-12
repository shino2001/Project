<?php
include('../config.php');
session_start();
if(!isset($_SESSION["email"])) 
{
    header("Location:../user-login.php");
}
// $var = $_SESSION['email'];
 
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
                    <a href="index.php"  >
                        <span class="icon icon-1"><i class="ri-layout-grid-line"></i></span>
                        <span class="sidebar--item">Admin Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="addproduct.php">
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
                        <span class="sidebar--item">Add Teacher</span>
                    </a>
                </li>
                <li>
                    <a href="viewtreatment.php">
                    <span class="icon icon-2"><i class="ri-pie-chart-box-line"></i></span>
                     <span class="sidebar--item"> Bookings</span>
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
                        <span class="sidebar--item">Manage Teacher</span>
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
        </section>
		
		<!-- CONTENT -->
		<section id="content">
			<!-- MAIN -->
			<main>
            <div class="table-data">
					<div class="order">
						<div class="head">
							<h3></h3>	
						</div>
                        <input type="submit" style="float:right;" onclick="window.location.href = 'leave.php';" value="Leaves   ">
							<span style="color: red; margin-left:55px; font-size:12px"></span>
						<table>
							<thead>
								<tr>
                                <th> &nbsp;&nbsp; sl no.</th>
									<th>Name</th>
									<th>Type</th>
									<th>From Date</th>
									<th>To Date</th>
                                    <th>Description</th>
									<th>Manage</th>
									<th>&nbsp; &nbsp;  &nbsp; Status</th>
								</tr>
							</thead>
							<tbody>
                            <?php
                                $d=1;
                                
		
		 				   $query="SELECT * FROM tbl_leave where status='Pending'";
                                            $data = mysqli_query($con,$query);
                                            while($res=mysqli_fetch_assoc($data))
                                            {
                                                $lid = $res['lv_id'];
                                                $uid = $res['l_id'];
                                                $type= $res['type'];
                                                $fdate=$res['fdate'];
                                                $tdate=$res['tdate'];
                                                $reson=$res['reason'];
                                                $status=$res['status'];
                                                $query1="SELECT * FROM tbl_doctor where l_id = '$uid' ";
                                                $data1= mysqli_query($con,$query1);
                                                while($res1=mysqli_fetch_assoc($data1))
                                                {
                                                       
                                                        $name = $res1['d_name'];
                                                }
                                             
                                                
							?>   
							<tr>
                            <td><?php echo $d++;?></td>
								<td><?php echo $name;?></td>
								<td><?php echo  $type ; ?></td>
                                <td><?php echo  $fdate ; ?></td>
                                <td><?php echo  $tdate ; ?></td>
                                <td><?php echo  $reson ; ?></td>
                                <td><?php echo  $type ; ?></td>
                                <td><a href="lvaprove.php?aa=<?php echo $lid;?>"><input type="button" value="Approve">
                                <td><a href="lvreject.php?aa=<?php echo $lid;?>"><input type="button" value="Reject">
                                <!-- <td><a href="dinactive.php?aa=<//?php echo $res['l_id'];?>"><input type="button" value="Inactive"> -->
                                       
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

<script type="text/javascript">
function validate()
{  
 
if(document.getElementById('name').value.length==0 || 
document.getElementById('day').value.length==0 || 
document.getElementById('amount').value.length==0)
{
 
return false;
}

}
  let name = document.getElementById('name');
  let span = document.getElementsByTagName('span');
  let days = document.getElementById('day');
  let amounts = document.getElementById('amount');
  
  name.onkeyup = function()
  {
  var regex = /^([\.\_a-zA-Z]+)([a-zA-Z ]+){1,30}$/;
  if(regex.test(name.value))
  {
  
  document.getElementById('mysubmit').disabled=false;

 

  }
  else
  {
 
  document.getElementById('mysubmit').disabled=true;



  }
  }
 
 days.onkeyup = function(){
   const regexn = /^[A-Za-z0-9]{1,8}$/;
   if(regexn.test(days.value))
  {
   
  document.getElementById('mysubmit').disabled=false;

}
  else
  {
 
  document.getElementById('mysubmit').disabled=true;

  }
  }


  amounts.onkeyup = function(){
   const regexn = /^[A-Za-z0-9]{1,8}$/;
   if(regexn.test(amounts.value))
  {
 
  document.getElementById('mysubmit').disabled=false;


}
  else
  {
 
  document.getElementById('mysubmit').disabled=true;


  }
  }

</script>
