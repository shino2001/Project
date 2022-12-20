<?php
require '../config.php';
require '../db/session.contr.cls.php';

$sessObj = new SessionManageCls();
if ($sessObj->isLogged() == true) {
    $user_data = $sessObj->getSessionData();
    $var = $user_data['email'];
    require 'header.php';
    if (isset($_POST['submit'])) {
        $email = $_SESSION['email'];
        $pas = $_POST['password'];
        $cpas = $_POST['cpassword'];
        $password = md5($_POST['password']);
        $query = "UPDATE tbl_login SET `password`='$password' where `email`='$email'";
        $query_run = mysqli_query($con, $query) or die($con);
        if ($query_run) {
            echo "<script> alert('Password changed Successfully'); </script>";
        }
    }
?>
    <!-- content -->

    <div class="overview">
        <div class="row mt-5">
            <div class="col-md-12">
                <form method="POST" action="" enctype="multipart/form-data" onsubmit="return validate();">
                   
                    <div class="form-group col-4 mt-2">
                        <h2 style="color: #9f8e64;margin-top: 10px;margin-bottom:25px">UPDATE PASSWORD</h2>
                    </div>
                    <div class="form-group col-12 mt-2">
                        <label class="mt-2">Password:</label>
                        <input type="password" class="form-control" minlength="6" id="password" name="password" placeholder="Password" onblur="validate_password()">
                        <label class="mt-2">Confirm Password:</label>
                        <input type="password" minlength="6" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password" onblur="validate_confirm()">

                    </div>
                    <div class="col-md-12">
                        <input type="submit" id="submit" name="submit" value="submit">
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
<script>
    function validate_password() {
        var name = document.forms["registration"]["password"];
        var pattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/;
        if (name.value == "") {
            var error = "Please enter your password";
            document.getElementById("password").placeholder = error;
            document.getElementById("password").classList.add("custom-warning");
            document.form.password.focus();
            return false;
        } else if (name.value.match(pattern)) {
            document.getElementById("password").innerHTML = "";
            document.form.cpassword.focus();
            return true;
        } else {
            document.getElementById("password").value = "";
            document.getElementById("password").placeholder = "Invalid password";
            document.form.password.focus();
            return false;
        }
    }

    function validate_confirm() {
        var name1 = document.forms["registration"]["cpassword"];
        var name2 = document.forms["registration"]["cpassword"];

        if (name2.value == "") {
            var error = "Please enter password";
            document.getElementById("cpassword").placeholder = error;
            document.getElementById("cpassword").classList.add("custom-warning");
            document.form.cpassword.focus();
            return false;
        } else if (name1.value == name2.value) {
            document.getElementById("cpassword").innerHTML = "";
            document.form.checkBox.focus();
            return true;
        } else {
            document.getElementById("cpassword").value = "";
            document.getElementById("cpassword").placeholder = "Password doesnot match";
            document.form.cpassword.focus();
            return false;
        }
    }
</script>

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