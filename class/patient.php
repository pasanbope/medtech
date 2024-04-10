<?php

class Patient
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

	public function add_patient($title, $firstname, $lastname, $tel, $address, $birthday, $gender)
	{

		$add_patient_sql = "INSERT INTO patient(Title, FirstName, LastName, Telephone, Address, Birthday, Gender) 
		VALUES('" . $title . "','" . $firstname . "','" . $lastname . "','" . $tel . "','" . $address . "','" . $birthday . "','" . $gender . "')";
		mysqli_query($this->sqlcon, $add_patient_sql);
	}

	public function list_patient()
	{
		echo "<tbody>";
		$sql_getpat = "SELECT * FROM patient";
		$res_getpat = mysqli_query($this->sqlcon, $sql_getpat);
		while ($row_pats = mysqli_fetch_array($res_getpat)) {
			echo "<tr><td>" . $row_pats['Patient_Id'] . "</td>";
			echo "<td>" . $row_pats['Title'] . " " . $row_pats['FirstName'] . " " . $row_pats['LastName'] . "</td>";
			echo "<td>" . $row_pats['Telephone'] . "</td>";
			echo "<td>" . $row_pats['Birthday'] . "</td>";
			echo "<td>" . $row_pats['Address'] . "</td>";

			echo "<td> <a href='#' data-id='" . $row_pats['Patient_Id'] . "'";
			echo "class='action-icon btn_edit' data-bs-target='#full-width-modal' data-bs-toggle='modal'> 
			<iclass='mdi mdi-square-edit-outline'></i></a>
            <a href='javascript:void(0);' class='action-icon'> <i class='mdi mdi-delete'></i></a>
            </td></tr>";
		}
		echo "</tbody>";

	}

	public function select_patient($P_id = 1)
	{
		$sql_pat = "SELECT * from patient";
		$res_pat = mysqli_query($this->sqlcon, $sql_pat);
		while ($row_pat = mysqli_fetch_array($res_pat)) {
			$patient_id = $row_pat['Patient_Id'];
			echo '<option ' . ($patient_id == $P_id ? 'selected' : '') . ' value="' . $row_pat['Patient_Id'] . '">' . $row_pat['Title'] . ' ' . $row_pat['FirstName'] . ' ' . $row_pat['LastName'] . '</option>';
		}
	}

	public function get_details_By_Id($patient_id, $col)
	{
		$sql_pat_details = "SELECT * FROM patient WHERE Patient_Id = $patient_id";
		$res_pat_details = mysqli_query($this->sqlcon, $sql_pat_details);
		$row_pat_details = mysqli_fetch_array($res_pat_details);
		return $row_pat_details[$col];
	}

}

?>