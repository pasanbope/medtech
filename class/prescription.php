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


    public function get_drug_pres_med($drug)
    {
        $sql_get_drug = "SELECT * FROM drug WHERE Drug_Id = $drug";
        $res_get_drug = mysqli_query($this->sqlcon, $sql_get_drug);
        $row_get_drug = mysqli_fetch_array($res_get_drug);
        return $row_get_drug['MedicalName'];
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

            $this->add_pres_details($pres_no, $drug, $batch, $qty, $freq, $remark, $advice);

            $current_stock = $this->get_stock($drug);
            $new_stock = $current_stock - $qty;
            $this->update_stock($drug, $new_stock);
            $current_batch_stock = $this->get_batch_stock($drug, $batch);
            $new_batch_stock = $current_batch_stock - $qty;
            $this->update_batch_stock($drug, $batch, $new_batch_stock);

        }
        $sql_delpres = "DELETE FROM tmp_prescription_details WHERE Prescription_NO = $pres_no";
        mysqli_query($this->sqlcon, $sql_delpres);
        $this->add_prescription_master($pres_no, $app_id, $patint_id, $doc_id, $date, $time, $note, $ill, $test);
    }

    public function get_stock($drug_id)
    {
        $sql_get_stock = "SELECT * FROM stock WHERE Drug_Id = $drug_id";
        $res_get_stock = mysqli_query($this->sqlcon, $sql_get_stock);
        $row_get_stock = mysqli_fetch_array($res_get_stock);
        return $row_get_stock['Quantity'];
    }

    public function update_stock($drug_id, $Qty, $last_grn_date = '0000-00-00')
    {
        $sql_update = "UPDATE stock SET Quantity = $Qty , Last_GRN_Date = '$last_grn_date' WHERE Drug_Id  = $drug_id";
        mysqli_query($this->sqlcon, $sql_update);
    }

    public function get_batch_stock($drug_id, $batch_no)
    {
        $sql_get_bstock = "SELECT * FROM batch_stock WHERE Drug_Id = $drug_id AND Batch_No = '$batch_no'";
        $res_get_bstock = mysqli_query($this->sqlcon, $sql_get_bstock);
        $row_get_bstock = mysqli_fetch_array($res_get_bstock);
        return $row_get_bstock['Quantity'];
    }

    public function update_batch_stock($drug_id, $batch_no, $qty)
    {
        $sql_update = "UPDATE batch_stock SET Quantity = $qty WHERE Drug_Id = $drug_id AND Batch_No = '$batch_no'";
        mysqli_query($this->sqlcon, $sql_update);
    }



    public function add_pres_details($pres_no, $drug, $batch_no, $qty, $freq, $remark, $advice)
    {
        $sql_addpres = "INSERT INTO prescription_details (Prescription_Id, Drug_Id, Batch_No, Quantity, Frequency, Remarks, Adviced) 
        VALUES ($pres_no, $drug, '$batch_no', $qty, '$freq', '$remark', '$advice')";
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

        $add_pres_master = "INSERT INTO prescription_master (Prescription_Id, Appointment_Id, Patient_Id, Doctor_Id, P_Date, P_Time, P_Description, Illness, Test, Is_issued) 
		VALUES($pres_id, $app_id, $patint_id, $doc_id, '$p_date', '$p_time', '$note', '$ill', '$test', 0)";
        if (mysqli_query($this->sqlcon, $add_pres_master)) {
            return True;
        } else {
            return False;
        }
    }

    public function get_doc_pres($doc)
    {
        $sql_get_drug = "SELECT * FROM doctor WHERE Doctor_Id  = $doc";
        $res_get_drug = mysqli_query($this->sqlcon, $sql_get_drug);
        $row_get_drug = mysqli_fetch_array($res_get_drug);
        $full_name = $row_get_drug['Title'] . " " . $row_get_drug['FirstName'] . " " . $row_get_drug['LastName'];
        return $full_name;
    }

    public function get_pat_pres($pat)
    {
        $sql_get_pat = "SELECT * FROM patient WHERE Patient_Id = $pat";
        $res_get_pat = mysqli_query($this->sqlcon, $sql_get_pat);
        $row_get_pat = mysqli_fetch_array($res_get_pat);
        $full_name = $row_get_pat['Title'] . " " . $row_get_pat['FirstName'] . " " . $row_get_pat['LastName'];
        return $full_name;
    }

    public function list_pres_master()
    {

        echo "<tbody>";
        $sql_getapp = "SELECT * FROM prescription_master";
        $res_getapp = mysqli_query($this->sqlcon, $sql_getapp);
        while ($row_app = mysqli_fetch_array($res_getapp)) {
            $doc = $row_app['Doctor_Id'];
            $pat = $row_app['Patient_Id'];

            echo "<tr>";

            echo "<td>" . $row_app['Prescription_Id'] . "</td>";
            echo "<td>" . $row_app['Appointment_Id'] . "</td>";
            echo "<td>" . $this->get_pat_pres($pat) . "</td>";
            echo "<td>" . $this->get_doc_pres($doc) . "</td>";
            echo "<td>" . $row_app['P_Date'] . "</td>";
            echo "<td>" . $row_app['P_Time'] . "</td>";
            echo "<td>" . $row_app['P_Description'] . "</td>";
            echo "<td>" . $row_app['Illness'] . "</td>";
            echo "<td>" . $row_app['Test'] . "</td>";
            echo "<td>" . $row_app['Is_issued'] . "</td>";

            echo "</tr>";

        }
        echo "</tbody>";

    }

    public function list_pres_master_today()
    {
        $today = date('Y-m-d');
        echo "<tbody>";
        $sql_getapp = "SELECT * FROM prescription_master WHERE P_Date = '$today' AND Is_issued = 0";
        $res_getapp = mysqli_query($this->sqlcon, $sql_getapp);
        while ($row_app = mysqli_fetch_array($res_getapp)) {
            $doc = $row_app['Doctor_Id'];
            $pat = $row_app['Patient_Id'];

            echo "<tr>";

            echo "<td><a href='home.php?page=all-prescription&pres=" . $row_app['Prescription_Id'] . "'>" . $row_app['Prescription_Id'] . "</a></td>";
            echo "<td>" . $row_app['Appointment_Id'] . "</td>";
            echo "<td>" . $this->get_pat_pres($pat) . "</td>";
            echo "<td>" . $this->get_doc_pres($doc) . "</td>";
            echo "<td>" . $row_app['P_Date'] . "</td>";
            echo "<td>" . $row_app['P_Time'] . "</td>";
            echo "<td>" . $row_app['P_Description'] . "</td>";
            echo "<td>" . $row_app['Illness'] . "</td>";
            echo "<td>" . $row_app['Test'] . "</td>";
            echo "<td>" . $row_app['Is_issued'] . "</td>";

            echo "</tr>";

        }
        echo "</tbody>";

    }


    public function list_pres_detail_pharmacy($pres_id)
    {

        echo "<tbody>";
        $sql_getapp = "SELECT * FROM prescription_details WHERE Prescription_Id = $pres_id";
        $res_getapp = mysqli_query($this->sqlcon, $sql_getapp);
        $tot_drug_price = 0;
        while ($row_app = mysqli_fetch_array($res_getapp)) {
            $drug = $row_app['Drug_Id'];
            $batch_num = $row_app['Batch_No'];
            $qty = $row_app['Quantity'];
            echo "<tr>";
            echo "<td data-bs-toggle='popover' data-bs-trigger='hover' data-bs-content='" . $this->get_drug_pres_med($drug) . "' title='Medical Name'>" . $this->get_drug_pres($drug) . "
            </td>";
            echo "<td>" . $row_app['Batch_No'] . "</td>";
            echo "<td>" . $row_app['Quantity'] . "</td>";
            echo "<td>" . $row_app['Frequency'] . "</td>";
            echo "<td>" . $row_app['Remarks'] . "</td>";
            echo "<td>" . $row_app['Adviced'] . "</td>";
            echo "</tr>";


        }
        echo "</tbody>";


    }

    public function get_total_drug_charge($pres_id)
    {
        $sql_getapp = "SELECT * FROM prescription_details WHERE Prescription_Id = $pres_id";
        $res_getapp = mysqli_query($this->sqlcon, $sql_getapp);
        $tot_drug_price = 0;
        while ($row_app = mysqli_fetch_array($res_getapp)) {
            $drug = $row_app['Drug_Id'];
            $batch_num = $row_app['Batch_No'];
            $qty = $row_app['Quantity'];
            $drug_price = $this->get_dru_rate($drug, $batch_num);
            $drug_qty_price = $drug_price * $qty;
            $tot_drug_price = $tot_drug_price + $drug_qty_price;
        }
        return $tot_drug_price;
    }

    public function get_total_drug_cost($pres_id)
    {
        $sql_getapp = "SELECT * FROM prescription_details WHERE Prescription_Id = $pres_id";
        $res_getapp = mysqli_query($this->sqlcon, $sql_getapp);
        $tot_drug_cost = 0;
        while ($row_app = mysqli_fetch_array($res_getapp)) {
            $drug = $row_app['Drug_Id'];
            $batch_num = $row_app['Batch_No'];
            $qty = $row_app['Quantity'];


            //genarate cost of drug
            $drug_cost = $this->get_dru_purchased($drug, $batch_num);
            $drug_qty_cost = $drug_cost * $qty;
            $tot_drug_cost = $tot_drug_cost + $drug_qty_cost;
        }
        return $tot_drug_cost;
    }


    public function getPres_Master_by_PresId($pres_id, $col)
    {
        $sql_get_pre_mast = "SELECT * FROM prescription_master WHERE Prescription_Id = $pres_id";
        $res_get_pre_mast = mysqli_query($this->sqlcon, $sql_get_pre_mast);
        $row_get_pre_mast = mysqli_fetch_array($res_get_pre_mast);
        return $row_get_pre_mast[$col];
    }

    public function get_dru_rate($drug_id, $batch_num)
    {
        $sql_get_dru_rate = "SELECT * FROM grn_details WHERE Drug_Id = $drug_id";
        $res_get_dru_rate = mysqli_query($this->sqlcon, $sql_get_dru_rate);
        $row_get_dru_rate = mysqli_fetch_array($res_get_dru_rate);
        return $row_get_dru_rate['Rate'];

    }

    public function get_dru_purchased($drug_id, $batch_num)
    {
        $sql_get_dru_purchased = "SELECT * FROM grn_details WHERE Drug_Id = $drug_id";
        $res_get_dru_purchased = mysqli_query($this->sqlcon, $sql_get_dru_purchased);
        $row_get_dru_purchased = mysqli_fetch_array($res_get_dru_purchased);
        return $row_get_dru_purchased['PurchasedPrice'];

    }

    public function add_bill($pat_id, $doc_charge, $drug_charge, $drug_cost, $tot)
    {

        $add_bill_sql = "INSERT INTO patient_bill (Prescription_Id, Doctor_Charge, Drug_Charge, Drug_Cost, Total_Amount) 
		VALUES($pat_id, $doc_charge, $drug_charge, $drug_cost, $tot)";
        if (mysqli_query($this->sqlcon, $add_bill_sql)) {
            return True;
        } else {
            return False;
        }

    }


    public function update_prescription_issue($pres_id)
    {

        $sql_update_prescription_issue = "UPDATE prescription_master SET Is_issued = 1 WHERE Prescription_Id = $pres_id";
        mysqli_query($this->sqlcon, $sql_update_prescription_issue);

    }




}
?>