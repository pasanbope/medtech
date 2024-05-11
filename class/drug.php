<?php
class Drug
{
    private $sqlcon;


    // Constructor to establish database connection
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


    // Function to add a drug to the database
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


    // Function to list drugs
    public function list_drug()
    {
        echo "<tbody>";
        $sql_getdrug = "SELECT * FROM drug";
        $res_getdrug = mysqli_query($this->sqlcon, $sql_getdrug);
        while ($row_drug = mysqli_fetch_array($res_getdrug)) {
            $mesure_id = $row_drug['Measure_Id'];
            $category = $row_drug['Category_Id'];
            $Drug_Id = $row_drug['Drug_Id'];
            echo "<tr><td>" . $row_drug['Drug_Id'] . "</td>";
            echo "<td>" . $row_drug['MedicalName'] . "</td>";
            echo "<td>" . $row_drug['BrandName'] . "</td>";
            echo "<td>" . $row_drug['Rol'] . "</td>";
            echo "<td>" . $this->get_measurement($mesure_id) . "</td>";
            echo "<td>" . $this->get_category($category) . "</td>";

            echo "</tr>";

        }
        echo "</tbody>";

    }


    // Function to add a drug category
    public function add_drugcat($Catogary)
    {

        $add_drugcat_sql = "INSERT INTO drug_category(Category) 
		VALUES('" . $Catogary . "')";
        mysqli_query($this->sqlcon, $add_drugcat_sql);
    }


    // Function to add a drug measurement type
    public function add_drugmesure($name)
    {

        $add_drugmesure_sql = "INSERT INTO measurement_type(Name) 
		VALUES('" . $name . "')";
        mysqli_query($this->sqlcon, $add_drugmesure_sql);
    }



    // Function to retrieve measurement type by ID
    public function get_measurement($mes_id)
    {
        $sql_get_measure = "SELECT * FROM measurement_type WHERE Measure_Id = $mes_id";
        $res_get_measure = mysqli_query($this->sqlcon, $sql_get_measure);
        $row_get_measure = mysqli_fetch_array($res_get_measure);
        return $row_get_measure['Name'];
    }


    // Function to retrieve drug category by ID
    public function get_category($cat_id)
    {
        $sql_get_category = "SELECT * FROM drug_category WHERE Category_Id = $cat_id";
        $res_get_category = mysqli_query($this->sqlcon, $sql_get_category);
        $row_get_category = mysqli_fetch_array($res_get_category);
        return $row_get_category['Category'];
    }


    // Function to select a drug
    public function select_drug()
    {
        $sql_drug = "select * from drug";
        $res_drug = mysqli_query($this->sqlcon, $sql_drug);
        while ($row_drug = mysqli_fetch_array($res_drug)) {
            echo '<option value="' . $row_drug['Drug_Id'] . '">' . $row_drug['BrandName'] . ' ' . '</option>';
        }
    }


    // Function to select batch from a drug
    public function select_batch_from_drug($drug_id)
    {
        $sql_drug = "SELECT * from batch_stock WHERE Drug_Id = $drug_id";
        $res_drug = mysqli_query($this->sqlcon, $sql_drug);
        while ($row_drug = mysqli_fetch_array($res_drug)) {
            echo '<option value="' . $row_drug['Batch_No'] . '">' . $row_drug['Batch_No'] . ' ' . '</option>';
        }
    }


    // Function to add GRN detail
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


    // Function to list GRN detail
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


    // Function to get drug name by ID
    public function get_drug($drug)
    {
        $sql_get_drug = "SELECT * FROM drug WHERE Drug_Id = $drug";
        $res_get_drug = mysqli_query($this->sqlcon, $sql_get_drug);
        $row_get_drug = mysqli_fetch_array($res_get_drug);
        return $row_get_drug['BrandName'];
    }


    // Function to get drug medical name by ID
    public function get_drug_med($drug)
    {
        $sql_get_drug = "SELECT * FROM drug WHERE Drug_Id = $drug";
        $res_get_drug = mysqli_query($this->sqlcon, $sql_get_drug);
        $row_get_drug = mysqli_fetch_array($res_get_drug);
        return $row_get_drug['MedicalName'];
    }


