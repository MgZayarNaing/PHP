-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2023 at 01:58 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `res`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `b_name` varchar(200) NOT NULL,
  `b_email` varchar(200) NOT NULL,
  `b_peo` int(11) NOT NULL,
  `b_req` varchar(500) NOT NULL,
  `b_date` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `b_name`, `b_email`, `b_peo`, `b_req`, `b_date`) VALUES
(1, 'Zayar Naing', 'zayarnaing.st@gmail.com', 5, 'Booking ', '05/10/2023 6:20 PM'),
(2, 'Zayar Naing', 'zayarnaing.st@gmail.com', 3, 'Hello', '05/10/2023 6:22 PM'),
(3, 'Zayar Naing', 'zayarnaing.st@gmail.com', 3, 'Hello', '05/10/2023 6:22 PM'),
(4, 'Zayar Naing', 'zayarnaing.st@gmail.com', 3, 'Hello!', '05/10/2023 6:23 PM'),
(5, 'Zayar Naing', 'zayarnaing.st@gmail.com', 3, 'Hello!', '04/17/2023 7:53 PM'),
(6, 'Zayar Naing', 'zayarnaing.st@gmail.com', 3, 'Hello', '05/10/2023 6:22 PM'),
(7, 'Zayar Naing', 'zayarnaing.st@gmail.com', 3, 'Hello', '05/10/2023 6:22 PM'),
(8, 'Zayar Naing', 'zayarnaing.st@gmail.com', 3, 'Hello', '05/10/2023 6:22 PM'),
(9, 'Zayar Naing', 'zayarnaing.st@gmail.com', 3, 'Hello', '05/10/2023 6:22 PM'),
(10, 'Zayar Naing', 'zayarnaing.st@gmail.com', 3, 'Hello', '05/10/2023 6:22 PM');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`c_id`, `c_name`) VALUES
(1, 'အဓိကဟင်းပွဲများ'),
(2, 'အသီးအရွက်ကြော်များ'),
(3, 'အကြွပ်ကြော်များ'),
(4, 'ဟင်းရည်သောက်စရာများ'),
(5, 'အသားကင်နှင်အသုပ်ဟင်းလျာများ'),
(6, 'ထမင်းပေါင်းနှင့်ခေါက်ဆွဲအစားစာများ'),
(7, 'Drinks');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `cont_id` int(11) NOT NULL,
  `cont_name` varchar(200) NOT NULL,
  `cont_email` varchar(200) NOT NULL,
  `cont_sub` varchar(200) NOT NULL,
  `cont_mess` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`cont_id`, `cont_name`, `cont_email`, `cont_sub`, `cont_mess`) VALUES
