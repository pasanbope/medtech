<?php
class Supplier
{
    private $sqlcon;

    // Constructor method to initialize the database connection.
    public function __construct()
    {
        // Include database configuration file
        if (file_exists('../db-config.php')) {
            include '../db-config.php';
        } else {
            include 'db-config.php';
        }
        // Create database connection
        $this->sqlcon = mysqli_connect($sql_server, $sql_username, $sql_password, $sql_database);
        // Check connection
        if (!$this->sqlcon) {
            die('Connection Failed :' . mysqli_connect_error());
        }
    }

    // Method to add a new supplier.
    public function add_supplier($CompanyName, $ContactPersonName, $Contactnumber, $Email)
    {
        $add_sup_sql = "INSERT INTO supplier(CompanyName, Contact_Person_Name, ContactNumber, Email) 
		VALUES('" . $CompanyName . "','" . $ContactPersonName . "','" . $Contactnumber . "','" . $Email . "')";
        mysqli_query($this->sqlcon, $add_sup_sql);
    }

    // Method to list all suppliers.
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

            echo "</tr>";
        }
        echo "</tbody>";
    }

    // Method to select suppliers for dropdowns.
    public function select_supplier()
    {
        $sql_sup = "select * from supplier";
        $res_sup = mysqli_query($this->sqlcon, $sql_sup);
        while ($row_sup = mysqli_fetch_array($res_sup)) {
            echo '<option value="' . $row_sup['Supplier_Id'] . '">' . $row_sup['Contact_Person_Name'] . ' ' . '</option>';
        }
    }
}
?>