<?php
require '../db/config.php';
require '../db/session.contr.cls.php';
$dbObj = new Dbh;
$sessObj = new SessionManageCls();
if ($sessObj->isLogged() == true) {
    $user_data = $sessObj->getSessionData();
    if (isset($_GET["p_id"])) {
        if (!empty($dbObj->connFnc()->query("SELECT * FROM `tbl_packages` WHERE `tbl_packages`.`p_id` = '" . $_GET['p_id'] . "';")->fetch_assoc())) {
            if ($dbObj->connFnc()->query("INSERT INTO `tbl_c_packages`(`p_id`, `l_id`, `status`) VALUES ('" . $_GET['p_id'] . "','" . $user_data['log_id'] . "',1)")) {
                echo "<script>  
                alert('Package  added');
                    window.location.href='packages.php';
                </script>";
            } else {
                echo "<script>  
                alert('Failed to add packages');
                    window.location.href='packages.php';
                </script>";
            }
        } else {
            echo "<script>  
            alert('Wrong Packages');
                window.location.href='packages.php';
            </script>";
        }
    } else  if (isset($_GET["remove_id"])) {
        if (!empty($dbObj->connFnc()->query("SELECT * FROM `tbl_c_packages` WHERE `tbl_c_packages`.`t_id` = '" . $_GET['remove_id'] . "';")->fetch_assoc())) {
            if ($dbObj->connFnc()->query("DELETE FROM `tbl_c_packages` WHERE `tbl_c_packages`.`t_id` = '" . $_GET['remove_id'] . "';")) {
                echo "<script>  
                alert('Package  Reomoved');
                    window.location.href='mypackages.php';
                </script>";
            } else {
                echo "<script>  
                alert('Failed to Remove packages');
                    window.location.href='mypackages.php';
                </script>";
            }
        } else {
            echo "<script>  
            alert('Wrong Package');
                window.location.href='mypackages.php';
            </script>";
        }
    } else {
        header("Location:index.php");
    }
} else {
    header("Location:../user-login.php");
}
