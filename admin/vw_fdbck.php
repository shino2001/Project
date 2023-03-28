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
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>







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
                    <a href="spms">
                        <span class="icon icon-4"><i class="ri-user-2-line"></i></span>
                        <span class="sidebar--item">Teacher Payroll</span>
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
							<h3>Feedback</h3>
						</div>
                        
<?php
 $sql = "SELECT feedback FROM tbl_feedback";
$resul = $con->query($sql);

if ($resul->num_rows > 0) {
    $texts = array();
    while ($row = $resul->fetch_assoc()) {
        $texts[] = $row["feedback"];
    }
    $url = 'http://127.0.0.1:5000/sentiment';
    $data = json_encode(array('texts' => $texts));
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/json\r\n",
            'method'  => 'POST',
            'content' => $data,
        ),
    );
    $context  = stream_context_create($options);
    $resul = file_get_contents($url, false, $context);
    $resul = json_decode($resul, true);
  
    $positive = $resul['positive'];
    $negative = $resul['negative'];
    $neutral = $resul['neutral'];
    $total = $positive + $negative + $neutral;
  
    $pos_percent = ($positive / $total) * 100;
    $neg_percent = ($negative / $total) * 100;
    $neu_percent = ($neutral / $total) * 100;
    $pos_accuracy = ($pos_percent >( $neu_percent+$neg_percent)) ? $pos_percent : (100 -( $neu_percent+$neg_percent));
      $neg_accuracy = ($neg_percent > ($neu_percent+$pos_percent)) ? $neg_percent : (100 - ($neu_percent+$pos_percent));
    $neutral_accuracy = ($neu_percent > ($pos_percent + $neg_percent)) ? $neu_percent : (100 - ($pos_percent + $neg_percent));
  
   } else {
    echo "No comments.";
    $pos_percent = 0;
    $neg_percent = 0;
    $neu_percent=0;
    $neu_percent = 0;
    $pos_accuracy = 0;
    $neg_accuracy = 0;
    $neu_accuracy = 0;
    $neutral_accuracy=0;
  }
  ?>
  <div class="container-fluid">        
      <!-- <h1>Sentiment Analysis </h1> -->
      <div class="chart-container" style="margin-left:10%; width: 90%;
    height: 90%;">
          <canvas id="sentiment-chart"></canvas>
      </div>
      <div>
      <p>Positive: <?php echo $pos_accuracy; ?>%</p>
      <p>Negative: <?php echo $neg_accuracy; ?>%</p>
      <p>Neutral: <?php echo $neutral_accuracy; ?>%</p>
  </div>
  </div>
  
      <script>
          var ctx = document.getElementById('sentiment-chart').getContext('2d');
          var chart = new Chart(ctx, {
              type: 'bar',
              data: {
                  labels: ['Positive', 'Negative', 'Neutral'],
                  datasets: [{
                      label: 'Sentiment Analysis percentage',
                      data: [<?php echo $pos_percent; ?>, <?php echo $neg_percent; ?>, <?php echo $neu_percent; ?>],
                      backgroundColor: [
                          'rgba(75, 192, 192, 0.2)',
                          'rgba(255, 99, 132, 0.2)',
                          'rgba(54, 162, 235, 0.2)'
                      ],
                      borderColor: [
                          'rgba(75, 192, 192, 1)',
                          'rgba(255, 99, 132, 1)',
                          'rgba(54, 162, 235, 1)'
                      ],
                      borderWidth: 1,
                    
                  }]
              },
              
              options: {
                  scales: {
                      y: {
                          beginAtZero: true,
                          ticks: {
                              stepSize: 10,
                              max: 100
                          }
                      }
                  }
              }
          });
      </script>
  
  
  
  
  
  
  

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
