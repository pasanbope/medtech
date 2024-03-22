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
            die ('Connection Failed :' . mysqli_connect_error());
        }
    }

    public function add_drug($MedicinalName, $BrandName, $ReOrderLevel, $MeasurementType, $Catogary)
    {

        $add_drug_sql = "INSERT INTO drug (MedicalName, BrandName, Rol, Measure_Id, Category_Id) 
		VALUES('$MedicinalName', '$BrandName', $ReOrderLevel, $MeasurementType, $Catogary)";
        if (mysqli_query($this->sqlcon, $add_drug_sql)) {
            return True;
        } else {
            return False;
        }
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

        $add_grndetail_sql = "INSERT INTO tmp_grn_details (Order_Id, Drug_Id, BatchNo, MadeDate, ExpireDate, SellingPrice, PurchasedPrice, Quantity, Total) 
		VALUES($order_id, $drug_id, '$batch_no', '$made_date', '$expire_date', $selling_price, $purchased_price, $quantity, $total)";
        if (mysqli_query($this->sqlcon, $add_grndetail_sql)) {
            return True;
        } else {
            return False;
        }
    }



    public function list_grn_detail()
    {
        echo "<tbody>";
        $sql_getgrn = "SELECT * FROM tmp_grn_details";
        $res_getgrn = mysqli_query($this->sqlcon, $sql_getgrn);
        while ($row_grn = mysqli_fetch_array($res_getgrn)) {
            $drug = $row_grn['Drug_Id'];
            $grn_id = $row_grn['GRN_Id'];
            echo "<tr>";
            echo "<td>" . $this->get_drug($drug) . "</td>";
            echo "<td>" . $row_grn['BatchNo'] . "</td>";
            echo "<td>" . $row_grn['SellingPrice'] . "</td>";
            echo "<td>" . $row_grn['PurchasedPrice'] . "</td>";
            echo "<td>" . $row_grn['Quantity'] . "</td>";
            echo "<td>" . $row_grn['Total'] . "</td>";
            echo "<td><a id = '" . $grn_id . "'  href='javascript: void(0);' class='action-icon btn_delGRN'> 
            <i class='mdi mdi-delete'></i></a></td>";
            echo "</tr>";
        }
        echo "</tbody>";

    }

    public function get_drug($drug)
    {
        $sql_get_drug = "SELECT * FROM drug WHERE Drug_Id = $drug";
        $res_get_drug = mysqli_query($this->sqlcon, $sql_get_drug);
        $row_get_drug = mysqli_fetch_array($res_get_drug);
        return $row_get_drug['BrandName'];
    }

    public function del_grn_detail($grn_id)
    {
        $sql_del_grn = "DELETE FROM tmp_grn_details WHERE GRN_Id = $grn_id";
        mysqli_query($this->sqlcon, $sql_del_grn);

    }

    public function get_grn_sum()
    {

        $sql_getgrn = "SELECT SUM(Total) AS Total FROM tmp_grn_details";
        $res_getgrn = mysqli_query($this->sqlcon, $sql_getgrn);
        $row_grn = mysqli_fetch_array($res_getgrn);
        return $row_grn['Total'];

    }

}
?>