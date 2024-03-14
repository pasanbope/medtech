<?php
class User
{
    private $sqlcon;

    public function __construct()
    {
        if (file_exists('../db-config.php')) {
            include '../db-config.php';
        } else {
            include 'db-config.php';
        }
        //include 'config/db-config.php';
        $this->sqlcon = mysqli_connect($sql_server, $sql_username, $sql_password, $sql_database);
        if (!$this->sqlcon) {
            die('Connection Failed :' . mysqli_connect_error());
        }
    }


    public function get_userdet_byemail($user_email, $col)
    {
        $sql_get_rolls = "SELECT * FROM user WHERE Email='$user_email'";
        $res_get_rolls = mysqli_query($this->sqlcon, $sql_get_rolls);
        $row_get_rolls = mysqli_fetch_array($res_get_rolls);
        return $row_get_rolls[$col];

    }

    public function get_userrole($roll_id)
    {
        $sql_get_role = "SELECT * FROM user_roles WHERE Role_Id = $roll_id";
        $res_get_role = mysqli_query($this->sqlcon, $sql_get_role);
        $row_get_role = mysqli_fetch_array($res_get_role);
        return $row_get_role["RoleName"];

    }


}
?>