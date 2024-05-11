-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 11, 2024 at 08:50 PM
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
(1, '2024-05-06', 1, 1, '02:00:00', 1),
(2, '2024-05-11', 1, 4, '04:36:00', 1),
(3, '2024-05-11', 1, 2, '04:46:00', 2),
(4, '2024-05-11', 1, 5, '04:56:00', 3),
(5, '2024-05-11', 1, 3, '05:06:00', 4),
(6, '2024-05-11', 2, 5, '13:00:00', 1),
(7, '2024-05-11', 2, 4, '13:10:00', 2);

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
(1, '11', 68, '2020-03-04', '2024-05-05'),
(2, '13', 33, '2024-05-01', '2024-05-20'),
(3, '12B', 68, '2024-02-20', '2026-06-09'),
(4, '1211B', 100, '2020-02-05', '2028-06-06'),
(4, '14C', 200, '2024-01-02', '2026-05-03'),
(5, '234dD', 0, '2024-05-07', '2029-01-08'),
(8, '133D', 500, '2021-07-08', '2028-10-17'),
(10, '12M', 100, '2020-06-02', '2037-07-08');

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
  `Doc_charge` float(11,2) NOT NULL,
  `Login_Id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctor`
--

INSERT INTO `doctor` (`Doctor_Id`, `Title`, `FirstName`, `LastName`, `Telphone`, `Address`, `Designation`, `NIC`, `Gender`, `Doc_charge`, `Login_Id`) VALUES
(1, 'Prof.', 'Kaumini', 'Dilshika', '077-6575547', 'Ingiriya, Sri Lanka', 'Cardiologist', '20023343555', 'Female', 2500.00, 2),
(2, 'Dr.', 'Narada', 'Opanayake', '077-2287488', 'Egaloya', 'Neurologist', '198906821221', 'Male', 2000.00, 3);

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
(1, '2024-04-27', 1, '17:00:00', 12, 1),
(2, '2024-05-06', 1, '02:00:00', 12, 1),
(3, '2024-05-11', 1, '04:36:00', 10, 1),
(4, '2024-05-13', 1, '05:00:00', 20, 1),
(5, '2024-05-14', 1, '06:00:00', 58, 1),
(6, '2024-05-15', 1, '03:00:00', 20, 1),
(7, '2024-05-11', 2, '13:00:00', 10, 1),
(8, '2024-05-13', 2, '02:00:00', 23, 1);

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
(1, 'Paracitamol', 'Panadol', 12, 2, 1),
(2, 'Acetylsalicylic acid', 'Aspirin', 45, 3, 1),
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
(1, 1, 1, '11', '2020-03-04', '2029-07-12', 12.00, 10.00, 100, 1000.00),
(2, 1, 2, '13', '2024-05-01', '2029-05-01', 14.00, 12.00, 50, 600.00),
(3, 2, 3, '12B', '2024-02-20', '2026-06-09', 130.00, 120.00, 100, 12000.00),
(4, 2, 4, '14C', '2024-01-02', '2026-05-03', 14.00, 12.00, 200, 2400.00),
(5, 3, 4, '1211B', '2020-02-05', '2028-06-06', 25.00, 20.00, 100, 2000.00),
(6, 3, 5, '234dD', '2024-05-07', '2029-01-08', 5.00, 2.00, 10, 20.00),
(7, 3, 10, '12M', '2020-06-02', '2037-07-08', 50.00, 45.00, 100, 4500.00),
(8, 3, 8, '133D', '2021-07-08', '2028-10-17', 8.00, 10.00, 500, 5000.00);

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
(1, 2, '2024-05-06', 1600.00),
(2, 4, '2024-05-10', 14400.00),
(3, 3, '2024-05-11', 11520.00);

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
(1, 'Mrs.', 'Vinodya', 'Senarathne', '077-6899997', 'Moratuwa', '2001-03-08', 'Female'),
(2, 'Mr.', 'Tineth', 'Pathirage', '077-8177928', 'Aluthhena, Egaloya', '2001-06-06', 'Male'),
(3, 'Mrs.', 'Kalpani', 'Jayasinghe', '077-6765565', 'Matugama', '1998-06-10', 'Female'),
(4, 'Mr.', 'Chamindu', 'Janith', '077-3245144', 'Horana', '2001-03-01', 'Male'),
(5, 'Mrs.', 'Yamuna', 'Malkanthi', '077-6564533', 'Bulathsinhala', '1972-07-05', 'Female');

-- --------------------------------------------------------

--
-- Table structure for table `patient_bill`
--

