<?php
session_start();
class SessionManageCls
{
    public function isLogged()
    {
        if (isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == TRUE) {
            return true;
        } else {
            return false;
        }
    }
    public function getSessionData()
    {
        if (isset($_SESSION['auth_user'])) {
            return $_SESSION['auth_user'];
        } else {
            return false;
        }
    }
    public function setRazorPayOrderId($data)
    {
        $_SESSION['paymentdata'] = $data;
    }
    public function getRazorPayOrderData()
    {
        if (isset($_SESSION['paymentdata'])) {
            return $_SESSION['paymentdata'];
        } else {
            return false;
        }
    }
}
