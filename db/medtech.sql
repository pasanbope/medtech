-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 23, 2024 at 07:40 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medtech`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `Appointment_Id` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Doctor_Id` int(11) DEFAULT NULL,
  `Patient_Id` int(11) DEFAULT NULL,
  `Time` varchar(40) NOT NULL,
  `Patient_App_Num` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`Appointment_Id`, `Date`, `Doctor_Id`, `Patient_Id`, `Time`, `Patient_App_Num`) VALUES
(4, '2024-03-06', 1, 1, '', 0),
(5, '2024-03-06', 1, 2, '', 0),
(6, '2024-03-06', 1, 1, '', 0),
(7, '2024-03-06', 1, 2, '', 0),
(8, '2024-03-07', 1, 1, '', 0),
(9, '2024-03-07', 1, 2, '', 0),
(10, '2024-03-07', 1, 2, '', 0),
(11, '2024-03-15', 1, 1, '', 0),
(12, '2024-03-22', 1, 1, '', 0),
(13, '2024-04-06', 1, 5, '', 0),
(14, '2024-04-06', 1, 2, '', 0),
(15, '2024-04-06', 1, 4, '', 0),
(16, '2024-04-06', 1, 1, '', 0),
(17, '2024-04-11', 1, 1, '07:00:00', 0),
(18, '2024-04-11', 1, 3, '07:10:00', 0),
(19, '2024-04-13', 1, 1, '06:00:00', 1),
(20, '2024-04-13', 1, 4, '06:10:00', 1),
(21, '2024-04-13', 1, 8, '06:20:00', 1),
(22, '2024-04-13', 1, 4, '06:30:00', 2),
(23, '2024-04-09', 1, 4, '11:12:00', 1),
(24, '2024-04-09', 1, 3, '11:22:00', 2),
(25, '2024-04-17', 1, 1, '16:00:00', 1),
(26, '2024-04-17', 1, 3, '16:10:00', 2),
(27, '2024-04-17', 1, 2, '16:20:00', 3);

-- --------------------------------------------------------

--
-- Table structure for table `batch_stock`
--