CREATE TABLE `patient_bill` (
  `Prescription_Id` int(11) NOT NULL,
  `Doctor_Charge` float(10,2) DEFAULT NULL,
  `Drug_Charge` float(10,2) DEFAULT NULL,
  `Drug_Cost` float(10,2) NOT NULL,
  `Total_Amount` float(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient_bill`
--

INSERT INTO `patient_bill` (`Prescription_Id`, `Doctor_Charge`, `Drug_Charge`, `Drug_Cost`, `Total_Amount`) VALUES
(1, 2500.00, 214.00, 180.00, 2714.00),
(2, 2500.00, 2720.00, 2500.00, 5220.00),
(3, 2500.00, 1610.00, 1460.00, 4110.00),
(4, 2000.00, 288.00, 244.00, 2288.00);

-- --------------------------------------------------------

--
-- Table structure for table `prescription_details`
--

CREATE TABLE `prescription_details` (
  `Prescription_Details_Id` int(11) NOT NULL,
  `Prescription_Id` int(11) DEFAULT NULL,
  `Drug_Id` int(11) DEFAULT NULL,
  `Batch_No` varchar(100) NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Frequency` varchar(1000) NOT NULL,
  `Remarks` varchar(1000) NOT NULL,
  `Adviced` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `prescription_details`
--

INSERT INTO `prescription_details` (`Prescription_Details_Id`, `Prescription_Id`, `Drug_Id`, `Batch_No`, `Quantity`, `Frequency`, `Remarks`, `Adviced`) VALUES
(1, 1, 1, '11', 12, 'Once a day (OD)', 'After Taking Foods', 'meka bipan'),
(2, 1, 2, '13', 5, 'Four times a day (QID or QD)', 'Befor Taking Foods', 'meka bipan'),
(3, 2, 1, '11', 10, 'Every 6 hours', 'After Taking Foods', 'අනි​වා'),
(4, 2, 3, '12B', 20, 'Every 6 hours', 'Befor Taking Foods', 'අනි​වා'),
(5, 3, 3, '12B', 12, 'Every 6 hours', 'Befor Taking Foods', 'මතක තියාගනි​න්'),
(6, 3, 5, '234dD', 10, 'As needed (PRN)', 'After Taking Foods', 'මතක තියාගනි​න්'),
(7, 4, 2, '13', 12, 'Twice a day (BID or BD)', 'After Taking Foods', 'නාන්නෙ​පා'),
(8, 4, 1, '11', 10, 'Every 6 hours', 'After Taking Foods', 'නාන්නෙ​පා');

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

--
-- Dumping data for table `prescription_master`
--

INSERT INTO `prescription_master` (`Prescription_Id`, `Appointment_Id`, `Patient_Id`, `Doctor_Id`, `P_Date`, `P_Time`, `P_Description`, `Illness`, `Test`, `Is_issued`) VALUES
(1, 1, 1, 1, '2024-05-06', '06:48:59', 'hoda na', 'kasilla', 'blood', 1),
(2, 1, 4, 1, '2024-05-11', '04:32:31', 'වැ​ඩී', 'කැස්​ස', 'Blood', 1),
(3, 2, 2, 1, '2024-05-11', '06:48:50', 'පරිස්සම් වෙය​න්', 'සෙ​ම', 'Urine', 1),
(4, 1, 5, 2, '2024-05-11', '07:05:21', 'හ​රි', 'පීන​සේ', 'Blood', 1);

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
(1, 68, '0000-00-00', '0000-00-00'),
(2, 33, '0000-00-00', '0000-00-00'),
(3, 68, '0000-00-00', '0000-00-00'),
(4, 300, '2024-05-11', '0000-00-00'),
(5, 0, '0000-00-00', '0000-00-00'),
(8, 500, '2024-05-11', '0000-00-00'),
(10, 100, '2024-05-11', '0000-00-00');

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
(1, '2024-04-27', 1),
(1, '2024-05-06', 2),
(1, '2024-05-11', 5),
(1, '2024-05-13', 1),
(1, '2024-05-14', 1),
(1, '2024-05-15', 1),
(2, '2024-05-11', 3),
(2, '2024-05-13', 1);

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
(1, 'Order No', 4),
(2, 'Prescription No', 5);

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
(4, 'kaveesh', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'kavee@abc.com', 3, 1),
(6, 'arun', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 'arun@abc.com', 4, 1);

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
(1, '2024-04-26', '07:58:16', 2, '::1', 'insert', 'add new patient Vinodya Senarathne'),
(2, '2024-05-11', '04:08:49', 2, '::1', 'insert', 'add new patient Tineth Pathirage'),
(3, '2024-05-11', '04:10:08', 2, '::1', 'insert', 'add new patient Kalpani Jayasinghe'),
(4, '2024-05-11', '04:11:05', 2, '::1', 'insert', 'add new patient Chamindu Janith'),
(5, '2024-05-11', '04:11:58', 2, '::1', 'insert', 'add new patient Yamuna Malkanthi');

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
(3, 'Pharmacist'),
(4, 'Receptionist');

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
  MODIFY `Appointment_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `doctor`
--
ALTER TABLE `doctor`
  MODIFY `Doctor_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `doctor_schedule`
--
ALTER TABLE `doctor_schedule`
  MODIFY `Schedule_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `GRN_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `measurement_type`
--
ALTER TABLE `measurement_type`
  MODIFY `Measure_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patient`
--
ALTER TABLE `patient`
  MODIFY `Patient_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `prescription_details`
--
ALTER TABLE `prescription_details`
  MODIFY `Prescription_Details_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

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
  MODIFY `GRN_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tmp_prescription_details`
--
ALTER TABLE `tmp_prescription_details`
  MODIFY `Pres_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_Id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_log`
--
ALTER TABLE `user_log`
  MODIFY `Log_Id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Role_Id`) REFERENCES `user_roles` (`Role_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
