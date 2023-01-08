<?php
require '../config.php';
require '../db/session.contr.cls.php';

$sessObj = new SessionManageCls();
if ($sessObj->isLogged() == true) {
    $user_data = $sessObj->getSessionData();
    $var = $user_data['email'];
    require 'header.php';
    if (isset($_POST["mysubmit"])) {

        $feedback = $_POST["feedback"];
        $lid = "";
        $sql = "SELECT * FROM `tbl_login` WHERE `email`= '$var'";
        $data = mysqli_query($con, $sql);
        if ($row = mysqli_fetch_array($data)) {
            $lid = $row['l_id'];
        }
        $sql1 = "SELECT * FROM `tbl_patient` WHERE `l_id`= '$lid'";
        $data1 = mysqli_query($con, $sql1);
        $row1 = mysqli_fetch_array($data1);
        $id = $row1['user_id'];
        mysqli_query($con, "INSERT INTO `tbl_feedback`(`fr_id`,`feedback`)
         VALUES ('$id','$feedback')");
        if ($sql1) {
            echo "<script> alert('Your Feedback submitted'); </script>";
        }
    }
?>
    <!-- content -->

    <div class="overview">
        <div class="row mt-5">
            <div class="col-md-12">
                <form method="POST" action="" enctype="multipart/form-data" onsubmit="return validate();">
                    <?php

                    $sql = "SELECT * FROM `tbl_login` WHERE `email`= '" . $user_data['email'] . "'";
                    $data = mysqli_query($con, $sql);
                    if ($row = mysqli_fetch_array($data)) {
                        $u = $row['l_id'];
                        $n = "";

                        $sql1 = "SELECT * FROM `tbl_patient` WHERE `l_id`= '$u'";
                        $data1 = mysqli_query($con, $sql1);
                        if ($row1 = mysqli_fetch_array($data1)) {
                            $n = $row1['u_name'];
                        }
                    ?>

                    <?php
                    }
                    ?>
                    <div class="form-group col-4 mt-2">
                        <h2 style="color: #9f8e64;margin-top: 10px;margin-bottom:25px">FEEDBACK</h2>
                        <label>Name:</label>
                        <label><?php echo  $row1['u_name']; ?></label>
                        <br><label>Email:</label>
                        <label><?php echo $user_data['email'] ?></label>

                    </div>
                    <div class="form-group col-12 mt-2">
                        <label for="exampleInputEmail1">Feedback</label>
                        <textarea class="form-control" id="feedback" name="feedback" placeholder="Enter Feedback" required></textarea>
                        <span style="color: red; margin-left:55px; font-size:12px"></span>
                        <span style="color: red; margin-left:55px; font-size:12px"></span>
                    </div>
                    <div class="col-md-12">
                        <input type="submit" id="mysubmit" name="mysubmit" value="Submit">
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