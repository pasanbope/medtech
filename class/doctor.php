<?php
class Doctor
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

    public function add_doctor($title, $firstname, $lastname, $tel, $address, $designation, $nic, $gender)
    {

        $add_patient_sql = "INSERT INTO doctor(Title, FirstName, LastName, Telphone, Address, Designation, NIC, Gender) 
		VALUES('" . $title . "','" . $firstname . "','" . $lastname . "','" . $tel . "','" . $address . "','" . $designation . "','" . $nic . "','" . $gender . "')";
        mysqli_query($this->sqlcon, $add_patient_sql);
    }

    public function list_doctor()
    {
        echo "<tbody>";
        $sql_getdoc = "SELECT * FROM doctor";
        $res_getdoc = mysqli_query($this->sqlcon, $sql_getdoc);
        while ($row_doc = mysqli_fetch_array($res_getdoc)) {
            echo "<tr><td>" . $row_doc['Doctor_Id'] . "</td>";
            echo "<td>" . $row_doc['Title'] . " " . $row_doc['FirstName'] . " " . $row_doc['LastName'] . "</td>";
            echo "<td>" . $row_doc['Telphone'] . "</td>";
            echo "<td>" . $row_doc['Designation'] . "</td>";
            echo "<td>" . $row_doc['NIC'] . "</td>";

            echo "<td> <a href='#' data-id='" . $row_doc['Doctor_Id'] . "'";
            echo "class='action-icon btn_edit' data-bs-target='#full-width-modal' data-bs-toggle='modal'> 
			<iclass='mdi mdi-square-edit-outline'></i></a>
            <a href='javascript:void(0);' class='action-icon'> <i class='mdi mdi-delete'></i></a>
            </td></tr>";
        }
        echo "</tbody>";

    }

    public function select_doctor()
    {
        $sql_doc = "select * from doctor";
        $res_doc = mysqli_query($this->sqlcon, $sql_doc);
        while ($row_doc = mysqli_fetch_array($res_doc)) {
            echo '<option value="' . $row_doc['Doctor_Id'] . '">' . $row_doc['Title'] . ' ' . $row_doc['FirstName'] . ' ' . $row_doc['LastName'] . '</option>';
        }
    }

    public function check_doc_shedule($Doctor, $Date)
    {
        $sql_check = "SELECT * FROM doctor_schedule WHERE Doctor_Id = $Doctor AND Date = '$Date'";
        $result_check = mysqli_query($this->sqlcon, $sql_check);
        $res_count = mysqli_num_rows($result_check);
        return $res_count;
    }

    public function add_doc_shedule($Date, $Doctor, $Time, $Patient, $Active = 1)
    {
        $sql_addshed = "INSERT INTO doctor_schedule (Date, Doctor_Id, Sched_Time, Patient_Count, Is_Enable)
        VALUES ('$Date',$Doctor,'$Time',$Patient, $Active)";
        if (mysqli_query($this->sqlcon, $sql_addshed)) {
            echo "<div class='alert alert-success alert-dismissible text-bg-success border-0 fade show' role='alert'>
            <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
            <strong>Success - </strong> New Appoinment Added!
        </div>";
        } else {
            echo "<div class='alert alert-danger alert-dismissible text-bg-danger border-0 fade show' role='alert'>
            <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
            <strong>Error - </strong> Failed!
        </div>";
        }
    }

    public function add_appoinment_forShed($Date, $Doctor)
    {
        $sql_addshed = "INSERT INTO tbl_appoinment_number (Doc_Id, App_Date, App_Number)
        VALUES ($Doctor, '$Date', 1)";
        mysqli_query($this->sqlcon, $sql_addshed);
    }


    public function add_appoinment($Date, $InputDoc, $Patient, $Ptime, $PatAppNum)
    {
        $sql_addap = "INSERT INTO appointment(Date, Doctor_Id, Patient_Id, Time, Patient_App_Num)
        VALUES ('$Date',$InputDoc,$Patient,'$Ptime', $PatAppNum)";
        if (mysqli_query($this->sqlcon, $sql_addap)) {
            return True;
        } else {
            return False;
        }
    }

    public function view_appoinment_forShed($Date, $Doctor)
    {
        $sql_addshed = "SELECT * FROM tbl_appoinment_number WHERE App_Date = '$Date' AND Doc_Id = $Doctor";
        $res_Shed = mysqli_query($this->sqlcon, $sql_addshed);
        $row_Shed = mysqli_fetch_array($res_Shed);
        return $row_Shed['App_Number'];
    }

    public function update_appoinment_forShed($Date, $Doctor, $Pnum)
    {
        $new_p_num = $Pnum + 1;
        $sql_addshed = "UPDATE tbl_appoinment_number SET App_Number = $new_p_num WHERE App_Date = '$Date' AND Doc_Id = $Doctor";
        mysqli_query($this->sqlcon, $sql_addshed);
    }

    public function get_patient_from_appoinment($app_no, $app_date, $doc_id)
    {
        $sql_get_pat_app = "SELECT * FROM appointment WHERE Patient_App_Num = $app_no AND Date = '$app_date' AND Doctor_Id = $doc_id";
        $res_get_pat_app = mysqli_query($this->sqlcon, $sql_get_pat_app);
        $row_get_pat_app = mysqli_fetch_array($res_get_pat_app);
        return $row_get_pat_app['Patient_Id'];
    }


    public function update_shedule($Time, $Patient, $Doctor, $Date)
    {
        $sql_update = "UPDATE doctor_schedule SET Sched_Time = '$Time' , Patient_Count = $Patient WHERE Doctor_Id = $Doctor AND Date = '$Date'";
        if (mysqli_query($this->sqlcon, $sql_update)) {
            echo "<div class='alert alert-success alert-dismissible text-bg-success border-0 fade show' role='alert'>
            <button type='button' class='btn-close btn-close-white' data-bs-dismiss='alert' aria-label='Close'></button>
            <strong>Success - </strong> Schedule Updated!
        </div>";
        }
    }

    public function getdet_byID($uid, $col)
    {
        $sql_get_doc = "SELECT * FROM doctor WHERE Login_Id = $uid";
        $res_get_doc = mysqli_query($this->sqlcon, $sql_get_doc);
        $row_get_doc = mysqli_fetch_array($res_get_doc);
        return $row_get_doc[$col];
    }

    public function get_shedule($day, $doc_id, $col)
    {
        $sql_get_shed = "SELECT * FROM doctor_schedule WHERE Date = '$day' AND Doctor_Id = $doc_id";
        $res_get_shed = mysqli_query($this->sqlcon, $sql_get_shed);
        $row_get_shed = mysqli_fetch_array($res_get_shed);
        return $row_get_shed[$col];
    }

    public function getdet_by_docID($doc_id, $col)
    {
        $sql_get_doc = "SELECT * FROM doctor WHERE Doctor_Id = $doc_id";
        $res_get_doc = mysqli_query($this->sqlcon, $sql_get_doc);
        $row_get_doc = mysqli_fetch_array($res_get_doc);
        return $row_get_doc[$col];
    }

    public function get_appoinment($day, $doc_id)
    {
        $sql_get_app = "SELECT * FROM doctor_schedule WHERE Date = '$day' AND Doctor_Id = $doc_id";
        $res_get_app = mysqli_query($this->sqlcon, $sql_get_app);
        $row_get_app = mysqli_fetch_array($res_get_app);
        return json_encode($row_get_app);
    }

    public function check_appoinment($day, $doc_id)
    {
        $sql_book_app = "SELECT * FROM appointment WHERE Date = '$day' AND Doctor_Id = $doc_id";
        $res_book_app = mysqli_query($this->sqlcon, $sql_book_app);
        $row_book_app = mysqli_num_rows($res_book_app);
        return json_encode($row_book_app);
    }

    public function get_appoinment_docshed($day, $doc_id)
    {
        $sql_get_app2 = "SELECT * FROM doctor_schedule WHERE Date = '$day' AND Doctor_Id = $doc_id";
        $res_get_app2 = mysqli_query($this->sqlcon, $sql_get_app2);
        $row_get_app2 = mysqli_num_rows($res_get_app2);
        return json_encode($row_get_app2);
    }

}
?>