CREATE TABLE `batch_stock` (
  `Drug_Id` int(11) NOT NULL,
  `Batch_No` varchar(255) NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `MadeDate` date DEFAULT NULL,
  `ExpireDate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch_stock`
--

INSERT INTO `batch_stock` (`Drug_Id`, `Batch_No`, `Quantity`, `MadeDate`, `ExpireDate`) VALUES
(1, '1', 27, '2024-04-01', '2024-05-01'),
(2, '1', 200, '2024-04-01', '2024-05-01'),
(3, '1', 100, '2024-04-01', '2024-05-01');

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doctor_Id` int(11) NOT NULL,
  `Title` varchar(10) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Telphone` varchar(20) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Designation` varchar(255) DEFAULT NULL,
  `NIC` varchar(15) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL,
  `Login_Id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctor_Id`, `Title`, `FirstName`, `LastName`, `Telphone`, `Address`, `Designation`, `NIC`, `Gender`, `Login_Id`) VALUES
(1, 'Prof.', 'Kaumini', 'Dilshika', '077-6575547', 'Ingiriya, Sri Lanka', 'Cardiologist', '20023343555', 'Female', 2),
(2, 'Dr.', 'Narada', 'Opanayake', '077-2287488', 'Egaloya', 'Neurologist', '198906821221', 'Male', 3);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_schedule`
--

CREATE TABLE `doctor_schedule` (
  `Schedule_Id` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Doctor_Id` int(11) DEFAULT NULL,
  `Sched_Time` time DEFAULT NULL,
  `Patient_Count` int(4) DEFAULT NULL,
  `Is_Enable` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor_schedule`
--

INSERT INTO `doctor_schedule` (`Schedule_Id`, `Date`, `Doctor_Id`, `Sched_Time`, `Patient_Count`, `Is_Enable`) VALUES
(1, '2024-03-14', 1, '22:32:00', 12, 1),
(2, '2024-03-05', 1, '22:55:00', 20, 1),
(3, '2024-03-06', 1, '23:20:00', 3, 1),
(4, '2024-03-07', 1, '23:22:00', 2, 1),
(5, '2024-03-08', 1, '04:25:00', 50, 1),
(6, '2024-03-09', 1, '04:28:00', 32, 1),
(7, '2024-03-10', 1, '05:00:00', 5, 1),
(8, '2024-03-11', 1, '07:00:00', 7, 1),
(9, '2024-03-12', 1, '08:00:00', 8, 1),
(10, '2024-03-13', 1, '09:00:00', 99, 1),
(11, '2024-03-15', 1, '21:22:00', 124, 1),
(12, '2024-03-16', 1, '21:59:00', 12, 1),
(13, '2024-03-17', 1, '21:56:00', 12, 1),
(14, '2024-03-18', 1, '21:00:00', 33, 1),
(15, '2024-03-19', 1, '21:56:00', 1, 1),
(16, '2024-03-22', 1, '22:45:00', 12, 1),
(17, '2024-04-09', 1, '11:12:00', 23, 1),
(18, '2024-04-10', 1, '05:00:00', 20, 1),
(19, '2024-04-11', 1, '13:00:00', 123, 1),
(20, '2024-04-12', 1, '06:00:00', 23, 1),
(21, '2024-04-13', 1, '08:10:00', 60, 1),
(22, '2024-04-14', 1, '20:00:00', 123, 1),
(23, '2024-04-17', 1, '16:00:00', 20, 1);

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `Drug_Id` int(11) NOT NULL,
  `MedicalName` varchar(255) DEFAULT NULL,
  `BrandName` varchar(255) DEFAULT NULL,
  `Rol` int(100) DEFAULT NULL,
  `Measure_Id` int(11) DEFAULT NULL,
  `Category_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drug`
--

INSERT INTO `drug` (`Drug_Id`, `MedicalName`, `BrandName`, `Rol`, `Measure_Id`, `Category_Id`) VALUES
(1, 'Acetaminophen', 'Panadol', 12, 2, 1),
(2, 'Acetylsalicylic acid', 'Aspirin', 10, 3, 1),
(3, 'Acetaminophen', 'Tylenol', 23, 3, 1),
(4, 'Amoxicillin', 'Amoxil', 20, 3, 1),
(5, 'Azithromycin', 'Zithromax', 28, 3, 1),
(6, 'Fluoxetine', 'Prozac', 90, 3, 1),
(7, 'Escitalopram', 'Lexapro', 200, 3, 1),
(8, 'Prinivil', 'Lisinopril', 90, 3, 1),
(9, 'Norvasc', 'Amlodipine', 89, 3, 1),
(10, 'Glucophage', 'Metformin', 19, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `drug_category`
--

CREATE TABLE `drug_category` (
  `Category_Id` int(11) NOT NULL,
  `Category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drug_category`
--

INSERT INTO `drug_category` (`Category_Id`, `Category`) VALUES
(1, 'Tablets'),
(2, 'Creram'),
(3, 'Syrup'),
(4, 'Powder'),
(5, 'bnn');

-- --------------------------------------------------------

--
-- Table structure for table `grn_details`
--

CREATE TABLE `grn_details` (
  `GRN_Id` int(100) NOT NULL,
  `Order_Id` int(11) DEFAULT NULL,
  `Drug_Id` int(11) DEFAULT NULL,
  `BatchNo` varchar(255) DEFAULT NULL,
  `MadeDate` date DEFAULT NULL,
  `ExpireDate` date DEFAULT NULL,
  `Rate` float(10,2) DEFAULT NULL,
  `PurchasedPrice` float(13,2) NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Total` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grn_details`
--

INSERT INTO `grn_details` (`GRN_Id`, `Order_Id`, `Drug_Id`, `BatchNo`, `MadeDate`, `ExpireDate`, `Rate`, `PurchasedPrice`, `Quantity`, `Total`) VALUES
(1, 6, 1, '1', '2024-04-01', '2024-05-01', 60.00, 50.00, 100, 5000.00),
(2, 6, 2, '1', '2024-04-01', '2024-05-01', 120.00, 100.00, 200, 20000.00),
(3, 6, 3, '1', '2024-04-01', '2024-05-01', 20.00, 10.00, 100, 1000.00);

-- --------------------------------------------------------

--
-- Table structure for table `grn_master`
--

CREATE TABLE `grn_master` (
  `Order_Id` int(11) NOT NULL,
  `Supplier_Id` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `TotalAmount` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grn_master`
--

INSERT INTO `grn_master` (`Order_Id`, `Supplier_Id`, `Date`, `TotalAmount`) VALUES
(6, 1, '2024-04-16', 26000.00);

-- --------------------------------------------------------

--
-- Table structure for table `measurement_type`
--

CREATE TABLE `measurement_type` (
  `Measure_Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `measurement_type`
--

INSERT INTO `measurement_type` (`Measure_Id`, `Name`) VALUES
(2, 'ml'),
(3, 'microgram'),
(4, 'millilitre'),
(5, 'we'),
(6, 'mmmjkkjkk');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `Patient_Id` int(11) NOT NULL,
  `Title` varchar(10) DEFAULT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Telephone` varchar(20) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`Patient_Id`, `Title`, `FirstName`, `LastName`, `Telephone`, `Address`, `Birthday`, `Gender`) VALUES
(1, 'Mr.', 'Tineth', 'Pathirage', '077-5467257', 'Aluthhena,Egaloya,Bulathsinhala', '2001-11-13', 'Male'),
(2, 'Mr.', 'Vinodya', 'Senarathne', '099-8877654', 'Moratuwa', '2001-03-08', 'Male'),
(3, 'Mr.', 'Narada', 'Opanayake', '456-5466645', 'Egaloya', '1989-03-06', 'Male'),
(4, 'Mr.', 'Tineth', 'parthirage', '433-3344334', 'gunabusa', '2020-03-06', 'Female'),
(5, 'Mr.', 'Tineth2522', 'parthirage', '433-3344334', 'gunabusa', '2024-03-06', 'Female'),
(6, 'Mr.', 'Tineth', 'parthirage', '433-3344334', 'gunabusa', '2024-03-06', 'Female'),
(7, 'Mr.', 'asdasda', 'sdasdadas', '344-24234', 'earradsfasfasd', '2024-03-14', 'Male'),
(8, 'Mr.', 'asdasda', 'sdasdadas', '344-24234', 'earradsfasfasd', '2024-03-14', 'Male'),
(9, 'Mr.', 'asdasda', 'sdasdadas', '344-24234', 'earradsfasfasd', '2024-03-14', 'Male'),
(10, 'Mr.', 'asdasda', 'sdasdadas', '344-24234', 'earradsfasfasd', '2024-03-14', 'Male'),
(11, 'Mr.', 'asdasda', 'sasasas', '344-24234', 'earradsfasfasd', '2024-03-14', 'Male'),
(12, 'Mr.', 'Nadeesha', 'Kalhara', '099-8899888', 'Thuththukudiya', '2000-03-08', 'Male'),
(13, 'Mrs.', 'sddd', 'sddd', '222-2222222', 'wwwwwww', '2024-03-15', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `patient_bill`
--

CREATE TABLE `patient_bill` (
  `Prescription_Id` int(11) NOT NULL,
  `Doctor_Charge` decimal(10,2) DEFAULT NULL,
  `Drug_Charge` decimal(10,2) DEFAULT NULL,
  `Total_Amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prescription_details`
--

CREATE TABLE `prescription_details` (
  `Prescription_Details_Id` int(11) NOT NULL,
  `Prescription_Id` int(11) DEFAULT NULL,
  `Drug_Id` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Frequency` varchar(1000) NOT NULL,
  `Remarks` varchar(1000) NOT NULL,
  `Adviced` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription_details`
--

INSERT INTO `prescription_details` (`Prescription_Details_Id`, `Prescription_Id`, `Drug_Id`, `Quantity`, `Frequency`, `Remarks`, `Adviced`) VALUES
(1, 14, 1, 10, 'Twice a day (BID or BD)', 'After Taking Foods', '2k bipan'),
(2, 14, 2, 5, 'Four times a day (QID or QD)', 'Befor Taking Foods', '3k bipan'),
(3, 14, 1, 10, 'Twice a day (BID or BD)', 'After Taking Foods', '2k bipan'),
(4, 14, 1, 10, 'Twice a day (BID or BD)', 'After Taking Foods', '2k bipan'),
(5, 14, 2, 5, 'Four times a day (QID or QD)', 'Befor Taking Foods', '3k bipan'),
(6, 14, 1, 10, 'Twice a day (BID or BD)', 'After Taking Foods', '2k bipan'),
(7, 14, 2, 5, 'Four times a day (QID or QD)', 'Befor Taking Foods', '3k bipan'),
(8, 14, 1, 10, 'Twice a day (BID or BD)', 'After Taking Foods', '2k bipan'),
(9, 14, 2, 5, 'Four times a day (QID or QD)', 'Befor Taking Foods', '3k bipan'),
(10, 14, 1, 10, 'Twice a day (BID or BD)', 'After Taking Foods', '2k bipan'),
(11, 14, 2, 5, 'Four times a day (QID or QD)', 'Befor Taking Foods', '3k bipan'),
(12, 15, 1, 20, 'Four times a day (QID or QD)', 'After Taking Foods', 'assas'),
(13, 16, 1, 3, 'Three times a day (TID or TDS)', 'Befor Taking Foods', 'wwww'),
(14, 17, 1, 2, 'Once a day (OD)', 'After Taking Foods', 'xcxcxcxc'),
(15, 18, 1, 2, 'Once a day (OD)', 'After Taking Foods', 'swdwsds'),
(16, 19, 1, 3, 'Every 6 hours', 'After Taking Foods', 'kljn'),
(17, 20, 1, 3, 'Four times a day (QID or QD)', 'After Taking Foods', 'sdsds');

-- --------------------------------------------------------

--
-- Table structure for table `prescription_master`
--

CREATE TABLE `prescription_master` (
  `Prescription_Id` int(11) NOT NULL,
  `Appointment_Id` int(11) DEFAULT NULL,
  `Patient_Id` int(11) DEFAULT NULL,
  `Doctor_Id` int(11) DEFAULT NULL,
  `P_Date` date DEFAULT NULL,
  `P_Time` time DEFAULT NULL,
  `P_Description` varchar(255) DEFAULT NULL,
  `Illness` varchar(255) DEFAULT NULL,
  `Test` varchar(200) DEFAULT NULL,
  `Is_issued` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `Drug_Id` int(11) NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Last_GRN_Date` date DEFAULT NULL,
  `Last_Bill_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `stock`
--

INSERT INTO `stock` (`Drug_Id`, `Quantity`, `Last_GRN_Date`, `Last_Bill_Date`) VALUES
(1, 27, '0000-00-00', '0000-00-00'),
(2, 200, '2024-04-16', '0000-00-00'),
(3, 100, '2024-04-16', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `Supplier_Id` int(11) NOT NULL,
  `CompanyName` varchar(255) DEFAULT NULL,
  `Contact_Person_Name` varchar(255) DEFAULT NULL,
  `ContactNumber` varchar(20) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`Supplier_Id`, `CompanyName`, `Contact_Person_Name`, `ContactNumber`, `Email`) VALUES
(1, 'State Pharmaceuticals Corporation of Sri Lanka (SPC)', 'Kumara Weerasingha', '077-5648844', 'kumara@gmail.com'),
(2, 'Ceylon Pharmaceutical Corporation Ltd (CPC) ', 'Amal Prasad', '078-7769894', 'amal@gmail.com'),
(3, 'Swiss Pharma Pvt Ltd', 'Jayalath Perera', '071-3398499', 'jayalath@gmail.com'),
(4, 'Hemas Pharmaceuticals Pvt Ltd ', 'Dilashan Saman', '072-3343775', 'dilshan@gmail.com'),
(5, 'Eva Pharma Pvt Ltd', 'Kamal Prasad', '077-8772787', 'kamal@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appoinment_number`
--

CREATE TABLE `tbl_appoinment_number` (
  `Doc_Id` int(11) NOT NULL,
  `App_Date` date NOT NULL,
  `App_Number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_appoinment_number`
--

INSERT INTO `tbl_appoinment_number` (`Doc_Id`, `App_Date`, `App_Number`) VALUES
(1, '2024-04-09', 3),
(1, '2024-04-13', 3),
(1, '2024-04-14', 1),
(1, '2024-04-17', 4);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_serial`
--

CREATE TABLE `tbl_serial` (
  `Serial_Id` int(100) NOT NULL,
  `Serial_Name` varchar(200) NOT NULL,
  `Serial_No` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_serial`
--

INSERT INTO `tbl_serial` (`Serial_Id`, `Serial_Name`, `Serial_No`) VALUES
(1, 'Order No', 7),
(2, 'Prescription No', 21);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_grn_details`
--

CREATE TABLE `tmp_grn_details` (
  `GRN_Id` int(11) NOT NULL,
  `Order_Id` int(11) DEFAULT NULL,
  `Drug_Id` int(11) DEFAULT NULL,
  `BatchNo` varchar(255) DEFAULT NULL,
  `MadeDate` date DEFAULT NULL,
  `ExpireDate` date DEFAULT NULL,
  `SellingPrice` float(12,2) DEFAULT NULL,
  `PurchasedPrice` float(12,2) NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Total` float(12,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_prescription_details`
--

CREATE TABLE `tmp_prescription_details` (
  `Pres_id` int(10) NOT NULL,
  `Prescription_NO` int(50) NOT NULL,
  `Batch_No` varchar(100) NOT NULL,
  `Expire_Date` date NOT NULL,
  `Drug_Id` int(100) NOT NULL,
  `Quantity` int(10) NOT NULL,
  `Frequency` varchar(100) NOT NULL,
  `Remarks` varchar(400) NOT NULL,
  `Adviced` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_Id` int(5) NOT NULL,
  `UserName` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Role_Id` int(11) DEFAULT NULL,
  `Enable` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_Id`, `UserName`, `Password`, `Email`, `Role_Id`, `Enable`) VALUES
(1, 'Pasan_B', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'pasan@abc.com', 1, 1),
(2, 'kaumini_d', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'kaumini@abc.com', 2, 1),
(3, 'naradado', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'narada@abc.com', 2, 1),
(4, 'kaveesh', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'kavee@abc.com', 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_log`
--

CREATE TABLE `user_log` (
  `Log_Id` int(100) NOT NULL,
  `Log_Date` date NOT NULL,
  `Log_Time` time NOT NULL,
  `Log_User` int(2) NOT NULL,
  `Log_Ip` varchar(60) NOT NULL,
  `Log_Cat` varchar(20) NOT NULL,
  `Log_Details` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_log`
--

INSERT INTO `user_log` (`Log_Id`, `Log_Date`, `Log_Time`, `Log_User`, `Log_Ip`, `Log_Cat`, `Log_Details`) VALUES
(1, '2024-03-14', '07:42:00', 1, '::1', 'insert', 'add new patient .$firstname'),
(2, '2024-03-14', '07:42:38', 1, '::1', 'insert', 'add new patient .$firstname'),
(3, '2024-03-14', '07:43:43', 1, '::1', 'insert', 'add new patient asdasda'),
(4, '2024-03-14', '07:44:37', 1, '::1', 'insert', 'add new patient asdasda sasasas'),
(5, '2024-03-20', '06:22:45', 3, '::1', 'insert', 'add new patient Nadeesha Kalhara'),
(6, '2024-03-21', '06:04:05', 1, '::1', 'insert', 'add new patient sddd sddd');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `Role_Id` int(11) NOT NULL,
  `RoleName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`Role_Id`, `RoleName`) VALUES
(1, 'super admin'),
(2, 'Doctor'),
(3, 'Pharmacist');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Appointment_Id`),
  ADD KEY `Patient_Id` (`Patient_Id`),
  ADD KEY `appointment_ibfk_1` (`Doctor_Id`);

--
-- Indexes for table `batch_stock`
--
ALTER TABLE `batch_stock`
  ADD PRIMARY KEY (`Drug_Id`,`Batch_No`);

--
-- Indexes for table `doctor`
--
ALTER TABLE `doctor`
  ADD PRIMARY KEY (`Doctor_Id`);

--
-- Indexes for table `doctor_schedule`
--
ALTER TABLE `doctor_schedule`
  ADD PRIMARY KEY (`Schedule_Id`),
  ADD KEY `Doctor_Id` (`Doctor_Id`);

--
-- Indexes for table `drug`
--
ALTER TABLE `drug`
  ADD PRIMARY KEY (`Drug_Id`),
  ADD KEY `Category_Id` (`Category_Id`),
  ADD KEY `drug_ibfk_2` (`Measure_Id`);

--
-- Indexes for table `drug_category`
--
ALTER TABLE `drug_category`
  ADD PRIMARY KEY (`Category_Id`);

--
-- Indexes for table `grn_details`
--
ALTER TABLE `grn_details`
  ADD PRIMARY KEY (`GRN_Id`);

--
-- Indexes for table `grn_master`
--
ALTER TABLE `grn_master`
  ADD PRIMARY KEY (`Order_Id`);

--
-- Indexes for table `measurement_type`
--
ALTER TABLE `measurement_type`
  ADD PRIMARY KEY (`Measure_Id`);

--
-- Indexes for table `patient`
--
ALTER TABLE `patient`
  ADD PRIMARY KEY (`Patient_Id`);

--
-- Indexes for table `patient_bill`
--
ALTER TABLE `patient_bill`
  ADD PRIMARY KEY (`Prescription_Id`);

--
-- Indexes for table `prescription_details`
--
ALTER TABLE `prescription_details`
  ADD PRIMARY KEY (`Prescription_Details_Id`);

--
-- Indexes for table `prescription_master`
--
ALTER TABLE `prescription_master`
  ADD PRIMARY KEY (`Prescription_Id`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD PRIMARY KEY (`Drug_Id`);

--
-- Indexes for table `supplier`
--
ALTER TABLE `supplier`
  ADD PRIMARY KEY (`Supplier_Id`);

--
-- Indexes for table `tbl_appoinment_number`
--
ALTER TABLE `tbl_appoinment_number`
  ADD PRIMARY KEY (`Doc_Id`,`App_Date`);

--
-- Indexes for table `tbl_serial`
--
ALTER TABLE `tbl_serial`
  ADD PRIMARY KEY (`Serial_Id`);

--
-- Indexes for table `tmp_grn_details`
--
ALTER TABLE `tmp_grn_details`
  ADD PRIMARY KEY (`GRN_Id`),
  ADD KEY `Order_Id` (`Order_Id`),
  ADD KEY `Drug_Id` (`Drug_Id`);

--
-- Indexes for table `tmp_prescription_details`
--
ALTER TABLE `tmp_prescription_details`
  ADD PRIMARY KEY (`Pres_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_Id`),
  ADD KEY `user_ibfk_1` (`Role_Id`);

--
-- Indexes for table `user_log`
--
ALTER TABLE `user_log`
  ADD PRIMARY KEY (`Log_Id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`Role_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `Appointment_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Doctor_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor_schedule`
--
ALTER TABLE `doctor_schedule`
  MODIFY `Schedule_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `drug`
--
ALTER TABLE `drug`
  MODIFY `Drug_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `drug_category`
--
ALTER TABLE `drug_category`
  MODIFY `Category_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `grn_details`
--
ALTER TABLE `grn_details`
  MODIFY `GRN_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `measurement_type`
--
ALTER TABLE `measurement_type`
  MODIFY `Measure_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Patient_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `prescription_details`
--
ALTER TABLE `prescription_details`
  MODIFY `Prescription_Details_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `supplier`
--
ALTER TABLE `supplier`
  MODIFY `Supplier_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_serial`
--
ALTER TABLE `tbl_serial`
  MODIFY `Serial_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tmp_grn_details`
--
ALTER TABLE `tmp_grn_details`
  MODIFY `GRN_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tmp_prescription_details`
--
ALTER TABLE `tmp_prescription_details`
  MODIFY `Pres_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `Log_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment`
--
ALTER TABLE `appointment`
  ADD CONSTRAINT `appointment_ibfk_1` FOREIGN KEY (`Doctor_Id`) REFERENCES `doctor` (`Doctor_Id`),
  ADD CONSTRAINT `appointment_ibfk_2` FOREIGN KEY (`Patient_Id`) REFERENCES `patient` (`Patient_Id`);

--
-- Constraints for table `doctor`
--
ALTER TABLE `doctor`
  ADD CONSTRAINT `doctor_ibfk_2` FOREIGN KEY (`Doctor_Id`) REFERENCES `user` (`User_Id`);

--
-- Constraints for table `doctor_schedule`
--
ALTER TABLE `doctor_schedule`
  ADD CONSTRAINT `doctor_schedule_ibfk_1` FOREIGN KEY (`Doctor_Id`) REFERENCES `doctor` (`Doctor_Id`);

--
-- Constraints for table `drug`
--
ALTER TABLE `drug`
  ADD CONSTRAINT `drug_ibfk_1` FOREIGN KEY (`Category_Id`) REFERENCES `drug_category` (`Category_Id`),
  ADD CONSTRAINT `drug_ibfk_2` FOREIGN KEY (`Measure_Id`) REFERENCES `measurement_type` (`Measure_Id`);

--
-- Constraints for table `patient_bill`
--
ALTER TABLE `patient_bill`
  ADD CONSTRAINT `patient_bill_ibfk_1` FOREIGN KEY (`Prescription_Id`) REFERENCES `prescription_master` (`Prescription_Id`);

--
-- Constraints for table `prescription_master`
--
ALTER TABLE `prescription_master`
  ADD CONSTRAINT `prescription_master_ibfk_1` FOREIGN KEY (`Appointment_Id`) REFERENCES `appointment` (`Appointment_Id`),
  ADD CONSTRAINT `prescription_master_ibfk_2` FOREIGN KEY (`Patient_Id`) REFERENCES `patient` (`Patient_Id`),
  ADD CONSTRAINT `prescription_master_ibfk_3` FOREIGN KEY (`Doctor_Id`) REFERENCES `doctor` (`Doctor_Id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Role_Id`) REFERENCES `user_roles` (`Role_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