    // Function to delete GRN detail by ID
    public function del_grn_detail($grn_id)
    {
        $sql_del_grn = "DELETE FROM tmp_grn_details WHERE GRN_Id = $grn_id";
        mysqli_query($this->sqlcon, $sql_del_grn);

    }


    // Function to get total GRN amount by order ID
    public function get_grn_sum($order_id)
    {

        $sql_getgrn = "SELECT SUM(Total) AS Total FROM tmp_grn_details WHERE Order_Id = $order_id";
        $res_getgrn = mysqli_query($this->sqlcon, $sql_getgrn);
        $row_grn = mysqli_fetch_array($res_getgrn);
        return $row_grn['Total'];

    }


    // Function to get serial number by name
    public function get_SerialNo($serial_name)
    {

        $sql_get_SerialNo = "SELECT * FROM tbl_serial WHERE Serial_Name = '$serial_name'";
        $res_get_SerialNo = mysqli_query($this->sqlcon, $sql_get_SerialNo);
        $row_get_SerialNo = mysqli_fetch_array($res_get_SerialNo);
        return $row_get_SerialNo['Serial_No'];

    }


    // Function to update serial number by name
    public function update_SerialNo($serial_name, $serial_no)
    {

        $sql_update_SerialNo = "UPDATE tbl_serial SET Serial_No = $serial_no WHERE Serial_Name = '$serial_name'";
        mysqli_query($this->sqlcon, $sql_update_SerialNo);

    }


    // Function to generate new serial number by name
    public function genarate_new_serial($serial_name, $serial_no)
    {

        $current_serial = $this->get_SerialNo($serial_name);
        $new_serial = $current_serial + 1;
        $this->update_SerialNo($serial_name, $new_serial);
    }


    // Function to update GRN details
    public function update_GRNDetails($order_id, $supplier_id, $date)
    {
        $sql_getgrn = "SELECT * FROM tmp_grn_details WHERE Order_Id	= $order_id";
        $res_getgrn = mysqli_query($this->sqlcon, $sql_getgrn);
        while ($row_grn = mysqli_fetch_array($res_getgrn)) {

            $grn_id = $row_grn['GRN_Id'];
            $drug = $row_grn['Drug_Id'];
            $batch = $row_grn['BatchNo'];
            $made_date = $row_grn['MadeDate'];
            $exp_date = $row_grn['ExpireDate'];
            $Sell = $row_grn['SellingPrice'];
            $purchased = $row_grn['PurchasedPrice'];
            $qty = $row_grn['Quantity'];
            $total = $row_grn['Total'];

            $this->add_grn_details($order_id, $drug, $batch, $made_date, $exp_date, $Sell, $purchased, $qty, $total);

            if ($this->get_stock_availability($drug) > 0) {
                $current_stock = $this->get_stock($drug);
                $new_stock = $current_stock + $qty;
                $this->update_stock($drug, $new_stock, $date);

            } else {
                $this->add_stock($drug, $qty, $date, '0000-00-00');
            }
            if ($this->get_batch_stockAvailability($drug, $batch) > 0) {
                $current_batch_stock = $this->get_batch_stockAvailability($drug, $batch);
                $new_batch_stock = $current_batch_stock + $qty;
                $this->update_batch_stock($drug, $batch, $new_batch_stock);
            } else {
                $this->add_batch_stock($drug, $batch, $qty, $made_date, $exp_date);
            }
        }

        $net_total = $this->get_grn_sum($order_id);
        $sql_delgrn = "DELETE FROM tmp_grn_details WHERE Order_Id = $order_id";
        mysqli_query($this->sqlcon, $sql_delgrn);
        $this->add_grn_master($order_id, $supplier_id, $date, $net_total);
    }


    // Function to add GRN detail to main table
    public function add_grn_details($order_id, $drug, $batch, $made_date, $exp_date, $Sell, $purchased, $qty, $total)
    {
        $sql_addgrn = "INSERT INTO grn_details (Order_Id, Drug_Id, BatchNo, MadeDate, ExpireDate, Rate, PurchasedPrice, Quantity, Total) VALUES ($order_id, $drug, '$batch', '$made_date', '$exp_date', $Sell, $purchased, $qty, $total)";
        if (mysqli_query($this->sqlcon, $sql_addgrn)) {
            return True;
        } else {
            return False;
        }
    }


