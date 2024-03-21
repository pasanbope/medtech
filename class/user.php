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

    public function add_user_log($log_date, $log_time, $log_user, $log_ip, $log_cat, $log_det)
    {
        $sql_add_log = "INSERT INTO user_log(Log_Date, Log_Time, Log_User, Log_Ip, Log_Cat, Log_Details)
        VALUES('$log_date', '$log_time', $log_user, '$log_ip', '$log_cat', '$log_det')";
        mysqli_query($this->sqlcon, $sql_add_log);

    }

    public function list_logs()
    {
        echo "<tbody>";
        $sql_getlog = "SELECT * FROM user_log";
        $res_getlog = mysqli_query($this->sqlcon, $sql_getlog);
        while ($row_logs = mysqli_fetch_array($res_getlog)) {
            $user_id = $row_logs['Log_User'];
            echo "<tr><td>" . $row_logs['Log_Id'] . "</td>";
            echo "<td>" . $row_logs['Log_Date'] . "</td>";
            echo "<td>" . $row_logs['Log_Time'] . "</td>";
            echo "<td>" . $this->get_username($user_id) . "</td>";
            echo "<td>" . $row_logs['Log_Ip'] . "</td>";
            echo "<td>" . $row_logs['Log_Cat'] . "</td>";
            echo "<td>" . $row_logs['Log_Details'] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";

    }

    public function get_username($user_id)
    {
        $sql_get_username = "SELECT * FROM user WHERE User_Id = $user_id";
        $res_get_username = mysqli_query($this->sqlcon, $sql_get_username);
        $row_get_username = mysqli_fetch_array($res_get_username);
        return $row_get_username["UserName"];
    }


}
?>