    <?php

require '../db/config.php';
require '../db/session.contr.cls.php';
require '../classes/user.modal.cls.php';
require '../classes/user.contr.cls.php';
$sessObj = new SessionManageCls();
if ($sessObj->isLogged() == true) {
    if (isset($_POST)) {
        $userObj = new UserCls();
        if ($_POST['action'] == 3) {
            $date = filter_var($_POST['date'], FILTER_SANITIZE_SPECIAL_CHARS);
            $time_id = filter_var($_POST['time_id'], FILTER_SANITIZE_SPECIAL_CHARS);
            $userlog_id = filter_var($_POST['userlog_id'], FILTER_SANITIZE_SPECIAL_CHARS);
            $symptom = filter_var($_POST['symptom'], FILTER_SANITIZE_SPECIAL_CHARS);
            $userObj->createAppoinment($date, $time_id, $userlog_id, $symptom);
        } else if ($_POST['action'] == 2) {
            $userlog_id = filter_var($_POST['userlog_id'], FILTER_SANITIZE_SPECIAL_CHARS);
            $appo_id = filter_var($_POST['appo_id'], FILTER_SANITIZE_SPECIAL_CHARS);
            $userObj->deleteAppoDB($appo_id, $userlog_id);
        } else if ($_POST['action'] == 1) {
            $doc_log_id = filter_var($_POST['doc_log_id'], FILTER_SANITIZE_SPECIAL_CHARS);
            $userObj->changeStatus($doc_log_id);
        } else if ($_POST['action'] == 4) {
            $userlog_id = filter_var($_POST['userlog_id'], FILTER_SANITIZE_SPECIAL_CHARS);
            $appo_id = filter_var($_POST['appo_id'], FILTER_SANITIZE_SPECIAL_CHARS);
            $userObj->payAppoFnc($appo_id, $userlog_id);
        } else if ($_POST['action'] == 5) {
            $visitDate = filter_var($_POST['visitDate'], FILTER_SANITIZE_SPECIAL_CHARS);
            $userlog_id = filter_var($_POST['userlog_id'], FILTER_SANITIZE_SPECIAL_CHARS);
            $package_id = filter_var($_POST['package_id'], FILTER_SANITIZE_SPECIAL_CHARS);
            $userObj->payPackageFnc($package_id, $userlog_id, $visitDate);
        }
    }
} else {
    echo json_encode(['status' => 404, 'msg' => 'Unauthorized Request']);
}
