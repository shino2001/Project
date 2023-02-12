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
    <link rel="stylesheet" href="css/removedr.css">
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
                    <a href="viewdoctors.php">
                        <span class="icon icon-4"><i class="ri-user-2-line"></i></span>
                        <span class="sidebar--item">Teachers List</span>
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
                    <a href="manage_drleave.php">
                        <span class="icon icon-6"><i class="ri-map-pin-user-line"></i></span>
                        <span class="sidebar--item">Manage Teacher's Leave</span>
                    </a>
                </li>
                <li>
                    <a href="removedoctors.php" id="active--link">
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
            <div class="overview">
                <div class="title">
                
                    <!-- <div class="card-body">
                        <div class="row">
                            <div class="col-md-7" style=" display: flex; justify-content: flex-start; padding-left:20px;" >
                            <div class="search--notification--profile">
                                     <div class="search"style="margin-left: 230px;"  >
                                <form action="search.php" method="POST" >
                                    <div  class="input-group mb-3">
                                        <input style="float:right;width: 300px;padding:20px;height:10px;margin-bottom:-10px;background-color:0001"type="text" name="search" required value="
                                        <//?php if(isset($_GET['search'])){echo $_GET['search']; } ?>" class="form-control" placeholder="Search Users">
                                        // <button type="submit" class="btn btn-primary" style="border-radius:12px;padding:8px; background-color: #d0e0c1;">Search</button> -->
                                        <!-- <button type="submit" style="float:right;margin-top :-20px;margin-right:10px;" ><i class="ri-search-2-line"></i></button>
               
                                    </div>
                                </form>
                            </div> 
                            </div>
                            </div>
                        </div>
                    </div> -->

                  
                </div>
      
            </div>
            
            <div class="recent--patients">
                <div class="title">
                    <h2 class="section--title"><b>Active Teachers</b></h2>
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                                <th>sl no.</th> 
                                <th>EMAIL</th>
                                <th>Name</th>
                             
                            </tr>
                        </thead>
                        <tbody> 
                          
                          
                        <?php
                                 $d=1;
                                   
                                $query="SELECT * FROM tbl_doctor where status=0";
                                $data = mysqli_query($con,$query);
                                while($res=mysqli_fetch_assoc($data))
                                {
                                    $lid = $res['l_id'];
                                $emailval='';
                                $query1="SELECT * FROM tbl_login where l_id = '$lid' ";
                                $data1 = mysqli_query($con,$query1);
                                while($res1=mysqli_fetch_assoc($data1))
                                {
                                        $emailval = $res1['email'];
                                }
                                ?>
                                <tr>
                                    <td><?php echo $d++;?></td>
                                    <td><?php echo $emailval?></td>
                                    <td><?php echo $res['d_name'];?></td>
                                      <td><a href="dinactive.php?aa=<?php echo $res['l_id'];?>"><input type="button" value="Inactive">
                                       </tr>
                            <?php
                            }
                            ?>	
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="recent--patients">
                <div class="title">
                    <h2 class="section--title"> <b>Inactive Teachers</b> </h2>
                    
                </div>
                <div class="table">
                    <table>
                        <thead>
                            <tr>
                               <th>sl no.</th> 
                                <th>EMAIL</th>
                                <th>Name</th>
                         

                                
                            </tr>
                        </thead>
                        <tbody>
            
                            <?php
                                    $c=1;
                                
                                $query="SELECT * FROM tbl_doctor where status=1";
                                $data = mysqli_query($con,$query);
                                while($res=mysqli_fetch_assoc($data))
                                {
                                    $lid = $res['l_id'];
                                $emailval='';
                                $query1="SELECT * FROM tbl_login where l_id = '$lid' ";
                                $data1 = mysqli_query($con,$query1);
                                while($res1=mysqli_fetch_assoc($data1))
                                {
                                        $emailval = $res1['email'];
                                }
                                ?>
                                <tr>
                                    <td><?php echo $c++;?></td>
                                    <td><?php echo $emailval?></td>
                                    <td><?php echo $res['d_name'];?></td>
                                    
                                    <td>   <a href="dactive.php?bb=<?php echo $res['l_id'];?>"><input type="button" value="active"></td>
                                </tr>
                                <?php
                                }
                                ?>  
                                
                        </tbody>  
                    </table>
                </div>
            </div>
        </div>

    </section>

    

    <script src="assets/js/main.js"></script>



</body>

</html>