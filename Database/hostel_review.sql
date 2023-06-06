-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 31, 2023 at 08:48 AM
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
-- Database: `hostel_review`
--

-- --------------------------------------------------------

--
-- Table structure for table `asignin`
--

CREATE TABLE `asignin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `asignin`
--

INSERT INTO `asignin` (`id`, `name`, `password`) VALUES
(1, 'A21MCA2029', 'admin'),
(2, 'A21MCA20', 'admin'),
(3, 'A21MCA2023', 'admin'),
(4, 'A21MCA20209', 'admin'),
(5, 'A21MCA2033', 'kundan');

-- --------------------------------------------------------

--
-- Table structure for table `boys_feed_back`
--

CREATE TABLE `boys_feed_back` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `hostels` varchar(20) NOT NULL,
  `facility` varchar(20) NOT NULL,
  `rating` float NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `boys_feed_back`
--

INSERT INTO `boys_feed_back` (`id`, `name`, `hostels`, `facility`, `rating`, `review`) VALUES
(3, 'Kundan Kumar', 'Nek Chand-5', 'Dispencary', 3.5, 'Not Goods'),
(4, 'Chandan Kumar', 'Nek Chand-3', 'Room Cleaning', 3.5, 'Best cleaning'),
(5, 'Azad', 'Nek Chand-1', 'Electricity', 4.5, 'All times available'),
(6, 'Shekhar Kumar', 'Nek Chand-5', 'Saloon', 3, 'It is show expensive'),
(7, 'Anmol Khattri', 'Nek Chand-5', 'Mess', 2.5, 'Food has no any taste'),
(9, 'Chandan Kumar', 'Nek Chand-2', 'Guest Room', 2.5, 'They not allowed to live parents'),
(10, 'Ranjan Kumar', 'Nek Chand-4', 'Wifi', 5, 'Every times available'),
(11, 'Nitish Kumar', 'Nek Chand-6', 'Reading Room', 4.5, 'Always available for us'),
(12, 'Vishavash Kashyap', 'Zakir-A', 'Saloon', 3.5, 'Cost is high'),
(13, 'Avinash Kumar', 'Zakir-B', 'Lift', 3, 'After 10:00pm not available if we have emergency .'),
(14, 'Rohit Raj', 'Zakir-C', 'Mess', 3.5, 'Most of the time dinner is not good'),
(15, 'Chandramohan', 'Zakir-D', 'Electricity', 5, 'All times available'),
(16, 'Subudeepsen', 'Govind', 'Canteen', 4.5, 'Canteen is available at late night'),
(17, 'Shubhashish', 'Nek Chand-5', 'Saloon', 3.5, 'Cost is high');

-- --------------------------------------------------------

--
-- Table structure for table `breakfast`
--

CREATE TABLE `breakfast` (
  `id` int(11) NOT NULL,
  `items1` varchar(50) NOT NULL,
  `items2` varchar(50) NOT NULL,
  `items3` varchar(50) NOT NULL,
  `items4` varchar(50) NOT NULL,
  `items5` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `breakfast`
--

INSERT INTO `breakfast` (`id`, `items1`, `items2`, `items3`, `items4`, `items5`) VALUES
(5, 'Plain_Paratha', 'Puri_Sabji', 'Pav_Bhaji_Milk', 'Plain_Paratha', 'Plain_Paratha'),
(6, 'Plain_Paratha', 'Puri_Sabji', 'Pav_Bhaji_Milk', 'Bread_Jam_Butter_Milk', 'Plain_Paratha'),
(7, 'Daliya_Boiled_Egg_Bread', 'Bread_Jam_Butter_Upma', 'Chhole_Bhature', 'Stuffed_Paratha', 'Daliya_Banana_Bread_Jam'),
(8, 'Daliya_Boiled_Egg_Bread', 'Chhole_Bhature', 'Stuffed_Paratha_Curd', 'Daliya_Banana_Bread_Jam', 'Stuffed_Paratha'),
(9, 'Daliya_Boiled_Egg_Bread', 'Chhole_Bhature', 'Stuffed_Paratha_Curd', 'Daliya_Banana_Bread_Jam', 'Daliya_Banana_Bread_Jam'),
(10, 'Bread_Jam_Butter', 'Daliya_Boiled_Egg_Bread', 'Chhole_Bhature', 'Daliya_Banana_Bread_Jam', 'Plain_Paratha'),
(11, 'Stuffed_Paratha', 'Daliya_Boiled_Egg_Bread', 'Omlete_Bread_Jam_Butter', 'Daliya_Banana_Bread_Jam', 'Stuffed_Paratha');

-- --------------------------------------------------------

--
-- Table structure for table `contact_details`
--

CREATE TABLE `contact_details` (
  `id` int(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phonenumber` bigint(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_details`
--

INSERT INTO `contact_details` (`id`, `fname`, `lname`, `phonenumber`, `email`, `gender`) VALUES
(20, 'Kundan', 'Kumar', 9708961276, '21mca2029@cuchd.in', 'male'),
(21, 'Kundan', 'Kumar', 9708961276, '21mca2029@cuchd.in', 'female'),
(22, 'Muskan ', 'Goyal', 9708961276, 'fjsdkfjds@gmail.com', 'female'),
(23, 'Sweta', 'Sangam', 8434200692, 'swetasangam303@gmail.com', 'female'),
(24, 'Kundan', 'Kumar', 8434200692, '21mca2029@cuchd.in', 'male'),
(25, 'Ranjan', 'Kumar', 7764010512, 'ranjan789456@gmail.com', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `dinner`
--

CREATE TABLE `dinner` (
  `id` int(11) NOT NULL,
  `items1` varchar(50) NOT NULL,
  `items2` varchar(50) NOT NULL,
  `items3` varchar(50) NOT NULL,
  `items4` varchar(50) NOT NULL,
  `items5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dinner`
--

INSERT INTO `dinner` (`id`, `items1`, `items2`, `items3`, `items4`, `items5`) VALUES
(1, 'Dal_Palak', 'Chicken_Chilly', 'Palak_Paneer', 'Kadai_Chicken', 'Gulab_Jamun'),
(2, 'Dal_Palak', 'Chicken_Chilly', 'Palak_Paneer', 'Kerala_Chicken', 'Kadai_Paneer'),
(3, 'Dal_Palak', 'White_Chana', 'Palak_Paneer', 'Kerala_Chicken', 'Kadai_Paneer'),
(4, 'Dal_Palak', 'Chicken_Chilly', 'Palak_Paneer', 'Kerala_Chicken', 'Kadai_Paneer');

-- --------------------------------------------------------

--
-- Table structure for table `esignin`
--

CREATE TABLE `esignin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `esignin`
--

INSERT INTO `esignin` (`id`, `name`, `password`) VALUES
(1, 'E21MCA2029', 'admin'),
(2, 'E21MCA2028', '123456'),
(3, 'E21MCA2045', 'Kundan');

-- --------------------------------------------------------

--
-- Table structure for table `girls_feed_back`
--

CREATE TABLE `girls_feed_back` (
  `id` int(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `hostels` varchar(20) NOT NULL,
  `facility` varchar(20) NOT NULL,
  `rating` float NOT NULL,
  `review` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `girls_feed_back`
--

INSERT INTO `girls_feed_back` (`id`, `name`, `hostels`, `facility`, `rating`, `review`) VALUES
(17, 'Mansi Sharma', 'Tagore', 'Reading Room', 5, 'All times available'),
(25, 'Sweta Sangam', 'Shivalik', 'Canteen', 4.5, 'It`s food is so tasty'),
(26, 'Saffron', 'Tagore', 'Guest Room', 3.5, 'Not allowed parents'),
(27, 'Sakshi ', 'Shivalik', 'Canteen', 4.5, 'All times available'),
(28, 'Neha', 'Shukhna-B', 'Gym', 4.5, 'All essential things are available'),
(29, 'Anjali Kumari', 'LC-A', 'Dispencary', 3.5, 'Medicine not working properly'),
(30, 'Anisha Kumari', 'Shukhna-A', 'Electricity', 5, 'All time available'),
(31, 'Soni Kumari', 'LC-B', 'Room Cleaning', 4.5, 'Maid clean daily our rooms'),
(32, 'Simpi Yadav', 'LC-C', 'Saloon', 3.5, 'Cost is high'),
(33, 'Anjali Thakur', 'LC-D', 'Mess', 3.5, 'Food is not spicy'),
(34, 'Anamika Kumari', 'Shukhna-A', 'Electricity', 5, 'All times available');

-- --------------------------------------------------------

--
-- Table structure for table `lunch`
--

CREATE TABLE `lunch` (
  `id` int(11) NOT NULL,
  `items1` varchar(50) NOT NULL,
  `items2` varchar(50) NOT NULL,
  `items3` varchar(50) NOT NULL,
  `items4` varchar(50) NOT NULL,
  `items5` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lunch`
--

INSERT INTO `lunch` (`id`, `items1`, `items2`, `items3`, `items4`, `items5`) VALUES
(1, 'Jeera_rice', 'Veg_Biryani', 'Masoor_Matar', 'Plain_Paratha', 'Plain_Paratha'),
(2, 'Jeera_rice', 'Veg_Biryani', 'Mushroom_Matar', 'Kathal_Biryani', 'Kadai_Veg_Rice'),
(3, 'Khichdi_Curd', 'Veg_Biryani', 'Chicken_Biryani', 'Masroom_Matar', 'Nutry_Kima'),
(4, 'Khichdi_Curd', 'Veg_Biryani', 'Chicken_Biryani', 'Masroom_Matar', 'Kadai_Veg_Rice'),
(5, 'Khichdi_Curd', 'Veg_Biryani', 'Chicken_Biryani', 'Kathal_Biryani', 'Nutry_Kima');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `day` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `breakfast` varchar(255) NOT NULL,
  `lunch` varchar(255) NOT NULL,
  `snacks` varchar(255) NOT NULL,
  `dinner` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `day`, `date`, `breakfast`, `lunch`, `snacks`, `dinner`) VALUES
(12, 'Monday', '2023-05-01', 'Poha,Corn Flakes,Tea, Milk', 'Black Chana, Gajar Matar, Ghiya Raita, Rice ', 'Mix Pakoda', 'Chicken Chilly,Paneer do Pyaza, Yellow dal, Rice'),
(13, 'Tuesday', '2023-05-02', 'Stuffed_Parantha,Curd,Butter,Tea, Pickle', 'Dal_Makhani,Mix_Veg_Rice,Ghiya_Raita,Salad', 'Vef_Patties,Tea', 'White_Chana,Veg_Sambar,Halwa'),
(15, 'Wednesday', '2023-05-03', 'Dalia, Omelete, Banana, Bread, Butter', 'Kadhi Gatta, Rice, Aloo Baigan', 'Danish Bun, Tea', 'Rajma, Rice, Hara Kaddu, Chapati'),
(16, 'Thursday', '2023-05-04', 'Sabji_Puri, Tea', 'Dal_Makhani,Nutry_Matar, Boondi Raita, Rice, Chapati', 'Vada_Pav, Tea', 'Saboot_Masoor, Aloo_Gobhi, Rice, Sewaiyan');

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `name`, `password`) VALUES
(15, 'S21mca2029', 'kundan'),
(16, 'S21MCA2029', 'admin'),
(17, 'S21MCA2900', 'mansi'),
(18, 'S21MCA2025', 'admin'),
(24, 'S21MCA2026', 'admin'),
(27, 'S21MCA2838', 'Sweta'),
(28, 'S21MCA2050', 'Gajendra');

-- --------------------------------------------------------

--
-- Table structure for table `snacks`
--

CREATE TABLE `snacks` (
  `id` int(11) NOT NULL,
  `items1` varchar(50) NOT NULL,
  `items2` varchar(50) NOT NULL,
  `items3` varchar(50) NOT NULL,
  `items4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `snacks`
--

INSERT INTO `snacks` (`id`, `items1`, `items2`, `items3`, `items4`) VALUES
(1, 'Biscuit_Tea', 'Rusk_Tea', 'Danish_Bun_Tea', 'Samosa_Tea'),
(2, 'Veg_Petties_Tea', 'Rusk_Tea', 'Samosa_Tea', 'Namak_Pare_Tea'),
(3, 'Veg_Petties_Tea', 'Rusk_Tea', 'Samosa_Tea', 'Namkeen_Tea'),
(4, 'Veg_Petties_Tea', 'Rusk_Tea', 'Samosa_Tea', 'Namkeen_Tea'),
(5, 'Veg_Petties_Tea', 'Namak_Pare_tea', 'Samosa_Tea', 'Danish_Bun_Tea');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `asignin`
--
ALTER TABLE `asignin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `boys_feed_back`
--
ALTER TABLE `boys_feed_back`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `breakfast`
--
ALTER TABLE `breakfast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_details`
--
ALTER TABLE `contact_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dinner`
--
ALTER TABLE `dinner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `esignin`
--
ALTER TABLE `esignin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `girls_feed_back`
--
ALTER TABLE `girls_feed_back`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lunch`
--
ALTER TABLE `lunch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `snacks`
--
ALTER TABLE `snacks`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `asignin`
--
ALTER TABLE `asignin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `boys_feed_back`
--
ALTER TABLE `boys_feed_back`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `breakfast`
--
ALTER TABLE `breakfast`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact_details`
--
ALTER TABLE `contact_details`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `dinner`
--
ALTER TABLE `dinner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `esignin`
--
ALTER TABLE `esignin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `girls_feed_back`
--
ALTER TABLE `girls_feed_back`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `lunch`
--
ALTER TABLE `lunch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `snacks`
--
ALTER TABLE `snacks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