    // Function to get current stock quantity by drug ID
    public function get_stock($drug_id)
    {
        $sql_get_stock = "SELECT * FROM stock WHERE Drug_Id = $drug_id";
        $res_get_stock = mysqli_query($this->sqlcon, $sql_get_stock);
        $row_get_stock = mysqli_fetch_array($res_get_stock);
        return $row_get_stock['Quantity'];
    }


    // Function to get current batch stock quantity by drug ID and batch number
    public function get_batch_stock($drug_id, $batch_no)
    {
        $sql_get_bstock = "SELECT * FROM batch_stock WHERE Drug_Id = $drug_id AND Batch_No = '$batch_no'";
        $res_get_bstock = mysqli_query($this->sqlcon, $sql_get_bstock);
        $row_get_bstock = mysqli_fetch_array($res_get_bstock);
        return $row_get_bstock['Quantity'];
    }


    // Function to check availability of stock by drug ID
    public function get_stock_availability($drug_id)
    {
        $sql_get_count = "SELECT * FROM stock WHERE Drug_Id = $drug_id";
        $res_get_count = mysqli_query($this->sqlcon, $sql_get_count);
        $row_get_count = mysqli_num_rows($res_get_count);
        return $row_get_count;
    }


    // Function to check availability of batch stock by drug ID and batch number
    public function get_batch_stockAvailability($drug_id, $batch_no)
    {
        $sql_get_bstock = "SELECT * FROM batch_stock WHERE Drug_Id = $drug_id AND Batch_No = '$batch_no'";
        $res_get_bstock = mysqli_query($this->sqlcon, $sql_get_bstock);
        $row_get_bstock = mysqli_num_rows($res_get_bstock);
        return $row_get_bstock;
    }


    // Function to add stock
    public function add_stock($drug_id, $Qty, $last_grn_date, $last_bill_date)
    {

        $add_stock_sql = "INSERT INTO stock (Drug_Id, Quantity, Last_GRN_Date, Last_Bill_Date ) 
		VALUES($drug_id, $Qty, '$last_grn_date', '$last_bill_date')";
        if (mysqli_query($this->sqlcon, $add_stock_sql)) {
            return True;
        } else {
            return False;
        }
    }


    // Function to add batch stock
    public function add_batch_stock($drug_id, $batch_no, $qty, $made_date, $exp_date)
    {
        $add_batchstock_sql = "INSERT INTO batch_stock (Drug_Id, Batch_No, Quantity, MadeDate, ExpireDate ) 
		VALUES($drug_id, '$batch_no', $qty, '$made_date', '$exp_date')";
        if (mysqli_query($this->sqlcon, $add_batchstock_sql)) {
            return True;
        } else {
            return False;
        }
    }


    // Function to update stock
    public function update_stock($drug_id, $Qty, $last_grn_date = '0000-00-00')
    {
        $sql_update = "UPDATE stock SET Quantity = $Qty , Last_GRN_Date = '$last_grn_date' WHERE Drug_Id  = $drug_id";
        mysqli_query($this->sqlcon, $sql_update);
    }


    // Function to update batch stock
    public function update_batch_stock($drug_id, $batch_no, $qty)
    {
        $sql_update = "UPDATE batch_stock SET Quantity = $qty WHERE Drug_Id = $drug_id AND Batch_No = '$batch_no'";
        mysqli_query($this->sqlcon, $sql_update);
    }


    // Function to list stock
    public function list_stock()
    {
        echo "<tbody>";
        $sql_getstock = "SELECT * FROM stock";
        $res_getstock = mysqli_query($this->sqlcon, $sql_getstock);
        while ($row_stock = mysqli_fetch_array($res_getstock)) {
            $drug = $row_stock['Drug_Id'];
            $rol = $this->get_drug_details($drug, 'Rol');
            $qty = $row_stock['Quantity'];
            if ($qty <= $rol) {
                echo "<tr style='background-color: #f5abab;'>";
            } else {
                echo "<tr>";
            }
            echo "<td>" . $this->get_drug($drug) . "</td>";
            echo "<td>" . $row_stock['Quantity'] . "</td>";
            echo "<td>" . $row_stock['Last_GRN_Date'] . "</td>";
            echo "<td>" . $row_stock['Last_Bill_Date'] . "</td>";

            echo "</tr>";
        }
        echo "</tbody>";

    }


