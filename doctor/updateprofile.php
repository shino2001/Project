<?php
require '../db/config.php';
require '../db/session.contr.cls.php';
$dbObj = new Dbh;
$sessObj = new SessionManageCls();
if ($sessObj->isLogged() == true) {
    $user_data = $sessObj->getSessionData();
    if (isset($_POST["submit"])) {
        $fname = $_POST['d_name'];
        $address = $_POST['address'];
        $spec = $_POST['spec'];
        $fees = $_POST['fees'];;
        $sql1 = mysqli_query($dbObj->connFnc(), "Update tbl_doctor set d_name='$fname',
   d_address='$address',spec='$spec',d_fees='$fees' where `l_id`='" . $user_data['log_id'] . "'");
        if ($sql1) {
            echo "<script> alert('Your Profile updated Successfully'); </script>";
        }
    }
    require 'header.php';
?>
    <!-- content -->

    <div class="overview">
        <div class="row mt-5">
            <div class="col-md-12">
                <?php
                $data = $dbObj->connFnc()->query("SELECT * FROM `tbl_doctor` WHERE `l_id`='" . $user_data['log_id'] . "'")->fetch_assoc();
                ?>
                <h2 style="color: #9f8e64;">UPDATE PROFILE</h2><br>
                <form method="POST" action="updateprofile.php" enctype="multipart/form-data">
                    <div class="form-group col-12 mt-2">
                        <label class="form-label text-dark">Name:</label><br>
                        <input type="text" id="d_name" class="form-control" name="d_name" value="<?= $data['d_name'] ?> ">
                    </div>
                    <div class="form-group col-12">
                        <label class="form-label text-dark">Address:</label><br>
                        <input type="text" class="form-control" id="address" name="address" value="<?= $data['d_address'] ?> ">
                    </div>

                    <div class="form-group col-12">
                        <label class="form-label text-dark">Email:</label><br>
                        <input type="email" class="form-control" id="email" name="email" readonly="readonly" value='<?= $user_data['email'] ?>'>
                    </div>
                    <div class="form-group col-12">
                        <label class="form-label text-dark">Specialization:</label><br>
                        <select name="spec" class="form-control" id="spec" required>
                            <option value="<?= $data['spec'] ?> "><?= $data['spec'] ?> </option>
                            <option value="Baala Chikitsa" name="spec">Baala Chikitsa (pediatrician)</option>
                            <option value="Urdhvanga Chikitsa" name="spec">Urdhvanga Chikitsa (head & Neck)</option>
                            <option value="Kayachikits" name="spec">Kayachikits (Internal Medicine)</option>
                            <option value="Shalakya Tantra" name="spec">Shalakya Tantra (ENT & Opthalamology)</option>
                        </select>
                    </div>
                    <div class="form-group col-12">
                        <label class="form-label text-dark">Consultancy Fees</label><br>
                        <input type="number" class="form-control" id="cfee" min="0" name="fees" value=<?= $data['d_fees'] ?>>
                    </div>
                    <div class="form-group col-12">
                        <span style="color: red; margin-left:50px; font-size:12px"></span><br>
                        <input type="submit" name="submit" id="submit" value="submit">
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
	padding: 8px 10px;
	border: none;
	border-radius: 4px;
	cursor: pointer;
  }
</style>