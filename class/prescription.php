<?php

class Prescription
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

    public function get_birthday($bday)
    {
        $age = date_diff(date_create($bday), date_create('today'))->y;
        return $age;
    }

    public function add_pres_detail($pre_no, $batch_no, $expire_date, $drug_id, $qty, $freq, $remark, $advice)
    {

        $add_Presdetail_sql = "INSERT INTO tmp_prescription_details (Prescription_NO, Batch_No, Expire_Date, Drug_Id, Quantity, Frequency, Remarks, Adviced) 
		VALUES($pre_no, '$batch_no', '$expire_date', $drug_id, $qty, '$freq', '$remark', '$advice')";
        if (mysqli_query($this->sqlcon, $add_Presdetail_sql)) {
            return True;
        } else {
            return False;
        }

    }

    public function get_drug_pres($drug)
    {
        $sql_get_drug = "SELECT * FROM drug WHERE Drug_Id = $drug";
        $res_get_drug = mysqli_query($this->sqlcon, $sql_get_drug);
        $row_get_drug = mysqli_fetch_array($res_get_drug);
        return $row_get_drug['BrandName'];
    }

    public function list_pres_detail()
    {

        echo "<tbody>";
        $sql_getpres = "SELECT * FROM tmp_prescription_details";
        $res_getpres = mysqli_query($this->sqlcon, $sql_getpres);
        while ($row_pres = mysqli_fetch_array($res_getpres)) {
            $drug = $row_pres['Drug_Id'];
            $pres_id = $row_pres['Pres_id'];
            echo "<tr>";
            echo "<td>" . $this->get_drug_pres($drug) . "</td>";
            echo "<td>" . $row_pres['Batch_No'] . "</td>";
            echo "<td>" . $row_pres['Expire_Date'] . "</td>";
            echo "<td>" . $row_pres['Quantity'] . "</td>";
            echo "<td>" . $row_pres['Frequency'] . "</td>";
            echo "<td>" . $row_pres['Remarks'] . "</td>";
            echo "<td>" . $row_pres['Adviced'] . "</td>";

            echo "<td><a id = '" . $pres_id . "'  href='javascript: void(0);' class='action-icon btn_delPRES'> 
            <i class='mdi mdi-delete'></i></a></td>";
            echo "</tr>";
        }
        echo "</tbody>";

    }

    public function del_pres_detail($pres_id)
    {
        $sql_del_pres = "DELETE FROM tmp_prescription_details WHERE Pres_id  = $pres_id";
        mysqli_query($this->sqlcon, $sql_del_pres);

    }

    public function get_SerialNo_Pres($serial_name)
    {

        $sql_get_SerialNo = "SELECT * FROM tbl_serial WHERE Serial_Name = '$serial_name'";
        $res_get_SerialNo = mysqli_query($this->sqlcon, $sql_get_SerialNo);
        $row_get_SerialNo = mysqli_fetch_array($res_get_SerialNo);
        return $row_get_SerialNo['Serial_No'];

    }

    public function update_SerialNo_Pres($serial_name, $serial_no)
    {

        $sql_update_SerialNo = "UPDATE tbl_serial SET Serial_No = $serial_no WHERE Serial_Name = '$serial_name'";
        mysqli_query($this->sqlcon, $sql_update_SerialNo);

    }

    public function genarate_new_serial($serial_name, $serial_no)
    {

        $current_serial = $this->get_SerialNo_Pres($serial_name);
        $new_serial = $current_serial + 1;
        $this->update_SerialNo_Pres($serial_name, $new_serial);
    }

    public function update_Pres_Details($pres_no, $date, $app_id, $patint_id, $doc_id, $time, $note, $ill, $test)
    {
        $sql_getpres = "SELECT * FROM tmp_prescription_details WHERE Prescription_NO = $pres_no";
        $res_getpres = mysqli_query($this->sqlcon, $sql_getpres);
        while ($row_pres = mysqli_fetch_array($res_getpres)) {

            $pres_id = ['Pres_id'];
            $batch = $row_pres['Batch_No'];
            $exp_date = $row_pres['Expire_Date'];
            $drug = $row_pres['Drug_Id'];
            $qty = $row_pres['Quantity'];
            $freq = $row_pres['Frequency'];
            $remark = $row_pres['Remarks'];
            $advice = $row_pres['Adviced'];

            $this->add_pres_details($pres_no, $drug, $qty, $freq, $remark, $advice);
        }

        $sql_delpres = "DELETE FROM tmp_prescription_details WHERE Prescription_NO = $pres_no";
        mysqli_query($this->sqlcon, $sql_delpres);
        $this->add_prescription_master($pres_no, $app_id, $patint_id, $doc_id, $date, $time, $note, $ill, $test);
    }

    public function add_pres_details($pres_no, $drug, $qty, $freq, $remark, $advice)
    {
        $sql_addpres = "INSERT INTO prescription_details (Prescription_Id, Drug_Id, Quantity, Frequency, Remarks, Adviced) 
        VALUES ($pres_no, $drug, '$qty', '$freq', '$remark', '$advice')";
        if (mysqli_query($this->sqlcon, $sql_addpres)) {
            return True;
        } else {
            return False;
        }
    }

    public function check_pres_items($pres_no)
    {
        $sql_check_pres = "SELECT * FROM tmp_prescription_details WHERE Prescription_NO = $pres_no";
        $res_check_pres = mysqli_query($this->sqlcon, $sql_check_pres);
        $row_check_pres = mysqli_num_rows($res_check_pres);
        return $row_check_pres;
    }

    public function add_prescription_master($pres_id, $app_id, $patint_id, $doc_id, $p_date, $p_time, $note, $ill, $test)
    {

        $add_pres_master = "INSERT INTO prescription_master (Prescription_Id, Appointment_Id, Patient_Id, Doctor_Id, P_Date, P_Time, P_Description, Illness, Test) 
		VALUES($pres_id, $app_id, $patint_id, $doc_id, '$p_date', '$p_time', '$note', '$ill', '$test')";
        if (mysqli_query($this->sqlcon, $add_pres_master)) {
            return True;
        } else {
            return False;
        }
    }




}
?>