    // Function to list batch stock
    public function list_batch_stock()
    {
        echo "<tbody>";
        $sql_get_bachstock = "SELECT * FROM batch_stock";
        $res_get_bachstock = mysqli_query($this->sqlcon, $sql_get_bachstock);
        while ($row_batchstock = mysqli_fetch_array($res_get_bachstock)) {
            $drug = $row_batchstock['Drug_Id'];
            echo "<td>" . $this->get_drug($drug) . "</td>";
            echo "<td>" . $row_batchstock['Batch_No'] . "</td>";
            echo "<td>" . $row_batchstock['Quantity'] . "</td>";
            echo "<td>" . $row_batchstock['MadeDate'] . "</td>";
            echo "<td>" . $row_batchstock['ExpireDate'] . "</td>";

            echo "</tr>";
        }
        echo "</tbody>";

    }



    // Function to check GRN items by order ID
    public function check_grn_items($order_id)
    {
        $sql_check_grn = "SELECT * FROM tmp_grn_details WHERE Order_Id = $order_id";
        $res_check_grn = mysqli_query($this->sqlcon, $sql_check_grn);
        $row_check_grn = mysqli_num_rows($res_check_grn);
        return $row_check_grn;
    }


    // Function to add GRN master
    public function add_grn_master($order_id, $supplier_id, $date, $total_amount)
    {

        $add_grn_master = "INSERT INTO grn_master (Order_Id, Supplier_Id, Date, TotalAmount) 
		VALUES($order_id, $supplier_id, '$date', $total_amount)";
        if (mysqli_query($this->sqlcon, $add_grn_master)) {
            return True;
        } else {
            return False;
        }
    }


    // Function to get batch stock details by drug ID and batch number
    public function get_batch_stock_details($drug_id, $batch_no)
    {
        $sql_get_batch = "SELECT * FROM batch_stock WHERE Drug_Id = $drug_id AND Batch_No = '$batch_no'";
        $res_get_batch = mysqli_query($this->sqlcon, $sql_get_batch);
        $row_get_batch = mysqli_fetch_array($res_get_batch);
        return json_encode($row_get_batch);
    }


    // Function to get total number of drugs
    public function get_drugs_num()
    {
        $sql_get_count = "SELECT * FROM drug ";
        $res_get_count = mysqli_query($this->sqlcon, $sql_get_count);
        $row_get_count = mysqli_num_rows($res_get_count);
        return $row_get_count;
    }


    // Function to get count of drugs expiring soon
    public function expire_soon_drug_count($date)
    {
        $sql_get_exp_count = "SELECT * FROM batch_stock WHERE ExpireDate <= '$date'";
        $res_get_exp_count = mysqli_query($this->sqlcon, $sql_get_exp_count);
        $row_get_exp_count = mysqli_num_rows($res_get_exp_count);
        return $row_get_exp_count;
    }


    // Function to get details of drugs expiring soon
    public function expire_soon_drug_detais($date, $date2)
    {
        $sql_get_exp = "SELECT * FROM batch_stock WHERE ExpireDate <= '$date'";
        $res_get_exp = mysqli_query($this->sqlcon, $sql_get_exp);
        while ($row_get_exp = mysqli_fetch_array($res_get_exp)) {
            $exp_date = $row_get_exp['ExpireDate'];
            $drug_id = $row_get_exp['Drug_Id'];
            ?>
            <tr>
                <td>
                    <h5 class="font-14 my-1"><a href="javascript:void(0);"
                            class="text-body"><?php echo $this->get_drug($drug_id); ?></a></h5>
                    <h5 class="font-14 mt-1 fw-normal"><?php echo $this->get_drug_med($drug_id); ?></h5>
                </td>
                <td>
                    <span class="text-muted font-13">Status</span> <br />
                    <?php if ($exp_date <= $date2) { ?>
                        <span class="badge badge-danger-lighten">Expired</span>
                    <?php } else { ?>
                        <span class="badge badge-warning-lighten">Expire Soon</span>
                    <?php } ?>
                </td>
                <td>
                    <span class="text-muted font-13"><?php echo $row_get_exp['MadeDate']; ?></span>
                    <h5 class="font-14 mt-1 fw-normal">Manufactured</h5>
                </td>
                <td>
                    <span class="text-muted font-13"><?php echo $row_get_exp['ExpireDate']; ?></span>
                    <h5 class="font-14 mt-1 fw-normal">Expire</h5>
                </td>

            </tr>
            <?php
        }

    }


