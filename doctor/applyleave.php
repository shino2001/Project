<?php
require '../config.php';
require '../db/session.contr.cls.php';
$sessObj = new SessionManageCls();
if ($sessObj->isLogged() == true) {
    $user_data = $sessObj->getSessionData();
    $var = $user_data['email'];
    if (isset($_POST["submit"])) {
        $type = $_POST['res'];
        $fromdate = $_POST['fdate'];
        $todate = $_POST['tdate'];
        $des = $_POST['reason'];
        $sql = "SELECT * FROM `tbl_login` WHERE `email`= '$var'";
        $data = mysqli_query($con, $sql);
        if ($row = mysqli_fetch_array($data)) {
            $lid = $row['l_id'];
        }

        $s = mysqli_query($con, "INSERT INTO `tbl_leave`(`l_id`,`type`,`fdate`,`tdate`,`reason`) VALUES ('" . $user_data['log_id'] . "','$type','$fromdate','$todate','$des')");
        if ($s) {
            echo "<script>  
       
       alert('Leave Applied');
           
           window.location.href='applyleave.php';
       
     
       </script>";
        } else {
            echo "<script>  
       
            alert('Failed to apply leave');
                
                window.location.href='applyleave.php';
            
          
            </script>";
        }
    }
    require 'header.php';

?>
    <!-- content -->

    <div class="overview">
        <div class="row mt-5">
            <div class="col-md-12">
                <h2 style="color: #9f8e64;">APPLY LEAVE</h2><br>

                <form method="POST" action="applyleave.php" enctype="multipart/form-data">
                    <div class="form-group col-12 mt-2">
                        <label class="form-label text-dark">Leave Date (From):</label><br>
                        <input type="date" id="date" class="form-control" name="fdate" min="<?php echo date('Y-m-d'); ?>" required>
                    </div>
                    <div class="form-group col-12">
                        <label class="form-label text-dark">Leave Date (To):</label><br>
                        <input type="date" class="form-control" id="date" name="tdate" min="<?php echo date('Y-m-d'); ?>">
                    </div>

                    <div class="form-group col-12">
                        <label class="form-label text-dark">Select Leave Type :</label><br>
                        <select name="res" class="form-control" id="res" required>
                            <option class="form-check-input" disabled>Please Select</option>
                            <option value="Sick" name="res">Sick</option>
                            <option value=" Casual" name="res">Casual</option>
                            <option value="Climatic Disaster " name="res">Climatic Disaster</option>
                            <option value=" Family Functions" name="res ">Family Functions</option>
                            <option value=" Family Functions" name="res ">Long Leave</option>
                            <option value="Others" name="res">Others</option>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label class="form-label text-dark">Description:</label><br>
                        <input type="text" class="form-control" id="reason" name="reason" placeholder="Reason" required>
                    </div>
                    <div class="form-group col-12">
                        <span style="color: red; margin-left:50px; font-size:12px"></span><br>
                        <input type="submit" name="submit" id="mysubmit" value="Submit">
                        <span style="color: red; margin-left:250px; font-size:12px"></span><br>
                    </div>

                </form>
            </div>
        </div>
    </div>
    <!-- content end -->
<?php
    require 'footer.php';
} else {
    header("Location:../user-login.php");
}
?>

<style>
      input[type=submit] {
	background-color: #9f8e64;
	color: white;
	padding: 6px 8px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
  }
</style>