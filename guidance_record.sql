-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2024 at 01:38 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guidance_record`
--

-- --------------------------------------------------------

--
-- Table structure for table `absence_approval_form`
--

CREATE TABLE `absence_approval_form` (
  `record_ID` varchar(11) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `middleName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `course` varchar(45) NOT NULL,
  `year` varchar(45) NOT NULL,
  `section` varchar(45) NOT NULL,
  `reason` varchar(45) NOT NULL,
  `status` varchar(45) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `absence_approval_form`
--

INSERT INTO `absence_approval_form` (`record_ID`, `firstName`, `middleName`, `lastName`, `gender`, `course`, `year`, `section`, `reason`, `status`, `remarks`, `date`) VALUES
('A0001', 'aerol karl ', 'porcalla', 'palconete', 'Male', 'Information System', '1st Year', '201', 'need  muna magtrabaho', '', 'pending', '2024-04-22 18:20:58'),
('A0002', 'angelica', '', 'balanlany', 'Prefer not to say', 'Psychology', '2nd Year', '210', 'need to help my mother to take care of my sib', '', 'Pending', '2024-04-22 18:24:02'),
('A0003', 'camilla angela', 'fraga', 'balmadiano', 'Female', 'Nursing', '1st Year', '103', 'going abroad for a mean time', '', 'Pending', '2024-04-22 18:25:17'),
('A0004', 'frederiko', 'manalo', 'aguinaldo', 'Non-Binary', 'Civil Engineering', '1st Year', '104', 'going back to the future', '', 'nyaaaa', '2024-04-22 18:26:53'),
('A0005', 'ginelata', 'ching', 'porcalla', 'Female', 'Midwifery', '2nd Year', '201', 'makikipagtanan', '', 'rejected', '2024-04-22 18:28:34'),
('A0006', 'Jashmin', '', 'tapilan', 'Female', 'Psychology', '1st Year', '101', 'nagtatampo', '', 'for evaluation', '2024-04-22 20:39:24'),
('A0007', 'douglass', '', 'Mcathur', 'Male', 'Nursing', '1st Year', '101', 'Papalayain ang pilipinas', '', 'i shall return', '2024-04-22 20:43:45'),
('A0008', 'ryan paul', '', 'venezuela', 'Male', 'Information System', 'N/A', '201', 'cause why not', '', 'rejected', '2024-04-22 21:05:40'),
('A0009', 'Harith', 'Leonin', 'Mendoza', 'Male', 'Civil Engineering', '1st year', '103', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0010', 'Ronald', 'Pulga', 'Mendoza', 'Male', 'N/A', 'N/A', '', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0011', 'Juan Paolo', 'Near', 'Far', 'Male', 'Psychology', '2nd year', '204', 'Photography', '', 'Rejected', '2024-04-22 21:22:44'),
('A0012', 'Denise Joy', 'Mama', 'Papa', 'Female', 'Psychology', '2nd year', '204', 'Family Matters', '', 'Pending', '2024-04-22 21:22:44'),
('A0013', 'Alexa', 'Mendoza', 'Herrera', 'Female', 'Midwifery', '2nd year', '202', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0014', 'April', 'May', 'June', 'Female', 'Midwifery', '2nd year', '201', 'Sickness', '', 'Approved', '2024-04-22 21:22:44'),
('A0015', 'Ansherina', 'Garcia', 'Encarnado', 'Female', 'Nursing', '1st year', '101', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0016', 'Clive', 'Luke', 'Layton', 'Prefer not to say', 'Nursing', '1st year', '111', 'Photography', '', 'Rejected', '2024-04-22 21:22:44'),
('A0017', 'David Jefferson', 'Maangas', 'Maranan', 'Male', 'Civil Engineering', '1st year', '101', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0018', 'Dandelion', 'Sunflower', 'Lavender', 'Binary', 'Psychology', '3rd year', '308', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0019', 'Chair', 'Table', 'Window', 'Binary', 'Information System', '3rd year', '303', 'Sickness', '', 'Approved', '2024-04-22 21:22:44'),
('A0020', 'Jash', 'Goat', 'Hindinaligo', 'Female', 'Psychology', 'N/A', 'N/A', 'Sickness', '', 'Approved', '2024-04-22 21:22:44'),
('A0021', 'John Ralph', 'Corsega', 'Mendoza', 'Male', 'Information System', '2nd year', '201', 'Sickness', '', 'Approved', '2024-04-22 21:22:44'),
('A0022', 'Fred Andrei', 'Malupet', 'Manaois', 'Male', 'Information System', '2nd year', '201', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0023', 'Aerol Karl', 'Mabangis', 'Palconote', 'Male', 'Information System', '2nd year', '201', 'Family Matters', '', 'Pending', '2024-04-22 21:22:44'),
('A0024', 'Jashmin Joyce', 'Goat', 'Talipan', 'Female', 'Information System', '2nd year', '201', 'ID Appointment', '', 'Pending', '2024-04-22 21:22:44'),
('A0025', 'Roishell', 'Sombilon', 'Naadat', 'Female', 'Information System', '2nd year', '201', 'Family Matters', '', 'Pending', '2024-04-22 21:22:44'),
('A0026', 'Lillia Samantha', 'Sumayo', 'Gargaceran', 'Female', 'Information System', '2nd year', '201', 'Doctor Appointment', '', 'Approved', '2024-04-22 21:22:44'),
('A0027', 'Mallow', 'Marsh', 'Mendoza', 'Female', 'Civil Engineering', '1st year', '111', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0028', 'Ningmu', 'Ning', 'Mendoza', 'Non-Binary', 'Civil Engineering', '1st year', '108', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0029', 'Harith', 'Leonin', 'Mendoza', 'Male', 'Civil Engineering', '1st year', '103', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0030', 'Ronald', 'Pulga', 'Mendoza', 'Male', 'N/A', 'N/A', '', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0031', 'Juan Paolo', 'Near', 'Far', 'Male', 'Psychology', '2nd year', '204', 'Photography', '', 'Rejected', '2024-04-22 21:22:44'),
('A0032', 'Denise Joy', 'Mama', 'Papa', 'Female', 'Psychology', '2nd year', '204', 'Family Matters', '', 'Pending', '2024-04-22 21:22:44'),
('A0033', 'Alexa', 'Mendoza', 'Herrera', 'Female', 'Midwifery', '2nd year', '202', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0034', 'April', 'May', 'June', 'Female', 'Midwifery', '2nd year', '201', 'Sickness', '', 'Approved', '2024-04-22 21:22:44'),
('A0035', 'Ansherina', 'Garcia', 'Encarnado', 'Female', 'Nursing', '1st year', '101', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0036', 'Clive', 'Luke', 'Layton', 'Prefer not to say', 'Nursing', '1st year', '111', 'Photography', '', 'Rejected', '2024-04-22 21:22:44'),
('A0037', 'David Jefferson', 'Maangas', 'Maranan', 'Male', 'Civil Engineering', '1st year', '101', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0038', 'Dandelion', 'Sunflower', 'Lavender', 'Binary', 'Psychology', '3rd year', '308', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0039', 'Chair', 'Table', 'Window', 'Binary', 'Information System', '3rd year', '303', 'Sickness', '', 'Approved', '2024-04-22 21:22:44'),
('A0040', 'Jash', 'Goat', 'Hindinaligo', 'Female', 'Psychology', 'N/A', 'N/A', 'Sickness', '', 'Approved', '2024-04-22 21:22:44'),
('A0041', 'John Ralph', 'Corsega', 'Mendoza', 'Male', 'Information System', '2nd year', '201', 'Sickness', '', 'Approved', '2024-04-22 21:22:44'),
('A0042', 'Fred Andrei', 'Malupet', 'Manaois', 'Male', 'Information System', '2nd year', '201', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0043', 'Aerol Karl', 'Mabangis', 'Palconote', 'Male', 'Information System', '2nd year', '201', 'Family Matters', '', 'Pending', '2024-04-22 21:22:44'),
('A0044', 'Jashmin Joyce', 'Goat', 'Talipan', 'Female', 'Information System', '2nd year', '201', 'ID Appointment', '', 'Pending', '2024-04-22 21:22:44'),
('A0045', 'Roishell', 'Sombilon', 'Naadat', 'Female', 'Information System', '2nd year', '201', 'Family Matters', '', 'Pending', '2024-04-22 21:22:44'),
('A0046', 'Lillia Samantha', 'Sumayo', 'Gargaceran', 'Female', 'Information System', '2nd year', '201', 'Doctor Appointment', '', 'Approved', '2024-04-22 21:22:44'),
('A0047', 'Mallow', 'Marsh', 'Mendoza', 'Female', 'Civil Engineering', '1st year', '111', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0048', 'Ningmu', 'Ning', 'Mendoza', 'Non-Binary', 'Civil Engineering', '1st year', '108', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0049', 'Harith', 'Leonin', 'Mendoza', 'Male', 'Civil Engineering', '1st year', '103', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0050', 'Ronald', 'Pulga', 'Mendoza', 'Male', 'N/A', 'N/A', '', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0051', 'Juan Paolo', 'Near', 'Far', 'Male', 'Psychology', '2nd year', '204', 'Photography', '', 'Rejected', '2024-04-22 21:22:44'),
('A0052', 'Denise Joy', 'Mama', 'Papa', 'Female', 'Psychology', '2nd year', '204', 'Family Matters', '', 'Pending', '2024-04-22 21:22:44'),
('A0053', 'Alexa', 'Mendoza', 'Herrera', 'Female', 'Midwifery', '2nd year', '202', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0054', 'April', 'May', 'June', 'Female', 'Midwifery', '2nd year', '201', 'Sickness', '', 'Approved', '2024-04-22 21:22:44'),
('A0055', 'Ansherina', 'Garcia', 'Encarnado', 'Female', 'Nursing', '1st year', '101', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0056', 'Clive', 'Luke', 'Layton', 'Prefer not to say', 'Nursing', '1st year', '111', 'Photography', '', 'Rejected', '2024-04-22 21:22:44'),
('A0057', 'David Jefferson', 'Maangas', 'Maranan', 'Male', 'Civil Engineering', '1st year', '101', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0058', 'Dandelion', 'Sunflower', 'Lavender', 'Binary', 'Psychology', '3rd year', '308', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0059', 'Chair', 'Table', 'Window', 'Binary', 'Information System', '3rd year', '303', 'Sickness', '', 'Approved', '2024-04-22 21:22:44'),
('A0060', 'Jash', 'Goat', 'Hindinaligo', 'Female', 'Psychology', 'N/A', 'N/A', 'Sickness', '', 'Approved', '2024-04-22 21:22:44'),
('A0061', 'John Ralph', 'Corsega', 'Mendoza', 'Male', 'Information System', '2nd year', '201', 'Sickness', '', 'Approved', '2024-04-22 21:22:44'),
('A0062', 'Fred Andrei', 'Malupet', 'Manaois', 'Male', 'Information System', '2nd year', '201', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0063', 'Aerol Karl', 'Mabangis', 'Palconote', 'Male', 'Information System', '2nd year', '201', 'Family Matters', '', 'Pending', '2024-04-22 21:22:44'),
('A0064', 'Jashmin Joyce', 'Goat', 'Talipan', 'Female', 'Information System', '2nd year', '201', 'ID Appointment', '', 'Pending', '2024-04-22 21:22:44'),
('A0065', 'Roishell', 'Sombilon', 'Naadat', 'Female', 'Information System', '2nd year', '201', 'Family Matters', '', 'Pending', '2024-04-22 21:22:44'),
('A0066', 'Lillia Samantha', 'Sumayo', 'Gargaceran', 'Female', 'Information System', '2nd year', '201', 'Doctor Appointment', '', 'Approved', '2024-04-22 21:22:44'),
('A0067', 'Mallow', 'Marsh', 'Mendoza', 'Female', 'Civil Engineering', '1st year', '111', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0068', 'Ningmu', 'Ning', 'Mendoza', 'Non-Binary', 'Civil Engineering', '1st year', '108', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0069', 'Harith', 'Leonin', 'Mendoza', 'Male', 'Civil Engineering', '1st year', '103', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0070', 'Ronald', 'Pulga', 'Mendoza', 'Male', 'N/A', 'N/A', '', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0071', 'Juan Paolo', 'Near', 'Far', 'Male', 'Psychology', '2nd year', '204', 'Photography', '', 'Rejected', '2024-04-22 21:22:44'),
('A0072', 'Denise Joy', 'Mama', 'Papa', 'Female', 'Psychology', '2nd year', '204', 'Family Matters', '', 'Pending', '2024-04-22 21:22:44'),
('A0073', 'Alexa', 'Mendoza', 'Herrera', 'Female', 'Midwifery', '2nd year', '202', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0074', 'April', 'May', 'June', 'Female', 'Midwifery', '2nd year', '201', 'Sickness', '', 'Approved', '2024-04-22 21:22:44'),
('A0075', 'Ansherina', 'Garcia', 'Encarnado', 'Female', 'Nursing', '1st year', '101', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0076', 'Clive', 'Luke', 'Layton', 'Prefer not to say', 'Nursing', '1st year', '111', 'Photography', '', 'Rejected', '2024-04-22 21:22:44'),
('A0077', 'David Jefferson', 'Maangas', 'Maranan', 'Male', 'Civil Engineering', '1st year', '101', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0078', 'Dandelion', 'Sunflower', 'Lavender', 'Binary', 'Psychology', '3rd year', '308', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0079', 'Chair', 'Table', 'Window', 'Binary', 'Information System', '3rd year', '303', 'Sickness', '', 'Approved', '2024-04-22 21:22:44'),
('A0080', 'Jash', 'Goat', 'Hindinaligo', 'Female', 'Psychology', 'N/A', 'N/A', 'Sickness', '', 'Approved', '2024-04-22 21:22:44'),
('A0081', 'John Ralph', 'Corsega', 'Mendoza', 'Male', 'Information System', '2nd year', '201', 'Sickness', '', 'Approved', '2024-04-22 21:22:44'),
('A0082', 'Fred Andrei', 'Malupet', 'Manaois', 'Male', 'Information System', '2nd year', '201', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0083', 'Aerol Karl', 'Mabangis', 'Palconote', 'Male', 'Information System', '2nd year', '201', 'Family Matters', '', 'Pending', '2024-04-22 21:22:44'),
('A0084', 'Jashmin Joyce', 'Goat', 'Talipan', 'Female', 'Information System', '2nd year', '201', 'ID Appointment', '', 'Pending', '2024-04-22 21:22:44'),
('A0085', 'Roishell', 'Sombilon', 'Naadat', 'Female', 'Information System', '2nd year', '201', 'Family Matters', '', 'Pending', '2024-04-22 21:22:44'),
('A0086', 'Lillia Samantha', 'Sumayo', 'Gargaceran', 'Female', 'Information System', '2nd year', '201', 'Doctor Appointment', '', 'Approved', '2024-04-22 21:22:44'),
('A0087', 'Mallow', 'Marsh', 'Mendoza', 'Female', 'Civil Engineering', '1st year', '111', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0088', 'Ningmu', 'Ning', 'Mendoza', 'Non-Binary', 'Civil Engineering', '1st year', '108', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0089', 'Harith', 'Leonin', 'Mendoza', 'Male', 'Civil Engineering', '1st year', '103', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0090', 'Ronald', 'Pulga', 'Mendoza', 'Male', 'N/A', 'N/A', '', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0091', 'Juan Paolo', 'Near', 'Far', 'Male', 'Psychology', '2nd year', '204', 'Photography', '', 'Rejected', '2024-04-22 21:22:44'),
('A0092', 'Denise Joy', 'Mama', 'Papa', 'Female', 'Psychology', '2nd year', '204', 'Family Matters', '', 'Pending', '2024-04-22 21:22:44'),
('A0093', 'Alexa', 'Mendoza', 'Herrera', 'Female', 'Midwifery', '2nd year', '202', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0094', 'April', 'May', 'June', 'Female', 'Midwifery', '2nd year', '201', 'Sickness', '', 'Approved', '2024-04-22 21:22:44'),
('A0095', 'Ansherina', 'Garcia', 'Encarnado', 'Female', 'Nursing', '1st year', '101', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0096', 'Clive', 'Luke', 'Layton', 'Prefer not to say', 'Nursing', '1st year', '111', 'Photography', '', 'Rejected', '2024-04-22 21:22:44'),
('A0097', 'David Jefferson', 'Maangas', 'Maranan', 'Male', 'Civil Engineering', '1st year', '101', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0098', 'Dandelion', 'Sunflower', 'Lavender', 'Binary', 'Psychology', '3rd year', '308', 'Vacation', '', 'Rejected', '2024-04-22 21:22:44'),
('A0099', 'Chair', 'Table', 'Window', 'Binary', 'Information System', '3rd year', '303', 'Sickness', '', 'Approved', '2024-04-22 21:22:44'),
('A0100', 'Jash', 'Goat', 'Hindinaligo', 'Female', 'Psychology', 'N/A', 'N/A', 'Sickness', '', 'Approved', '2024-04-22 21:22:44');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_ID` int(11) NOT NULL,
  `admin_firstName` varchar(45) NOT NULL,
  `admin_middleName` varchar(45) NOT NULL,
  `admin_lastName` varchar(45) NOT NULL,
  `admin_contactNum` varchar(15) NOT NULL,
  `admin_username` varchar(45) NOT NULL,
  `admin_password` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_ID`, `admin_firstName`, `admin_middleName`, `admin_lastName`, `admin_contactNum`, `admin_username`, `admin_password`) VALUES
(1, 'Fred Andrei', 'Abcede', 'Manaois', '09165612094', 'guidance_admin', 'adminpassword');

-- --------------------------------------------------------

--
-- Table structure for table `archived`
--

CREATE TABLE `archived` (
  `record_ID` varchar(45) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `middleName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `course` varchar(45) NOT NULL,
  `year` varchar(45) NOT NULL,
  `section` varchar(45) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `status` varchar(45) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `dateRecorded` datetime NOT NULL,
  `dateArchived` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `counselling`
--

CREATE TABLE `counselling` (
  `record_ID` varchar(11) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `middleName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `course` varchar(45) NOT NULL,
  `year` varchar(45) NOT NULL,
  `section` varchar(45) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `status` varchar(45) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `counselling`
--

INSERT INTO `counselling` (`record_ID`, `firstName`, `middleName`, `lastName`, `gender`, `course`, `year`, `section`, `reason`, `status`, `remarks`, `date`) VALUES
('C0001', 'meowers', 'etenoclap', 'pinalakpakan', 'Non-Binary', 'Information System', '1st Year', '201', 'vent out because i felt i cant keep up anymore', '0', 'recounciling', '2024-04-22 18:32:42'),
('C0002', 'pikachu', '', 'ketchum', 'Non-Binary', 'Civil Engineering', '1st Year', '105', 'feeling ko nawawalan spark', '0', 'kailangan ng patnubay at gabay ni ash', '2024-04-22 18:38:51'),
('C0003', 'mary grace', '', 'makagagi', 'Female', 'Psychology', '2nd Year', '201', 'napapadalas napo unsent ko ', '0', 'recounciling because we need to work for her ', '2024-04-22 18:42:34'),
('C0004', 'sun god', '', 'nikka', 'Male', 'Civil Engineering', '1st Year', '105', 'tumatawa ng walang dahilan', '0', 'need to control his emotion', '2024-04-22 18:45:50'),
('C0005', 'zoro', '', 'roronoa', 'Male', 'Information System', '2nd Year', '201', 'madalas napo maligaw nawawalan napo ng sense ', '0', 'need to check up', '2024-04-22 18:48:52'),
('C0006', 'carl jason', 'gutom', 'busogochava', 'Male', 'Information System', '2nd Year', '201', 'kumain po ako ng bola', '0', 'need update', '2024-04-22 18:54:45'),
('C0007', 'Anita', 'Bet', 'Mondragon', 'Female', 'Nursing', '1st Year', '101', 'Broken hearted', '', 'thank u next', '2024-04-22 20:06:21'),
('C0008', 'Bobby', 'Fat', 'Neng', 'Male', 'Nursing', '1st Year', '102', 'vent out', '', 'To continue', '2024-04-22 20:08:26'),
('C0009', 'Lovely', 'Handeg', 'Valote', 'Female', 'Nursing', '1st Year', '101', 'Family Problem', '', 'Success', '2024-04-22 20:09:27'),
('C0010', 'Meriele', 'Ayuban', 'Talipan', 'Female', 'Civil Engineering', '1st Year', '105', 'Abuse', '', 'thank u', '2024-04-22 20:12:23'),
('C0011', 'Rhian', 'Reyes', 'Ayuban', 'Female', 'Information System', '3rd Year', '305', 'financial', '', 'followup', '2024-04-22 20:14:09'),
('C0012', 'Mandela', 'Aroma', 'Corazon', 'Male', 'Midwifery', '2nd Year', '203', 'couple matter', '', 'Finish', '2024-04-22 20:15:43'),
('C0013', 'Mardol', 'Ambot', 'Hatidy', 'Male', 'Psychology', '3rd Year', '306', 'self esteem', '', 'Okay', '2024-04-22 20:17:42'),
('C0014', 'Bailey', 'Monday', 'Lintog', 'Female', 'Information System', '2nd Year', '201', 'Depression', 'Approved', '-', '2024-04-22 20:19:14'),
('C0015', 'Alexandra', '', 'Seve', 'Female', 'Nursing', '1st Year', '109', 'Anxiety', '', '-', '2024-04-22 20:27:18'),
('C0016', 'Chloe', '', 'Ama', 'Non-Binary', 'Midwifery', '2nd Year', '213', 'Addiction', '', '-', '2024-04-22 20:30:21'),
('C0017', 'David Jefferson', 'Maangas', 'Maranan', 'Male', 'Civil Engineering', '1st year', '101', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0018', 'Dandelion', 'Sunflower', 'Lavender', 'Binary', 'Psychology', '3rd year', '308', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0019', 'Chair', 'Table', 'Window', 'Binary', 'Information System', '3rd year', '303', 'Academic Problem', '', 'Problem solved', '2024-04-22 23:19:50'),
('C0020', 'Jash', 'Goat', 'Hindinaligo', 'Female', 'Psychology', 'N/A', 'N/A', 'Academic Problem', '', 'Problem solved', '2024-04-22 23:19:50'),
('C0021', 'John Ralph', 'Corsega', 'Mendoza', 'Male', 'Information System', '2nd year', '201', 'Academic Problem', '', 'Problem solved', '2024-04-22 23:19:50'),
('C0022', 'Fred Andrei', 'Malupet', 'Manaois', 'Male', 'Information System', '2nd year', '201', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0023', 'Aerol Karl', 'Mabangis', 'Palconote', 'Male', 'Information System', '2nd year', '201', 'Family Problems', '', 'Seek professional help', '2024-04-22 23:19:50'),
('C0024', 'Jashmin Joyce', 'Goat', 'Talipan', 'Female', 'Information System', '2nd year', '201', 'Talking', '', 'Student feels better', '2024-04-22 23:19:50'),
('C0025', 'Roishell', 'Sombilon', 'Naadat', 'Female', 'Information System', '2nd year', '201', 'Family Problems', '', 'Seek professional help', '2024-04-22 23:19:50'),
('C0026', 'Lillia Samantha', 'Sumayo', 'Gargaceran', 'Female', 'Information System', '2nd year', '201', 'Clouded Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0027', 'Mallow', 'Marsh', 'Mendoza', 'Female', 'Civil Engineering', '1st year', '111', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0028', 'Ningmu', 'Ning', 'Mendoza', 'Non-Binary', 'Civil Engineering', '1st year', '108', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0029', 'Harith', 'Leonin', 'Mendoza', 'Male', 'Civil Engineering', '1st year', '103', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0030', 'Ronald', 'Pulga', 'Mendoza', 'Male', 'N/A', 'N/A', '', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0031', 'Juan Paolo', 'Near', 'Far', 'Male', 'Psychology', '2nd year', '204', 'Life Update', '', 'Student feels better', '2024-04-22 23:19:50'),
('C0032', 'Denise Joy', 'Mama', 'Papa', 'Female', 'Psychology', '2nd year', '204', 'Family Problems', '', 'Seek professional help', '2024-04-22 23:19:50'),
('C0033', 'Alexa', 'Mendoza', 'Herrera', 'Female', 'Midwifery', '2nd year', '202', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0034', 'April', 'May', 'June', 'Female', 'Midwifery', '2nd year', '201', 'Academic Problem', '', 'Problem solved', '2024-04-22 23:19:50'),
('C0035', 'Ansherina', 'Garcia', 'Encarnado', 'Female', 'Nursing', '1st year', '101', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0036', 'Clive', 'Luke', 'Layton', 'Prefer not to say', 'Nursing', '1st year', '111', 'Life Update', '', 'Student feels better', '2024-04-22 23:19:50'),
('C0037', 'David Jefferson', 'Maangas', 'Maranan', 'Male', 'Civil Engineering', '1st year', '101', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0038', 'Dandelion', 'Sunflower', 'Lavender', 'Binary', 'Psychology', '3rd year', '308', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0039', 'Chair', 'Table', 'Window', 'Binary', 'Information System', '3rd year', '303', 'Academic Problem', '', 'Problem solved', '2024-04-22 23:19:50'),
('C0040', 'Jash', 'Goat', 'Hindinaligo', 'Female', 'Psychology', 'N/A', 'N/A', 'Academic Problem', '', 'Problem solved', '2024-04-22 23:19:50'),
('C0041', 'John Ralph', 'Corsega', 'Mendoza', 'Male', 'Information System', '2nd year', '201', 'Academic Problem', '', 'Problem solved', '2024-04-22 23:19:50'),
('C0042', 'Fred Andrei', 'Malupet', 'Manaois', 'Male', 'Information System', '2nd year', '201', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0043', 'Aerol Karl', 'Mabangis', 'Palconote', 'Male', 'Information System', '2nd year', '201', 'Family Problems', '', 'Seek professional help', '2024-04-22 23:19:50'),
('C0044', 'Jashmin Joyce', 'Goat', 'Talipan', 'Female', 'Information System', '2nd year', '201', 'Talking', '', 'Student feels better', '2024-04-22 23:19:50'),
('C0045', 'Roishell', 'Sombilon', 'Naadat', 'Female', 'Information System', '2nd year', '201', 'Family Problems', '', 'Seek professional help', '2024-04-22 23:19:50'),
('C0046', 'Lillia Samantha', 'Sumayo', 'Gargaceran', 'Female', 'Information System', '2nd year', '201', 'Clouded Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0047', 'Mallow', 'Marsh', 'Mendoza', 'Female', 'Civil Engineering', '1st year', '111', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0048', 'Ningmu', 'Ning', 'Mendoza', 'Non-Binary', 'Civil Engineering', '1st year', '108', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0049', 'Harith', 'Leonin', 'Mendoza', 'Male', 'Civil Engineering', '1st year', '103', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0050', 'Ronald', 'Pulga', 'Mendoza', 'Male', 'N/A', 'N/A', '', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0051', 'Juan Paolo', 'Near', 'Far', 'Male', 'Psychology', '2nd year', '204', 'Life Update', '', 'Student feels better', '2024-04-22 23:19:50'),
('C0052', 'Denise Joy', 'Mama', 'Papa', 'Female', 'Psychology', '2nd year', '204', 'Family Problems', '', 'Seek professional help', '2024-04-22 23:19:50'),
('C0053', 'Alexa', 'Mendoza', 'Herrera', 'Female', 'Midwifery', '2nd year', '202', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0054', 'April', 'May', 'June', 'Female', 'Midwifery', '2nd year', '201', 'Academic Problem', '', 'Problem solved', '2024-04-22 23:19:50'),
('C0055', 'Ansherina', 'Garcia', 'Encarnado', 'Female', 'Nursing', '1st year', '101', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0056', 'Clive', 'Luke', 'Layton', 'Prefer not to say', 'Nursing', '1st year', '111', 'Life Update', '', 'Student feels better', '2024-04-22 23:19:50'),
('C0057', 'David Jefferson', 'Maangas', 'Maranan', 'Male', 'Civil Engineering', '1st year', '101', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0058', 'Dandelion', 'Sunflower', 'Lavender', 'Binary', 'Psychology', '3rd year', '308', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0059', 'Chair', 'Table', 'Window', 'Binary', 'Information System', '3rd year', '303', 'Academic Problem', '', 'Problem solved', '2024-04-22 23:19:50'),
('C0060', 'Jash', 'Goat', 'Hindinaligo', 'Female', 'Psychology', 'N/A', 'N/A', 'Academic Problem', '', 'Problem solved', '2024-04-22 23:19:50'),
('C0061', 'John Ralph', 'Corsega', 'Mendoza', 'Male', 'Information System', '2nd year', '201', 'Academic Problem', '', 'Problem solved', '2024-04-22 23:19:50'),
('C0062', 'Fred Andrei', 'Malupet', 'Manaois', 'Male', 'Information System', '2nd year', '201', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0063', 'Aerol Karl', 'Mabangis', 'Palconote', 'Male', 'Information System', '2nd year', '201', 'Family Problems', '', 'Seek professional help', '2024-04-22 23:19:50'),
('C0064', 'Jashmin Joyce', 'Goat', 'Talipan', 'Female', 'Information System', '2nd year', '201', 'Talking', '', 'Student feels better', '2024-04-22 23:19:50'),
('C0065', 'Roishell', 'Sombilon', 'Naadat', 'Female', 'Information System', '2nd year', '201', 'Family Problems', '', 'Seek professional help', '2024-04-22 23:19:50'),
('C0066', 'Lillia Samantha', 'Sumayo', 'Gargaceran', 'Female', 'Information System', '2nd year', '201', 'Clouded Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0067', 'Mallow', 'Marsh', 'Mendoza', 'Female', 'Civil Engineering', '1st year', '111', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0068', 'Ningmu', 'Ning', 'Mendoza', 'Non-Binary', 'Civil Engineering', '1st year', '108', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0069', 'Harith', 'Leonin', 'Mendoza', 'Male', 'Civil Engineering', '1st year', '103', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0070', 'Ronald', 'Pulga', 'Mendoza', 'Male', 'N/A', 'N/A', '', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0071', 'Juan Paolo', 'Near', 'Far', 'Male', 'Psychology', '2nd year', '204', 'Life Update', '', 'Student feels better', '2024-04-22 23:19:50'),
('C0072', 'Denise Joy', 'Mama', 'Papa', 'Female', 'Psychology', '2nd year', '204', 'Family Problems', '', 'Seek professional help', '2024-04-22 23:19:50'),
('C0073', 'Alexa', 'Mendoza', 'Herrera', 'Female', 'Midwifery', '2nd year', '202', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0074', 'April', 'May', 'June', 'Female', 'Midwifery', '2nd year', '201', 'Academic Problem', '', 'Problem solved', '2024-04-22 23:19:50'),
('C0075', 'Ansherina', 'Garcia', 'Encarnado', 'Female', 'Nursing', '1st year', '101', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0076', 'Clive', 'Luke', 'Layton', 'Prefer not to say', 'Nursing', '1st year', '111', 'Life Update', '', 'Student feels better', '2024-04-22 23:19:50'),
('C0077', 'David Jefferson', 'Maangas', 'Maranan', 'Male', 'Civil Engineering', '1st year', '101', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0078', 'Dandelion', 'Sunflower', 'Lavender', 'Binary', 'Psychology', '3rd year', '308', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0079', 'Chair', 'Table', 'Window', 'Binary', 'Information System', '3rd year', '303', 'Academic Problem', '', 'Problem solved', '2024-04-22 23:19:50'),
('C0080', 'Jash', 'Goat', 'Hindinaligo', 'Female', 'Psychology', 'N/A', 'N/A', 'Academic Problem', '', 'Problem solved', '2024-04-22 23:19:50'),
('C0081', 'John Ralph', 'Corsega', 'Mendoza', 'Male', 'Information System', '2nd year', '201', 'Academic Problem', '', 'Problem solved', '2024-04-22 23:19:50'),
('C0082', 'Fred Andrei', 'Malupet', 'Manaois', 'Male', 'Information System', '2nd year', '201', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0083', 'Aerol Karl', 'Mabangis', 'Palconote', 'Male', 'Information System', '2nd year', '201', 'Family Problems', '', 'Seek professional help', '2024-04-22 23:19:50'),
('C0084', 'Jashmin Joyce', 'Goat', 'Talipan', 'Female', 'Information System', '2nd year', '201', 'Talking', '', 'Student feels better', '2024-04-22 23:19:50'),
('C0085', 'Roishell', 'Sombilon', 'Naadat', 'Female', 'Information System', '2nd year', '201', 'Family Problems', '', 'Seek professional help', '2024-04-22 23:19:50'),
('C0086', 'Lillia Samantha', 'Sumayo', 'Gargaceran', 'Female', 'Information System', '2nd year', '201', 'Clouded Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0087', 'Mallow', 'Marsh', 'Mendoza', 'Female', 'Civil Engineering', '1st year', '111', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0088', 'Ningmu', 'Ning', 'Mendoza', 'Non-Binary', 'Civil Engineering', '1st year', '108', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0089', 'Harith', 'Leonin', 'Mendoza', 'Male', 'Civil Engineering', '1st year', '103', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0090', 'Ronald', 'Pulga', 'Mendoza', 'Male', 'N/A', 'N/A', '', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0091', 'Juan Paolo', 'Near', 'Far', 'Male', 'Psychology', '2nd year', '204', 'Life Update', '', 'Student feels better', '2024-04-22 23:19:50'),
('C0092', 'Denise Joy', 'Mama', 'Papa', 'Female', 'Psychology', '2nd year', '204', 'Family Problems', '', 'Seek professional help', '2024-04-22 23:19:50'),
('C0093', 'Alexa', 'Mendoza', 'Herrera', 'Female', 'Midwifery', '2nd year', '202', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0094', 'April', 'May', 'June', 'Female', 'Midwifery', '2nd year', '201', 'Academic Problem', '', 'Problem solved', '2024-04-22 23:19:50'),
('C0095', 'Ansherina', 'Garcia', 'Encarnado', 'Female', 'Nursing', '1st year', '101', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0096', 'Clive', 'Luke', 'Layton', 'Prefer not to say', 'Nursing', '1st year', '111', 'Life Update', '', 'Student feels better', '2024-04-22 23:19:50'),
('C0097', 'David Jefferson', 'Maangas', 'Maranan', 'Male', 'Civil Engineering', '1st year', '101', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0098', 'Dandelion', 'Sunflower', 'Lavender', 'Binary', 'Psychology', '3rd year', '308', 'Venting Thoughts', '', 'Need another counseling', '2024-04-22 23:19:50'),
('C0099', 'Chair', 'Table', 'Window', 'Binary', 'Information System', '3rd year', '303', 'Academic Problem', '', 'Problem solved', '2024-04-22 23:19:50'),
('C0100', 'Jash', 'Goat', 'Hindinaligo', 'Female', 'Psychology', 'N/A', 'N/A', 'Academic Problem', '', 'Problem solved', '2024-04-22 23:19:50');

-- --------------------------------------------------------

--
-- Table structure for table `employee_record`
--

CREATE TABLE `employee_record` (
  `employee_ID` int(11) NOT NULL,
  `employee_username` varchar(45) NOT NULL,
  `employee_password` varchar(45) NOT NULL,
  `employee_firstName` varchar(45) NOT NULL,
  `employee_middleName` varchar(45) NOT NULL,
  `employee_lastName` varchar(45) NOT NULL,
  `employee_contactNum` varchar(15) NOT NULL,
  `type_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_record`
--

INSERT INTO `employee_record` (`employee_ID`, `employee_username`, `employee_password`, `employee_firstName`, `employee_middleName`, `employee_lastName`, `employee_contactNum`, `type_ID`) VALUES
(2, 'test', 'asdasd123123', 'test', 'a', 'bcd', '09165612094', 1);

-- --------------------------------------------------------

--
-- Table structure for table `employee_type`
--

CREATE TABLE `employee_type` (
  `type_ID` int(11) NOT NULL,
  `type_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_type`
--

INSERT INTO `employee_type` (`type_ID`, `type_desc`) VALUES
(1, 'Admin'),
(2, 'Employee');

-- --------------------------------------------------------

--
-- Table structure for table `leave_of_absence`
--

CREATE TABLE `leave_of_absence` (
  `record_ID` varchar(11) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `middleName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `department` varchar(45) NOT NULL,
  `year` varchar(45) NOT NULL,
  `section` varchar(45) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `document` varchar(255) NOT NULL,
  `status` varchar(45) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `leave_of_absence`
--

INSERT INTO `leave_of_absence` (`record_ID`, `firstName`, `middleName`, `lastName`, `gender`, `department`, `year`, `section`, `reason`, `document`, `status`, `remarks`, `date`) VALUES
('L0001', 'Fred Andrei', 'Abcede', 'Manaois', 'Male', 'Information System', '2nd Year', '201', 'Sick Leave', '96b5b0803fdb25ed49e1eda9c0cab837', 'Approved', '', '2024-04-30 18:34:14'),
('L0002', 'Aerol Karl', 'Porcalla', 'Palconete', 'Male', 'Civil Engineering', '1st Year', '101', 'Sick Leave', '96b5b0803fdb25ed49e1eda9c0cab837', 'Approved', '', '2024-04-30 19:24:51'),
('L0003', 'test1', 'test2', 'test3', 'Non-Binary', 'Nursing', '1st Year', '101', 'Sick Leave', '7jwg7snks6nc1', 'Rejected', 'not enough supporting documents', '2024-04-30 19:28:46'),
('L0004', 'test3', 'test4', 'test5', 'Prefer not to say', 'Psychology', '3rd Year', '304', 'Hospitalized', 'Palconete, Aerol Karl P.', 'Rejected', 'Not a supporting document', '2024-04-30 19:36:24');

-- --------------------------------------------------------

--
-- Table structure for table `others`
--

CREATE TABLE `others` (
  `record_ID` varchar(11) NOT NULL,
  `firstName` varchar(45) NOT NULL,
  `middleName` varchar(45) NOT NULL,
  `lastName` varchar(45) NOT NULL,
  `gender` varchar(45) NOT NULL,
  `course` varchar(45) NOT NULL,
  `year` varchar(45) NOT NULL,
  `section` varchar(45) NOT NULL,
  `reason` varchar(255) NOT NULL,
  `status` varchar(45) NOT NULL,
  `remarks` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `others`
--

INSERT INTO `others` (`record_ID`, `firstName`, `middleName`, `lastName`, `gender`, `course`, `year`, `section`, `reason`, `status`, `remarks`, `date`) VALUES
('O0001', 'John Ralph', 'Corsega', 'Mendoza', 'Male', 'Information System', '2nd year', '201', 'Drink Water', '', '-', '2024-04-22 21:20:20'),
('O0002', 'Fred Andrei', 'Malupet', 'Manaois', 'Male', 'Information System', '2nd year', '201', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0003', 'Aerol Karl', 'Mabangis', 'Palconote', 'Male', 'Information System', '2nd year', '201', 'Interview', '', '-', '2024-04-22 21:20:20'),
('O0004', 'Jashmin Joyce', 'Goat', 'Talipan', 'Female', 'Information System', '2nd year', '201', 'Kakanta', '', '-', '2024-04-22 21:20:20'),
('O0005', 'Roishell', 'Sombilon', 'Naadat', 'Female', 'Information System', '2nd year', '201', 'Interview', '', '-', '2024-04-22 21:20:20'),
('O0006', 'Lillia Samantha', 'Sumayo', 'Gargaceran', 'Female', 'Information System', '2nd year', '201', 'Rarampa', '', '-', '2024-04-22 21:20:20'),
('O0007', 'Mallow', 'Marsh', 'Mendoza', 'Female', 'Civil Engineering', '1st year', '111', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0008', 'Ningmu', 'Ning', 'Mendoza', 'Non-Binary', 'Civil Engineering', '1st year', '108', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0009', 'Harith', 'Leonin', 'Mendoza', 'Male', 'Civil Engineering', '1st year', '103', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0010', 'Ronald', 'Pulga', 'Mendoza', 'Male', 'N/A', 'N/A', '', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0011', 'Juan Paolo', 'Near', 'Far', 'Male', 'Psychology', '2nd year', '204', 'Photography', '', '-', '2024-04-22 21:20:20'),
('O0012', 'Denise Joy', 'Mama', 'Papa', 'Female', 'Psychology', '2nd year', '204', 'Interview', '', '-', '2024-04-22 21:20:20'),
('O0013', 'Alexa', 'Mendoza', 'Herrera', 'Female', 'Midwifery', '2nd year', '202', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0014', 'April', 'May', 'June', 'Female', 'Midwifery', '2nd year', '201', 'Drink Water', '', '-', '2024-04-22 21:20:20'),
('O0015', 'Ansherina', 'Garcia', 'Encarnado', 'Female', 'Nursing', '1st year', '101', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0016', 'Clive', 'Luke', 'Layton', 'Prefer not to say', 'Nursing', '1st year', '111', 'Photography', '', '-', '2024-04-22 21:20:20'),
('O0017', 'David Jefferson', 'Maangas', 'Maranan', 'Male', 'Civil Engineering', '1st year', '101', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0018', 'Dandelion', 'Sunflower', 'Lavender', 'Binary', 'Psychology', '3rd year', '308', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0019', 'Chair', 'Table', 'Window', 'Binary', 'Information System', '3rd year', '303', 'Drink Water', '', '-', '2024-04-22 21:20:20'),
('O0020', 'Jash', 'Goat', 'Hindinaligo', 'Female', 'Psychology', 'N/A', 'N/A', 'Drink Water', '', '-', '2024-04-22 21:20:20'),
('O0021', 'John Ralph', 'Corsega', 'Mendoza', 'Male', 'Information System', '2nd year', '201', 'Drink Water', '', '-', '2024-04-22 21:20:20'),
('O0022', 'Fred Andrei', 'Malupet', 'Manaois', 'Male', 'Information System', '2nd year', '201', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0023', 'Aerol Karl', 'Mabangis', 'Palconote', 'Male', 'Information System', '2nd year', '201', 'Interview', '', '-', '2024-04-22 21:20:20'),
('O0024', 'Jashmin Joyce', 'Goat', 'Talipan', 'Female', 'Information System', '2nd year', '201', 'Kakanta', '', '-', '2024-04-22 21:20:20'),
('O0025', 'Roishell', 'Sombilon', 'Naadat', 'Female', 'Information System', '2nd year', '201', 'Interview', '', '-', '2024-04-22 21:20:20'),
('O0026', 'Lillia Samantha', 'Sumayo', 'Gargaceran', 'Female', 'Information System', '2nd year', '201', 'Rarampa', '', '-', '2024-04-22 21:20:20'),
('O0027', 'Mallow', 'Marsh', 'Mendoza', 'Female', 'Civil Engineering', '1st year', '111', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0028', 'Ningmu', 'Ning', 'Mendoza', 'Non-Binary', 'Civil Engineering', '1st year', '108', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0029', 'Harith', 'Leonin', 'Mendoza', 'Male', 'Civil Engineering', '1st year', '103', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0030', 'Ronald', 'Pulga', 'Mendoza', 'Male', 'N/A', 'N/A', '', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0031', 'Juan Paolo', 'Near', 'Far', 'Male', 'Psychology', '2nd year', '204', 'Photography', '', '-', '2024-04-22 21:20:20'),
('O0032', 'Denise Joy', 'Mama', 'Papa', 'Female', 'Psychology', '2nd year', '204', 'Interview', '', '-', '2024-04-22 21:20:20'),
('O0033', 'Alexa', 'Mendoza', 'Herrera', 'Female', 'Midwifery', '2nd year', '202', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0034', 'April', 'May', 'June', 'Female', 'Midwifery', '2nd year', '201', 'Drink Water', '', '-', '2024-04-22 21:20:20'),
('O0035', 'Ansherina', 'Garcia', 'Encarnado', 'Female', 'Nursing', '1st year', '101', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0036', 'Clive', 'Luke', 'Layton', 'Prefer not to say', 'Nursing', '1st year', '111', 'Photography', '', '-', '2024-04-22 21:20:20'),
('O0037', 'David Jefferson', 'Maangas', 'Maranan', 'Male', 'Civil Engineering', '1st year', '101', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0038', 'Dandelion', 'Sunflower', 'Lavender', 'Binary', 'Psychology', '3rd year', '308', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0039', 'Chair', 'Table', 'Window', 'Binary', 'Information System', '3rd year', '303', 'Drink Water', '', '-', '2024-04-22 21:20:20'),
('O0040', 'Jash', 'Goat', 'Hindinaligo', 'Female', 'Psychology', 'N/A', 'N/A', 'Drink Water', '', '-', '2024-04-22 21:20:20'),
('O0041', 'John Ralph', 'Corsega', 'Mendoza', 'Male', 'Information System', '2nd year', '201', 'Drink Water', '', '-', '2024-04-22 21:20:20'),
('O0042', 'Fred Andrei', 'Malupet', 'Manaois', 'Male', 'Information System', '2nd year', '201', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0043', 'Aerol Karl', 'Mabangis', 'Palconote', 'Male', 'Information System', '2nd year', '201', 'Interview', '', '-', '2024-04-22 21:20:20'),
('O0044', 'Jashmin Joyce', 'Goat', 'Talipan', 'Female', 'Information System', '2nd year', '201', 'Kakanta', '', '-', '2024-04-22 21:20:20'),
('O0045', 'Roishell', 'Sombilon', 'Naadat', 'Female', 'Information System', '2nd year', '201', 'Interview', '', '-', '2024-04-22 21:20:20'),
('O0046', 'Lillia Samantha', 'Sumayo', 'Gargaceran', 'Female', 'Information System', '2nd year', '201', 'Rarampa', '', '-', '2024-04-22 21:20:20'),
('O0047', 'Mallow', 'Marsh', 'Mendoza', 'Female', 'Civil Engineering', '1st year', '111', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0048', 'Ningmu', 'Ning', 'Mendoza', 'Non-Binary', 'Civil Engineering', '1st year', '108', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0049', 'Harith', 'Leonin', 'Mendoza', 'Male', 'Civil Engineering', '1st year', '103', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0050', 'Ronald', 'Pulga', 'Mendoza', 'Male', 'N/A', 'N/A', '', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0051', 'Juan Paolo', 'Near', 'Far', 'Male', 'Psychology', '2nd year', '204', 'Photography', '', '-', '2024-04-22 21:20:20'),
('O0052', 'Denise Joy', 'Mama', 'Papa', 'Female', 'Psychology', '2nd year', '204', 'Interview', '', '-', '2024-04-22 21:20:20'),
('O0053', 'Alexa', 'Mendoza', 'Herrera', 'Female', 'Midwifery', '2nd year', '202', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0054', 'April', 'May', 'June', 'Female', 'Midwifery', '2nd year', '201', 'Drink Water', '', '-', '2024-04-22 21:20:20'),
('O0055', 'Ansherina', 'Garcia', 'Encarnado', 'Female', 'Nursing', '1st year', '101', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0056', 'Clive', 'Luke', 'Layton', 'Prefer not to say', 'Nursing', '1st year', '111', 'Photography', '', '-', '2024-04-22 21:20:20'),
('O0057', 'David Jefferson', 'Maangas', 'Maranan', 'Male', 'Civil Engineering', '1st year', '101', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0058', 'Dandelion', 'Sunflower', 'Lavender', 'Binary', 'Psychology', '3rd year', '308', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0059', 'Chair', 'Table', 'Window', 'Binary', 'Information System', '3rd year', '303', 'Drink Water', '', '-', '2024-04-22 21:20:20'),
('O0060', 'Jash', 'Goat', 'Hindinaligo', 'Female', 'Psychology', 'N/A', 'N/A', 'Drink Water', '', '-', '2024-04-22 21:20:20'),
('O0061', 'John Ralph', 'Corsega', 'Mendoza', 'Male', 'Information System', '2nd year', '201', 'Drink Water', '', '-', '2024-04-22 21:20:20'),
('O0062', 'Fred Andrei', 'Malupet', 'Manaois', 'Male', 'Information System', '2nd year', '201', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0063', 'Aerol Karl', 'Mabangis', 'Palconote', 'Male', 'Information System', '2nd year', '201', 'Interview', '', '-', '2024-04-22 21:20:20'),
('O0064', 'Jashmin Joyce', 'Goat', 'Talipan', 'Female', 'Information System', '2nd year', '201', 'Kakanta', '', '-', '2024-04-22 21:20:20'),
('O0065', 'Roishell', 'Sombilon', 'Naadat', 'Female', 'Information System', '2nd year', '201', 'Interview', '', '-', '2024-04-22 21:20:20'),
('O0066', 'Lillia Samantha', 'Sumayo', 'Gargaceran', 'Female', 'Information System', '2nd year', '201', 'Rarampa', '', '-', '2024-04-22 21:20:20'),
('O0067', 'Mallow', 'Marsh', 'Mendoza', 'Female', 'Civil Engineering', '1st year', '111', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0068', 'Ningmu', 'Ning', 'Mendoza', 'Non-Binary', 'Civil Engineering', '1st year', '108', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0069', 'Harith', 'Leonin', 'Mendoza', 'Male', 'Civil Engineering', '1st year', '103', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0070', 'Ronald', 'Pulga', 'Mendoza', 'Male', 'N/A', 'N/A', '', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0071', 'Juan Paolo', 'Near', 'Far', 'Male', 'Psychology', '2nd year', '204', 'Photography', '', '-', '2024-04-22 21:20:20'),
('O0072', 'Denise Joy', 'Mama', 'Papa', 'Female', 'Psychology', '2nd year', '204', 'Interview', '', '-', '2024-04-22 21:20:20'),
('O0073', 'Alexa', 'Mendoza', 'Herrera', 'Female', 'Midwifery', '2nd year', '202', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0074', 'April', 'May', 'June', 'Female', 'Midwifery', '2nd year', '201', 'Drink Water', '', '-', '2024-04-22 21:20:20'),
('O0075', 'Ansherina', 'Garcia', 'Encarnado', 'Female', 'Nursing', '1st year', '101', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0076', 'Clive', 'Luke', 'Layton', 'Prefer not to say', 'Nursing', '1st year', '111', 'Photography', '', '-', '2024-04-22 21:20:20'),
('O0077', 'David Jefferson', 'Maangas', 'Maranan', 'Male', 'Civil Engineering', '1st year', '101', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0078', 'Dandelion', 'Sunflower', 'Lavender', 'Binary', 'Psychology', '3rd year', '308', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0079', 'Chair', 'Table', 'Window', 'Binary', 'Information System', '3rd year', '303', 'Drink Water', '', '-', '2024-04-22 21:20:20'),
('O0080', 'Jash', 'Goat', 'Hindinaligo', 'Female', 'Psychology', 'N/A', 'N/A', 'Drink Water', '', '-', '2024-04-22 21:20:20'),
('O0081', 'John Ralph', 'Corsega', 'Mendoza', 'Male', 'Information System', '2nd year', '201', 'Drink Water', '', '-', '2024-04-22 21:20:20'),
('O0082', 'Fred Andrei', 'Malupet', 'Manaois', 'Male', 'Information System', '2nd year', '201', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0083', 'Aerol Karl', 'Mabangis', 'Palconote', 'Male', 'Information System', '2nd year', '201', 'Interview', '', '-', '2024-04-22 21:20:20'),
('O0084', 'Jashmin Joyce', 'Goat', 'Talipan', 'Female', 'Information System', '2nd year', '201', 'Kakanta', '', '-', '2024-04-22 21:20:20'),
('O0085', 'Roishell', 'Sombilon', 'Naadat', 'Female', 'Information System', '2nd year', '201', 'Interview', '', '-', '2024-04-22 21:20:20'),
('O0086', 'Lillia Samantha', 'Sumayo', 'Gargaceran', 'Female', 'Information System', '2nd year', '201', 'Rarampa', '', '-', '2024-04-22 21:20:20'),
('O0087', 'Mallow', 'Marsh', 'Mendoza', 'Female', 'Civil Engineering', '1st year', '111', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0088', 'Ningmu', 'Ning', 'Mendoza', 'Non-Binary', 'Civil Engineering', '1st year', '108', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0089', 'Harith', 'Leonin', 'Mendoza', 'Male', 'Civil Engineering', '1st year', '103', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0090', 'Ronald', 'Pulga', 'Mendoza', 'Male', 'N/A', 'N/A', '', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0091', 'Juan Paolo', 'Near', 'Far', 'Male', 'Psychology', '2nd year', '204', 'Photography', '', '-', '2024-04-22 21:20:20'),
('O0092', 'Denise Joy', 'Mama', 'Papa', 'Female', 'Psychology', '2nd year', '204', 'Interview', '', '-', '2024-04-22 21:20:20'),
('O0093', 'Alexa', 'Mendoza', 'Herrera', 'Female', 'Midwifery', '2nd year', '202', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0094', 'April', 'May', 'June', 'Female', 'Midwifery', '2nd year', '201', 'Drink Water', '', '-', '2024-04-22 21:20:20'),
('O0095', 'Ansherina', 'Garcia', 'Encarnado', 'Female', 'Nursing', '1st year', '101', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0096', 'Clive', 'Luke', 'Layton', 'Prefer not to say', 'Nursing', '1st year', '111', 'Photography', '', '-', '2024-04-22 21:20:20'),
('O0097', 'David Jefferson', 'Maangas', 'Maranan', 'Male', 'Civil Engineering', '1st year', '101', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0098', 'Dandelion', 'Sunflower', 'Lavender', 'Binary', 'Psychology', '3rd year', '308', 'Lounging', '', '-', '2024-04-22 21:20:20'),
('O0099', 'Chair', 'Table', 'Window', 'Binary', 'Information System', '3rd year', '303', 'Drink Water', '', '-', '2024-04-22 21:20:20'),
('O0100', 'Jash', 'Goat', 'Hindinaligo', 'Female', 'Psychology', 'N/A', 'N/A', 'Drink Water', '', '-', '2024-04-22 21:20:20'),
('O0101', 'Rimuru', '', 'Tempest', 'Non-Binary', 'N/A', 'N/A', '', 'Inquiry', '', '-', '2024-04-22 21:21:20');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `staff_ID` int(11) NOT NULL,
  `staff_firstName` varchar(45) NOT NULL,
  `staff_middleName` varchar(45) NOT NULL,
  `staff_lastName` varchar(45) NOT NULL,
  `staff_contactNum` varchar(12) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`staff_ID`, `staff_firstName`, `staff_middleName`, `staff_lastName`, `staff_contactNum`, `username`, `password`) VALUES
(3, 'Fred Andrei', 'Abcede', 'Manaois', '09165612094', 'test', '$2y$12$vv8c3Am9YfRlGg.Zi9vvLe3buBSfN.kpf2nhvPpXJpIvzmOd78mby');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_ID`);

--
-- Indexes for table `counselling`
--
ALTER TABLE `counselling`
  ADD PRIMARY KEY (`record_ID`);

--
-- Indexes for table `employee_record`
--
ALTER TABLE `employee_record`
  ADD PRIMARY KEY (`employee_ID`),
  ADD KEY `emp_type_fk` (`type_ID`);

--
-- Indexes for table `employee_type`
--
ALTER TABLE `employee_type`
  ADD PRIMARY KEY (`type_ID`);

--
-- Indexes for table `leave_of_absence`
--
ALTER TABLE `leave_of_absence`
  ADD PRIMARY KEY (`record_ID`);

--
-- Indexes for table `others`
--
ALTER TABLE `others`
  ADD PRIMARY KEY (`record_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`staff_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `employee_record`
--
ALTER TABLE `employee_record`
  MODIFY `employee_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `employee_type`
--
ALTER TABLE `employee_type`
  MODIFY `type_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `staff_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee_record`
--
ALTER TABLE `employee_record`
  ADD CONSTRAINT `emp_type_fk` FOREIGN KEY (`type_ID`) REFERENCES `employee_type` (`type_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