    // Function to get drug details by drug ID and column name
    public function get_drug_details($drug, $col)
    {
        $sql_get_drug_det = "SELECT * FROM drug WHERE Drug_Id = $drug";
        $res_get_drug_det = mysqli_query($this->sqlcon, $sql_get_drug_det);
        $row_get_drug_det = mysqli_fetch_array($res_get_drug_det);
        return $row_get_drug_det[$col];
    }

    // Get drug medical name.
    public function get_drug_listGRN_med($drug)
    {
        $sql_get_drug = "SELECT * FROM drug WHERE Drug_Id = $drug";
        $res_get_drug = mysqli_query($this->sqlcon, $sql_get_drug);
        $row_get_drug = mysqli_fetch_array($res_get_drug);
        return $row_get_drug['MedicalName'];
    }

    // Function to List GRN
    public function list_grn()
    {

        echo "<tbody>";
        $sql_getgrn_details = "SELECT * FROM grn_details";
        $res_getgrn_details = mysqli_query($this->sqlcon, $sql_getgrn_details);
        while ($row_grn_details = mysqli_fetch_array($res_getgrn_details)) {
            $grn_id = $row_grn_details['GRN_Id'];
            $drug = $row_grn_details['Drug_Id'];
            echo "<tr>";
            echo "<td>" . $row_grn_details['GRN_Id'] . "</td>";
            echo "<td>" . $row_grn_details['Order_Id'] . "</td>";
            echo "<td data-bs-toggle='popover' data-bs-trigger='hover' data-bs-content='" . $this->get_drug_listGRN_med($drug) . "' title='Medical Name'>" . $this->get_drug($drug) . "
            </td>";
            echo "<td>" . $row_grn_details['BatchNo'] . "</td>";
            echo "<td>" . $row_grn_details['MadeDate'] . "</td>";
            echo "<td>" . $row_grn_details['ExpireDate'] . "</td>";
            echo "<td>" . $row_grn_details['Rate'] . "</td>";
            echo "<td>" . $row_grn_details['PurchasedPrice'] . "</td>";
            echo "<td>" . $row_grn_details['Quantity'] . "</td>";
            echo "<td>" . $row_grn_details['Total'] . "</td>";
            echo "<td><a id = '" . $grn_id . "'  href='javascript: void(0);' class='action-icon btn_delGRN'> 
            <i class='mdi mdi-delete'></i></a></td>";
            echo "</tr>";
        }
        echo "</tbody>";

    }

    public function list_grn_by_order($orderId)
    {

        echo "<tbody>";
        $sql_getgrn_details = "SELECT * FROM grn_details WHERE Order_Id = $orderId";
        $res_getgrn_details = mysqli_query($this->sqlcon, $sql_getgrn_details);
        while ($row_grn_details = mysqli_fetch_array($res_getgrn_details)) {
            $grn_id = $row_grn_details['GRN_Id'];
            $drug = $row_grn_details['Drug_Id'];
            echo "<tr>";
            echo "<td>" . $row_grn_details['GRN_Id'] . "</td>";
            echo "<td data-bs-toggle='popover' data-bs-trigger='hover' data-bs-content='" . $this->get_drug_listGRN_med($drug) . "' title='Medical Name'>" . $this->get_drug($drug) . "
            </td>";
            echo "<td>" . $row_grn_details['BatchNo'] . "</td>";
            echo "<td>" . $row_grn_details['ExpireDate'] . "</td>";
            echo "<td>" . $row_grn_details['Rate'] . "</td>";
            echo "<td>" . $row_grn_details['PurchasedPrice'] . "</td>";
            echo "<td>" . $row_grn_details['Quantity'] . "</td>";
            echo "<td>" . $row_grn_details['Total'] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";

    }


}
?>