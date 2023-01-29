<?php
require '../db/config.php';
require '../db/session.contr.cls.php';
$dbObj = new Dbh;
$sessObj = new SessionManageCls();
if ($sessObj->isLogged() == true) {
    $user_data = $sessObj->getSessionData();
    require 'header.php';

?>
    <!-- content -->

    <div class="overview">
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="alert alert-primary" role="alert">
                    Welcome  <?= $user_data['email'] ?>
                </div>
            </div>
        </div><br>
        <div class="cards">
                    <div class="card card-1">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Materials</h5>
                                <!-- <h1>
                                    <//?php
                                    $sql = "SELECT * from tbl_patient where status=0";
                                    $result = mysqli_query($con, $sql);
                                    echo mysqli_num_rows($result);
                                    ?>
                                </h1> -->
                            </div>
                            <i class="ri-user-line card--icon--lg"></i>
                        </div>

                    </div>
                   
                    <div class="card card-2">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Leaves</h5>
                                <!-- <h1>
                                    <//?php
                                    $sql = "SELECT * from tbl_doctor where status=0";
                                    $result = mysqli_query($con, $sql);
                                    echo mysqli_num_rows($result);
                                    ?>
                                </h1> -->
                            </div>
                            <i class="ri-user-line card--icon--lg"></i>
                        </div>

                    </div>

                    <div class="card card-4">
                        <div class="card--data">
                            <div class="card--content">
                                <h5 class="card--title">Shedules</h5>
                                <!-- <h1>
                                    </?php
                                    $sql = "SELECT * from tbl_doctor where status= 1";
                                    $result = mysqli_query($con, $sql);
                                    echo mysqli_num_rows($result);
                                    ?>
                                </h1> -->
                            </div>
                            <i class="ri-user-line card--icon--lg"></i>
                        </div>

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