(1, 'Zayar Naing', 'zayarnaing.st@gmail.com', 'Hello', 'Welcome!'),
(2, 'Zayar Naing', 'zayarnaing.st@gmail.com', 'Hello', 'Welcome!'),
(3, 'Zayar Naing', 'zayarnaing.st@gmail.com', 'Hello', 'Welcome!'),
(4, 'Zayar Naing', 'zayarnaing.st@gmail.com', 'Hello', 'Welcome!'),
(5, 'Zayar Naing', 'zayarnaing.st@gmail.com', 'Hello', 'Welcome!'),
(6, 'Zayar Naing', 'zayarnaing.st@gmail.com', 'Hello', 'Welcome!'),
(7, 'Zayar Naing', 'zayarnaing.st@gmail.com', 'Hello', 'Welcome!'),
(8, 'Zayar Naing', 'zayarnaing.st@gmail.com', 'Hello', 'Welcome!'),
(9, 'Zayar Naing', 'zayarnaing.st@gmail.com', 'Hello', 'Welcome!');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `it_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `it_name` varchar(200) NOT NULL,
  `it_price` varchar(200) NOT NULL,
  `it_img` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`it_id`, `cat_id`, `it_name`, `it_price`, `it_img`) VALUES
(1, 1, 'နံရိုးမီးတောက်', '9000 Ks', 'Flaming ribs.jpg'),
(2, 1, 'ဝက်လက်စတူး', '7000 Ks', 'ဝက်လက်စတူး.jpg'),
(3, 1, 'တုန်ယမ်းဝက်လက်ပေါင်း', '8000 Ks', 'တုန်ယမ်းဝက်လက်ပေါင်း.jpg'),
(4, 1, 'ဝက်ခရမ်းမြေအိုး', '6000 Ks', 'ဝက်ခရမ်းမြေအိုးjpg.jpg'),
(5, 2, 'ဝက်ခေါက်ကိုက်လံ', '5000 Ks', 'ဝက်ခေါက်ကိုက်လံ.jpg'),
(6, 2, 'မှိုကန်စွန်း', '4000 Ks', 'မှိုကန်စွန်း.jpg'),
(7, 2, 'ကန်စွန်းရွက်ချဥ်စပ်', '3500 Ks', 'ကန်စွန်းရွက်ချဥ်စပ်.jpg'),
(8, 2, 'ကန်စွန်ပလိန်း', '3000 Ks', 'ကန်စွန်ပလိန်း.jpg'),
(9, 3, 'နံရိုးနုကြော်', '6000 Ks', 'နံရိုးနုကြော်.jpg'),
(10, 3, 'အူစုံကြော်', '6000 Ks', 'အူစုံကြော်.jpg'),
(11, 4, 'ဝက်နံရိုးကြံမဆိုင်ဟင်းရည်', '6000 Ks', 'ဝက်နံရိုးကြံမဆိုင်ဟင်းရည်.jpg'),
(12, 4, 'ဝက်လက်စွတ်ပြုတ်', '6000 Ks', 'ဝက်လက်စွတ်ပြုတ်.jpg'),
(13, 4, 'ဝက်လက်ချဥ်စပ်ဟင်းရည်', '6000 Ks', 'ဝက်လက်ချဥ်စပ်ဟင်းရည်.jpg'),
(14, 4, 'ဝက်နံရိုးကြံမဆိုင်ဟင်းရည်', '6000 Ks', 'ဝက်နံရိုးကြံမဆိုင်ဟင်းရည်.jpg'),
(15, 5, 'အူစုံသုပ်', '6000 Ks', 'အူစုံသုပ်.jpg'),
(16, 5, 'အခေါက်ကင်သုပ်', '6000 Ks', 'အခေါက်ကင်သုပ်.jpg'),
(17, 5, 'ဝက်ဂုတ်သားကင်သုပ်', '6000 Ks', 'ဝက်ဂုတ်သားသုပ်.jpg'),
(18, 5, 'ရှယ်နံရိုးကင်', '6000 Ks', 'ရှယ်နံရိုးကင်.jpg'),
(19, 7, 'CocaCola', '1000 Ks', 'coca cola.jpg'),
(20, 7, 'Water', '1000 Ks', 'water.jpg'),
(21, 6, 'မြေအိုးထမင်း', '6000 Ks', 'မြေအိုးထမင်း.jpg'),
(22, 6, 'အူစုံထမင်းပေါင်း', '6000 Ks', 'အူစုံထမင်းပေါင်း.jpg'),
(23, 6, 'ချိုချဥ်ထမင်း', '6000 Ks', 'ချိုချဥ်ထမင်း.jpg'),
(24, 6, 'ပသျှူးထမင်းကြော်', '3000 Ks', 'ပသျှူးထမင်းကြော်.jpg'),
(25, 6, 'အခေါက်ကင်ထမင်းပေါင်း', '4000 Ks', 'အခေါက်ကင်ထမင်းပေါင်း.jpg'),
(26, 6, 'ချိုချဥ်ထမင်း', '3000 Ks', 'ချိုချဥ်ထမင်း.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `ord`
--

CREATE TABLE `ord` (
  `or_id` int(11) NOT NULL,
  `or_name` varchar(200) NOT NULL,
  `or_ph` varchar(100) NOT NULL,
  `or_email` varchar(200) NOT NULL,
  `deli_add` text NOT NULL,
  `or_date` date NOT NULL,
  `or_text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ord`
--

INSERT INTO `ord` (`or_id`, `or_name`, `or_ph`, `or_email`, `deli_add`, `or_date`, `or_text`) VALUES
(1, 'Zayar Naing', '09960408001', 'zayarnaing.st@gmail.com', 'Yangon', '2023-06-02', 'Hello!'),
(2, 'Zayar Naing', '09960408001', 'zayarnaing.st@gmail.com', 'Yangon', '2023-06-02', 'Hello!'),
(3, 'Zayar Naing', '09960408001', 'zayarnaing.st@gmail.com', 'Yangon', '2023-06-02', 'Hello!'),
(4, 'Zayar Naing', '09960408001', 'zayarnaing.st@gmail.com', 'Yangon', '2023-06-02', 'Hello!'),
(5, 'Zayar Naing', '09960408001', 'zayarnaing.st@gmail.com', 'Yangon', '2023-06-02', 'Hello!'),
(6, 'Zayar Naing', '09960408001', 'zayarnaing.st@gmail.com', 'Yangon', '2023-06-02', 'Hello!'),
(7, 'Zayar Naing', '09960408001', 'zayarnaing.st@gmail.com', 'Yangon', '2023-06-02', 'Hello!');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(11) NOT NULL,
  `reg_name` varchar(200) NOT NULL,
  `reg_email` varchar(200) NOT NULL,
  `reg_ph` varchar(200) NOT NULL,
  `reg_pass` varchar(200) NOT NULL,
  `reg_add` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `reg_name`, `reg_email`, `reg_ph`, `reg_pass`, `reg_add`) VALUES
(1, 'Zayar Naing', 'zay@gmail.com', '09960408001', '123', 'Yangon');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `usr_id` int(11) NOT NULL,
  `usr_email` varchar(100) NOT NULL,
  `usr_pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`usr_id`, `usr_email`, `usr_pass`) VALUES
(1, 'admin', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`cont_id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`it_id`);

--
-- Indexes for table `ord`
--
ALTER TABLE `ord`
  ADD PRIMARY KEY (`or_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `cont_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `it_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ord`
--
ALTER TABLE `ord`
  MODIFY `or_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
