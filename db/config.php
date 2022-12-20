<?php

// Check connection
define('DB_SERVER', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'jeevani');
class Dbh
{
    public function connFnc()
    {
        $conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        if ($conn->connect_errno) {
            return FALSE;
        } else {
            return $conn;
        }
    }
    protected function connection()
    {
        $conn = new mysqli(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
        if ($conn->connect_errno) {
            return FALSE;
        } else {
            return $conn;
        }
    }
}
