<?php
class Drug
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

    public function add_drug($MedicinalName, $BrandName, $ReOrderLevel, $MeasurementType, $Catogary)
    {

        $add_drug_sql = "INSERT INTO drug(MedicalName, BrandName, Rol, Measure_Id, Category_Id) 
		VALUES('" . $MedicinalName . "','" . $BrandName . "','" . $ReOrderLevel . "','" . $MeasurementType . "','" . $Catogary . "')";
        mysqli_query($this->sqlcon, $add_drug_sql);
    }

    public function list_drug()
    {
        echo "<tbody>";
        $sql_getdrug = "SELECT * FROM drug";
        $res_getdrug = mysqli_query($this->sqlcon, $sql_getdrug);
        while ($row_drug = mysqli_fetch_array($res_getdrug)) {
            $mesure_id = $row_drug['Measure_Id'];
            $category = $row_drug['Category_Id'];
            echo "<tr><td>" . $row_drug['Drug_Id'] . "</td>";
            echo "<td>" . $row_drug['MedicalName'] . "</td>";
            echo "<td>" . $row_drug['BrandName'] . "</td>";
            echo "<td>" . $row_drug['Rol'] . "</td>";
            echo "<td>" . $this->get_measurement($mesure_id) . "</td>";
            echo "<td>" . $this->get_category($category) . "</td>";

            echo "<td> <a href='#' data-id='" . $row_drug['Drug_Id'] . "'";
            echo "class='action-icon btn_edit' data-bs-target='#full-width-modal' data-bs-toggle='modal'> 
    		<iclass='mdi mdi-square-edit-outline'></i></a>
            <a href='javascript:void(0);' class='action-icon'> <i class='mdi mdi-delete'></i></a>
            </td></tr>";
        }
        echo "</tbody>";

    }

    public function add_drugcat($Catogary)
    {

        $add_drugcat_sql = "INSERT INTO drug_category(Category) 
		VALUES('" . $Catogary . "')";
        mysqli_query($this->sqlcon, $add_drugcat_sql);
    }

    public function add_drugmesure($name)
    {

        $add_drugmesure_sql = "INSERT INTO measurement_type(Name) 
		VALUES('" . $name . "')";
        mysqli_query($this->sqlcon, $add_drugmesure_sql);
    }


    public function get_measurement($mes_id)
    {
        $sql_get_measure = "SELECT * FROM measurement_type WHERE Measure_Id = $mes_id";
        $res_get_measure = mysqli_query($this->sqlcon, $sql_get_measure);
        $row_get_measure = mysqli_fetch_array($res_get_measure);
        return $row_get_measure['Name'];
    }

    public function get_category($cat_id)
    {
        $sql_get_category = "SELECT * FROM drug_category WHERE Category_Id = $cat_id";
        $res_get_category = mysqli_query($this->sqlcon, $sql_get_category);
        $row_get_category = mysqli_fetch_array($res_get_category);
        return $row_get_category['Category'];
    }

    public function select_drug()
    {
        $sql_drug = "select * from drug";
        $res_drug = mysqli_query($this->sqlcon, $sql_drug);
        while ($row_drug = mysqli_fetch_array($res_drug)) {
            echo '<option value="' . $row_drug['Drug_Id'] . '">' . $row_drug['BrandName'] . ' ' . '</option>';
        }
    }

    public function add_grn_detail($order_id, $drug_id, $batch_no, $made_date, $expire_date, $selling_price, $purchased_price, $quantity, $total)
    {

        $add_grndetail_sql = "INSERT INTO tmp_grn_details(Order_Id, Drug_Id, BatchNo, MadeDate, ExpireDate, SellingPrice, PurchasedPrice, Quantity, Total) 
		VALUES('" . $order_id . "','" . $drug_id . "','" . $batch_no . "','" . $made_date . "','" . $expire_date . "','" . $selling_price . "','" . $purchased_price . "','" . $quantity . "','" . $total . "')";
        mysqli_query($this->sqlcon, $add_grndetail_sql);
    }
}
?>