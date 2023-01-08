<?php
require '../config.php';
require '../db/session.contr.cls.php';

$sessObj = new SessionManageCls();
if ($sessObj->isLogged() == true) {
    $user_data = $sessObj->getSessionData();
    $var = $user_data['email'];
    require 'header.php';

?>
    <!-- content -->

    <div class="overview">
        <h2 style="color: #9f8e64;margin-top: 10px;margin-bottom:25px">COURSES</h2>
        <input type="hidden" id="user_id" value="<?= $user_data['log_id'] ?>">
        <div class="row">
            <?php
            $s = mysqli_query($con, "SELECT * FROM `tbl_packages`");
            while ($r = mysqli_fetch_array($s)) { ?>
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="../images/<?= $r['p_image'] ?>" alt="Card image cap" width=250 height=100>
                    <div class="card-body">
                        <h5 class="card-title"><?= $r['p_name'] ?></h5>
                        <h5 class="card-title"><?= $r['p_amount'] ?></h5>
                        <h5 class="card-title"><?= $r['days'] ?></h5>
                        <button onclick="openModal('<?= $r['p_id'] ?>')" class="btn btn-primary" style="background-color: #9f8e64; border:none;">Book Now</button>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Course Start date</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="mb-3">

                        <input name="inpDate"min="<?php echo date('Y-m-d'); ?>" class="form-control" id="inpDate" type="date"></textarea>
                        <input type="hidden" id="modalAppID">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" onclick="paytreatment()" class="btn btn-primary">Pay & book</button>
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
<script>
    function openModal(package_id) {
        $("#modalAppID").val(package_id);
        $("#exampleModal").modal('show');
    }

    function paytreatment() {
        visitDate = $("#inpDate").val();
        userlog_id = $("#user_id").val();
        package_id = $("#modalAppID").val();
        if (visitDate != '' && visitDate != null) {
            $.ajax({
                type: "POST",
                url: "../api/user_api.php",
                data: {
                    "userlog_id": userlog_id,
                    "visitDate": visitDate,
                    "package_id": package_id,
                    'action': 5,
                },
                dataType: 'JSON',
                cache: false,
                success: function(response) {
                    if (response.status == 1) {
                        swal("Payment Link Generated", "You will be redirected to the payment page. please pay the fee.", 'success');
                        setTimeout(() => {
                            window.location.href = "payment.php?status=2&amount=" + response.data.amount + "&package_id=" + response.data.package_id + "&description=" + response.data.description + "&display_amount=" + response.data.display_amount + "&display_currency=" + response.data.display_currency + "&image=" + response.data.image + "&key=" + response.data.key + "&order_id=" + response.data.order_id + "&contact=" + response.data.prefill.contact + "&email=" + response.data.prefill.email + "&name=" + response.data.prefill.name + "&color=" + response.data.theme.color + "&user_code=" + response.data.user_code;
                        }, 2000);
                    } else {
                        swal("error", response.msg, 'error');
                    }
                }
            });
        } else {
            alert("Error: please select a visit date.");
        }
    }

    function swal($msg1, $msg2, $msg3) {
        alert($msg2);
    }
</script>
<style>
    .card-img-top {
        position: relative !important;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>