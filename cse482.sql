-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 05:53 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cse482`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_agency`
--

CREATE TABLE `tbl_agency` (
  `agency_id` int(11) NOT NULL,
  `inputAgencyName` varchar(200) NOT NULL,
  `inputAgencyEmail` varchar(200) NOT NULL,
  `inputAgencyPassword` varchar(200) NOT NULL,
  `inputAgencyLicenseNumber` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_agency`
--

INSERT INTO `tbl_agency` (`agency_id`, `inputAgencyName`, `inputAgencyEmail`, `inputAgencyPassword`, `inputAgencyLicenseNumber`) VALUES
(1, 'Adventure Bangla', 'adventurebangla98@gmail.com', '52438f9059bb3cd9cdbb9da58b925dd4', 'BANGLADESH_N4C223'),
(2, 'Extreme Traveler', 'extremetraveler98@gmail.com', '52438f9059bb3cd9cdbb9da58b925dd4', 'BANGLADESH_F325RR');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contributer`
--

CREATE TABLE `tbl_contributer` (
  `contributer_id` int(11) NOT NULL,
  `inputContributerFullName` varchar(200) NOT NULL,
  `inputContributerEmail` varchar(200) NOT NULL,
  `inputContributerPassword` varchar(200) NOT NULL,
  `inputContributerLocation` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_contributer`
--

INSERT INTO `tbl_contributer` (`contributer_id`, `inputContributerFullName`, `inputContributerEmail`, `inputContributerPassword`, `inputContributerLocation`) VALUES
(3, 'Maliha Tasnim', 'maliha98@gmail.com', 'fb69f770b7cb17deb863e486a4fcbe18', 'Chittagong'),
(4, 'Adib Obaid', 'adib98@gmail.com', 'fb69f770b7cb17deb863e486a4fcbe18', 'Rajshahi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contribution`
--

CREATE TABLE `tbl_contribution` (
  `contribution_id` int(11) NOT NULL,
  `contributer_id` int(11) NOT NULL,
  `inputTouristPlaceName` varchar(200) NOT NULL,
  `inputPlaceDetails` text NOT NULL,
  `inputContributionDivision` varchar(200) NOT NULL,
  `inputCommunicationDetails` text NOT NULL,
  `inputTouristPlacePicture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_experience`
--

CREATE TABLE `tbl_experience` (
  `experience_id` int(11) NOT NULL,
  `traveler_id` int(11) NOT NULL,
  `inputExperienceTitle` varchar(200) NOT NULL,
  `inputExperienceDetails` text NOT NULL,
  `inputTravelingDivision` varchar(200) NOT NULL,
  `inputTravelingThingsToRemember` text NOT NULL,
  `inputTravelingPossibleExpense` varchar(200) NOT NULL,
  `inputTravelMomentExperiencePicture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_package`
--

CREATE TABLE `tbl_package` (
  `package_id` int(11) NOT NULL,
  `agency_id` int(11) NOT NULL,
  `inputPackageTitle` varchar(200) NOT NULL,
  `inputPackageDetails` text NOT NULL,
  `inputTourDivision` varchar(200) NOT NULL,
  `inputPackagePrice` varchar(200) NOT NULL,
  `inputPackageContactNo` varchar(200) NOT NULL,
  `inputPackageBannerFile` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_traveler`
--

CREATE TABLE `tbl_traveler` (
  `traveler_id` int(11) NOT NULL,
  `inputTravelerFullName` varchar(200) NOT NULL,
  `inputTravelerEmail` varchar(200) NOT NULL,
  `inputTravelerPassword` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_traveler`
--

INSERT INTO `tbl_traveler` (`traveler_id`, `inputTravelerFullName`, `inputTravelerEmail`, `inputTravelerPassword`) VALUES
(1, 'Jubayer Alam', 'jubayer98@gmail.com', '4bbc628d0796ceb8ebcbf7d6ab6df527'),
(2, 'Tanvir Masum', 'tanvir98@gmail.com', '4bbc628d0796ceb8ebcbf7d6ab6df527');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_agency`
--
ALTER TABLE `tbl_agency`
  ADD PRIMARY KEY (`agency_id`);

--
-- Indexes for table `tbl_contributer`
--
ALTER TABLE `tbl_contributer`
  ADD PRIMARY KEY (`contributer_id`);

--
-- Indexes for table `tbl_contribution`
--
ALTER TABLE `tbl_contribution`
  ADD PRIMARY KEY (`contribution_id`);

--
-- Indexes for table `tbl_experience`
--
ALTER TABLE `tbl_experience`
  ADD PRIMARY KEY (`experience_id`);

--
-- Indexes for table `tbl_package`
--
ALTER TABLE `tbl_package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `tbl_traveler`
--
ALTER TABLE `tbl_traveler`
  ADD PRIMARY KEY (`traveler_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_agency`
--
ALTER TABLE `tbl_agency`
  MODIFY `agency_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_contributer`
--
ALTER TABLE `tbl_contributer`
  MODIFY `contributer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_contribution`
--
ALTER TABLE `tbl_contribution`
  MODIFY `contribution_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_experience`
--
ALTER TABLE `tbl_experience`
  MODIFY `experience_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_package`
--
ALTER TABLE `tbl_package`
  MODIFY `package_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_traveler`
--
ALTER TABLE `tbl_traveler`
  MODIFY `traveler_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
