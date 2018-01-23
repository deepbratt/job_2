-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 11, 2018 at 02:03 PM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `resumebrowse.com`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply`
--

CREATE TABLE IF NOT EXISTS `apply` (
  `apply_id` int(255) NOT NULL AUTO_INCREMENT,
  `job_id` varchar(255) NOT NULL,
  `employee_id` varchar(255) NOT NULL,
  `employer_id` varchar(255) NOT NULL,
  `message_data` longtext NOT NULL,
  `apply_date` varchar(255) NOT NULL,
  PRIMARY KEY (`apply_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `apply`
--

INSERT INTO `apply` (`apply_id`, `job_id`, `employee_id`, `employer_id`, `message_data`, `apply_date`) VALUES
(3, '1', '1', '2', 'heeqojd qhubds qnkpjdqb sa', '1515421162'),
(4, '1', '1', '2', 'heeqdsaojd qhubds qnkpjdqb sa', '1515421225'),
(5, '1', '1', '2', 'heeqdsaojd qhubds qnkpjdqb sa', '1515421266'),
(6, '1', '1', '2', 'yoo', '1515588525'),
(7, '1', '1', '2', '', '1515668707');

-- --------------------------------------------------------

--
-- Table structure for table `job_category`
--

CREATE TABLE IF NOT EXISTS `job_category` (
  `category_id` int(255) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `job_category`
--

INSERT INTO `job_category` (`category_id`, `category_name`) VALUES
(1, 'Accounting'),
(2, 'Administration & Office Support'),
(3, 'Advertising, Arts & Media'),
(4, 'Banking & Financial Services'),
(5, 'Call Centre & Customer Service'),
(6, 'Community Services & Development'),
(7, 'Design & Architecture'),
(8, 'Education & Teaching'),
(9, 'Engineering'),
(10, 'Farming & Veterinary'),
(11, 'Government & Defence'),
(12, 'Healthcare & Nursing'),
(13, 'Hospitality & Tourism'),
(14, 'Information & Communication Technology'),
(15, 'Legal'),
(16, 'Manufacturing, Transport & Logistics'),
(17, 'Marketing & Communications'),
(18, 'Mining, Resources & Energy'),
(19, 'Real Estate & Property'),
(20, 'Recruitment & HR'),
(21, 'Retail'),
(22, 'Sales'),
(23, 'Sports & Recreation'),
(24, 'Trades & Services'),
(25, 'Other Jobs');

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE IF NOT EXISTS `job_post` (
  `job_id` int(255) NOT NULL AUTO_INCREMENT,
  `company_id` varchar(255) NOT NULL,
  `job_title` varchar(255) NOT NULL,
  `job_category` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `salary_details` varchar(255) NOT NULL,
  `job_description` longtext NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `name_status` enum('yes','no') NOT NULL,
  `company_logo` varchar(255) NOT NULL,
  `logo_status` enum('yes','no') NOT NULL,
  `contact_name` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `job_status` varchar(255) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`job_id`, `company_id`, `job_title`, `job_category`, `location`, `type`, `salary_details`, `job_description`, `company_name`, `name_status`, `company_logo`, `logo_status`, `contact_name`, `contact_number`, `date`, `job_status`) VALUES
(2, '2', 'dwd', '9,14', 'dedwsd', 'Part Time', '$50k +', '<p>ded</p>\r\n', 'fefef', 'yes', '20903697029-twitter-256.png', 'no', 'ded', 'fefef', '1514902120', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `resume`
--

CREATE TABLE IF NOT EXISTS `resume` (
  `resume_id` int(255) NOT NULL AUTO_INCREMENT,
  `job_title` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `skills` longtext NOT NULL,
  `start_date` varchar(255) NOT NULL,
  `end_date` varchar(255) NOT NULL,
  `education` varchar(255) NOT NULL,
  `max_salary` varchar(255) NOT NULL,
  `travel_distance` varchar(255) NOT NULL,
  `relocate` varchar(255) NOT NULL,
  `resume_file` varchar(255) NOT NULL,
  `cover_letter` varchar(255) NOT NULL,
  `post_type` varchar(255) NOT NULL,
  `date_posted` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  PRIMARY KEY (`resume_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `resume`
--

INSERT INTO `resume` (`resume_id`, `job_title`, `company_name`, `skills`, `start_date`, `end_date`, `education`, `max_salary`, `travel_distance`, `relocate`, `resume_file`, `cover_letter`, `post_type`, `date_posted`, `user_id`) VALUES
(1, 'php developer', 'clickrstop software solutions private limited', 'php,jquery', '1543622400', '1543622400', 'b-tech', '30000', '10', 'yes', '60817Sujit_Sarkar.docx', '$cover_letter', 'limited', '1515237450', '1');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(255) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` longtext NOT NULL,
  `profile_picture` varchar(255) NOT NULL,
  `account_first_name` varchar(255) NOT NULL,
  `account_last_name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `postcode` varchar(255) NOT NULL,
  `comapny_name` varchar(255) NOT NULL,
  `registration_date` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL,
  `user_status` varchar(255) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `password`, `address`, `profile_picture`, `account_first_name`, `account_last_name`, `phone`, `postcode`, `comapny_name`, `registration_date`, `user_type`, `user_status`) VALUES
(1, 'himadri', 'majumder', 'himadrimajumder8@gmail.com', 'himadri', '17, no prosad niogi lane,bhadreswar,hooghly', '8534322007827_1608726472512982_2069707690914601452_n_Cropped.jpg', '', '', '8981695676', '712124', '', '1514968262', 'employee', 'pending'),
(2, 'yoo', 'yoo', 'yoo@gmail.com', 'yoo', '17, no prosad niogi lane,bhadreswar,hooghly', '17054main-qimg-ae7b71b727725a0b0e51f1b2d6980d88.png', 'yoo', 'majumder', '8981695676', '712124', 'clickrstop software solutions private limited', '1515067273', 'employeer', 'pending');
