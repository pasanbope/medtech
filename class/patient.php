<?php

class Patient
{
	private $sqlcon;

	// Constructor method to initialize the database connection.
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


	// Add a patient to the database.
	public function add_patient($title, $firstname, $lastname, $tel, $address, $birthday, $gender)
	{

		$add_patient_sql = "INSERT INTO patient(Title, FirstName, LastName, Telephone, Address, Birthday, Gender) 
		VALUES('" . $title . "','" . $firstname . "','" . $lastname . "','" . $tel . "','" . $address . "','" . $birthday . "','" . $gender . "')";
		mysqli_query($this->sqlcon, $add_patient_sql);
	}


	// List all patients.
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

			echo "</tr>";
		}
		echo "</tbody>";

	}


	// Select a patient.
	public function select_patient($P_id = 1)
	{
		$sql_pat = "SELECT * from patient";
		$res_pat = mysqli_query($this->sqlcon, $sql_pat);
		while ($row_pat = mysqli_fetch_array($res_pat)) {
			$patient_id = $row_pat['Patient_Id'];
			echo '<option ' . ($patient_id == $P_id ? 'selected' : '') . ' value="' . $row_pat['Patient_Id'] . '">' . $row_pat['Title'] . ' ' . $row_pat['FirstName'] . ' ' . $row_pat['LastName'] . '</option>';
		}
	}

	// Get details of a patient by ID.
	public function get_details_By_Id($patient_id = 0, $col)
	{
		$sql_pat_details = "SELECT * FROM patient WHERE Patient_Id = $patient_id";
		$res_pat_details = mysqli_query($this->sqlcon, $sql_pat_details);
		$row_pat_details_count = mysqli_num_rows($res_pat_details);
		if ($row_pat_details_count != 0) {
			$row_pat_details = mysqli_fetch_array($res_pat_details);
			return $row_pat_details[$col];
		} else {
			return 0;
		}

	}


	// Get age from birthday.
	public function get_birthday($bday = 0)
	{
		if ($bday == 0) {
			return 0;
		} else {
			$age = date_diff(date_create($bday), date_create('today'))->y;
			return $age;
		}
	}


	// Get the total number of patients.
	public function get_pat_num()
	{
		$sql_get_pat_num = "SELECT * FROM patient ";
		$res_get_pat_num = mysqli_query($this->sqlcon, $sql_get_pat_num);
		$row_get_pat_num = mysqli_num_rows($res_get_pat_num);
		return $row_get_pat_num;
	}

}

?>