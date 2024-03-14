<?php
class Supplier
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

    public function add_supplier($CompanyName, $ContactPersonName, $Contactnumber, $Email)
    {

        $add_sup_sql = "INSERT INTO supplier(CompanyName, Contact_Person_Name, ContactNumber, Email) 
		VALUES('" . $CompanyName . "','" . $ContactPersonName . "','" . $Contactnumber . "','" . $Email . "')";
        mysqli_query($this->sqlcon, $add_sup_sql);
    }

    public function list_supplier()
    {
        echo "<tbody>";
        $sql_getsup = "SELECT * FROM supplier";
        $res_getsup = mysqli_query($this->sqlcon, $sql_getsup);
        while ($row_sup = mysqli_fetch_array($res_getsup)) {
            echo "<tr><td>" . $row_sup['Supplier_Id'] . "</td>";
            echo "<td>" . $row_sup['CompanyName'] . "</td>";
            echo "<td>" . $row_sup['Contact_Person_Name'] . "</td>";
            echo "<td>" . $row_sup['ContactNumber'] . "</td>";
            echo "<td>" . $row_sup['Email'] . "</td>";

            echo "<td> <a href='#' data-id='" . $row_sup['Supplier_Id'] . "'";
            echo "class='action-icon btn_edit' data-bs-target='#full-width-modal' data-bs-toggle='modal'> 
			<iclass='mdi mdi-square-edit-outline'></i></a>
            <a href='javascript:void(0);' class='action-icon'> <i class='mdi mdi-delete'></i></a>
            </td></tr>";
        }
        echo "</tbody>";

    }
}
?>