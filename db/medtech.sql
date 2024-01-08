-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 26, 2023 at 04:10 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

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
  `Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor`
--

CREATE TABLE `doctor` (
  `Doctor_Id` int(11) NOT NULL,
  `FirstName` varchar(255) DEFAULT NULL,
  `LastName` varchar(255) DEFAULT NULL,
  `Telphone` varchar(20) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL,
  `Designation` varchar(255) DEFAULT NULL,
  `Gender` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctor_schedule`
--

CREATE TABLE `doctor_schedule` (
  `Schedule_Id` int(11) NOT NULL,
  `Date` date DEFAULT NULL,
  `Doctor_Id` int(11) DEFAULT NULL,
  `Morning_Time` time DEFAULT NULL,
  `Evening_Time` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drug`
--

CREATE TABLE `drug` (
  `Drug_Id` int(11) NOT NULL,
  `MedicalName` varchar(255) DEFAULT NULL,
  `BrandName` varchar(255) DEFAULT NULL,
  `Rol` varchar(255) DEFAULT NULL,
  `Measurement_Id` int(11) DEFAULT NULL,
  `SellPrice` decimal(10,2) DEFAULT NULL,
  `Category_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `drug_category`
--

CREATE TABLE `drug_category` (
  `Category_Id` int(11) NOT NULL,
  `Category` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grn_details`
--

CREATE TABLE `grn_details` (
  `GRN_Id` int(11) NOT NULL,
  `Order_Id` int(11) DEFAULT NULL,
  `Drug_Id` int(11) DEFAULT NULL,
  `BatchNo` varchar(255) DEFAULT NULL,
  `MadeDate` date DEFAULT NULL,
  `ExpireDate` date DEFAULT NULL,
  `Rate` decimal(10,2) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Total` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `grn_master`
--

CREATE TABLE `grn_master` (
  `Order_Id` int(11) NOT NULL,
  `Supplier_Id` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `TotalAmount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `measurement_type`
--

CREATE TABLE `measurement_type` (
  `Measure_Id` int(11) NOT NULL,
  `Name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `patient_bill`
--

CREATE TABLE `patient_bill` (
  `Prescription_Id` int(11) NOT NULL,
  `Doctor_Charge` decimal(10,2) DEFAULT NULL,
  `Drug_Charge` decimal(10,2) DEFAULT NULL,
  `Total_Amount` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescription_details`
--

CREATE TABLE `prescription_details` (
  `Prescription_Details_Id` int(11) NOT NULL,
  `Prescription_Id` int(11) DEFAULT NULL,
  `Drug_Id` int(11) DEFAULT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Dosage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescription_master`
--

CREATE TABLE `prescription_master` (
  `Prescription_Id` int(11) NOT NULL,
  `Appointment_Id` int(11) DEFAULT NULL,
  `Patient_Id` int(11) DEFAULT NULL,
  `Doctor_Id` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `Description` varchar(255) DEFAULT NULL,
  `Illness` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `Drug_Id` int(11) NOT NULL,
  `Quantity` int(11) DEFAULT NULL,
  `Last_GRN_Date` date DEFAULT NULL,
  `Last_Bill_Date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE `supplier` (
  `Supplier_Id` int(11) NOT NULL,
  `CompanyName` varchar(255) DEFAULT NULL,
  `Contact_Person_Name` varchar(255) DEFAULT NULL,
  `ContactNumber` varchar(20) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_Id` int(11) NOT NULL,
  `UserName` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Role_Id` int(11) DEFAULT NULL,
  `Enable` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `Role_Id` int(11) NOT NULL,
  `RoleName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`Appointment_Id`),
  ADD KEY `Doctor_Id` (`Doctor_Id`),
  ADD KEY `Patient_Id` (`Patient_Id`);

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
  ADD KEY `Category_Id` (`Category_Id`);

--
-- Indexes for table `drug_category`
--
ALTER TABLE `drug_category`
  ADD PRIMARY KEY (`Category_Id`);

--
-- Indexes for table `grn_details`
--
ALTER TABLE `grn_details`
  ADD PRIMARY KEY (`GRN_Id`),
  ADD KEY `Order_Id` (`Order_Id`),
  ADD KEY `Drug_Id` (`Drug_Id`);

--
-- Indexes for table `grn_master`
--
ALTER TABLE `grn_master`
  ADD PRIMARY KEY (`Order_Id`),
  ADD KEY `Supplier_Id` (`Supplier_Id`);

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
  ADD PRIMARY KEY (`Prescription_Details_Id`),
  ADD KEY `Prescription_Id` (`Prescription_Id`),
  ADD KEY `Drug_Id` (`Drug_Id`);

--
-- Indexes for table `prescription_master`
--
ALTER TABLE `prescription_master`
  ADD PRIMARY KEY (`Prescription_Id`),
  ADD KEY `Appointment_Id` (`Appointment_Id`),
  ADD KEY `Patient_Id` (`Patient_Id`),
  ADD KEY `Doctor_Id` (`Doctor_Id`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_Id`),
  ADD KEY `Role_Id` (`Role_Id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`Role_Id`);

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
-- Constraints for table `batch_stock`
--
ALTER TABLE `batch_stock`
  ADD CONSTRAINT `batch_stock_ibfk_1` FOREIGN KEY (`Drug_Id`) REFERENCES `drug` (`Drug_Id`);

--
-- Constraints for table `doctor_schedule`
--
ALTER TABLE `doctor_schedule`
  ADD CONSTRAINT `doctor_schedule_ibfk_1` FOREIGN KEY (`Doctor_Id`) REFERENCES `doctor` (`Doctor_Id`);

--
-- Constraints for table `drug`
--
ALTER TABLE `drug`
  ADD CONSTRAINT `drug_ibfk_1` FOREIGN KEY (`Category_Id`) REFERENCES `drug_category` (`Category_Id`);

--
-- Constraints for table `grn_details`
--
ALTER TABLE `grn_details`
  ADD CONSTRAINT `grn_details_ibfk_1` FOREIGN KEY (`Order_Id`) REFERENCES `grn_master` (`Order_Id`),
  ADD CONSTRAINT `grn_details_ibfk_2` FOREIGN KEY (`Drug_Id`) REFERENCES `drug` (`Drug_Id`);

--
-- Constraints for table `grn_master`
--
ALTER TABLE `grn_master`
  ADD CONSTRAINT `grn_master_ibfk_1` FOREIGN KEY (`Supplier_Id`) REFERENCES `supplier` (`Supplier_Id`);

--
-- Constraints for table `patient_bill`
--
ALTER TABLE `patient_bill`
  ADD CONSTRAINT `patient_bill_ibfk_1` FOREIGN KEY (`Prescription_Id`) REFERENCES `prescription_master` (`Prescription_Id`);

--
-- Constraints for table `prescription_details`
--
ALTER TABLE `prescription_details`
  ADD CONSTRAINT `prescription_details_ibfk_1` FOREIGN KEY (`Prescription_Id`) REFERENCES `prescription_master` (`Prescription_Id`),
  ADD CONSTRAINT `prescription_details_ibfk_2` FOREIGN KEY (`Drug_Id`) REFERENCES `drug` (`Drug_Id`);

--
-- Constraints for table `prescription_master`
--
ALTER TABLE `prescription_master`
  ADD CONSTRAINT `prescription_master_ibfk_1` FOREIGN KEY (`Appointment_Id`) REFERENCES `appointment` (`Appointment_Id`),
  ADD CONSTRAINT `prescription_master_ibfk_2` FOREIGN KEY (`Patient_Id`) REFERENCES `patient` (`Patient_Id`),
  ADD CONSTRAINT `prescription_master_ibfk_3` FOREIGN KEY (`Doctor_Id`) REFERENCES `doctor` (`Doctor_Id`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `stock_ibfk_1` FOREIGN KEY (`Drug_Id`) REFERENCES `drug` (`Drug_Id`);

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`Role_Id`) REFERENCES `user_roles` (`Role_Id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
