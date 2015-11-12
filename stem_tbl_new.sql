-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.6.21 - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.1.0.4867
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping database structure for stem
DROP DATABASE IF EXISTS `stem`;
CREATE DATABASE IF NOT EXISTS `stem` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `stem`;


-- Dumping structure for table stem.admin
DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(11) DEFAULT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table stem.admin: ~0 rows (approximately)
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` (`id`, `username`, `password`) VALUES
	(1, 'admin', '123');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;


-- Dumping structure for table stem.appointments
DROP TABLE IF EXISTS `appointments`;
CREATE TABLE IF NOT EXISTS `appointments` (
  `appointment_id` int(11) NOT NULL AUTO_INCREMENT,
  `instructor_id` int(11) NOT NULL DEFAULT '0',
  `student_id` int(11) NOT NULL DEFAULT '0',
  `course_code` int(11) NOT NULL DEFAULT '0',
  `a_date` date NOT NULL DEFAULT '0000-00-00',
  `from_hour` int(11) NOT NULL DEFAULT '0',
  `to_hour` int(11) NOT NULL DEFAULT '0',
  `from_min` int(11) NOT NULL DEFAULT '0',
  `to_min` int(11) NOT NULL DEFAULT '0',
  `purpose` varchar(500) NOT NULL DEFAULT '0',
  `status` varchar(50) DEFAULT 'app_req',
  `row_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`appointment_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

-- Dumping data for table stem.appointments: ~4 rows (approximately)
/*!40000 ALTER TABLE `appointments` DISABLE KEYS */;
INSERT INTO `appointments` (`appointment_id`, `instructor_id`, `student_id`, `course_code`, `a_date`, `from_hour`, `to_hour`, `from_min`, `to_min`, `purpose`, `status`, `row_id`) VALUES
	(4, 1, 1, 1, '2015-11-10', 10, 5, 11, 5, 'dasddadsdd', 'app_req', NULL),
	(7, 1, 1, 2, '2015-11-10', 10, 5, 11, 5, 'dgd gdfgdfgdf gdg dfg', 'app_req', NULL),
	(8, 1, 1, 1, '2015-11-10', 10, 5, 11, 5, 'sdssfdsf', 'app_req', NULL),
	(9, 1, 1, 1, '2015-11-10', 11, 6, 12, 5, 'zxcxx gdfg df', 'app_req', 3);
/*!40000 ALTER TABLE `appointments` ENABLE KEYS */;


-- Dumping structure for table stem.complaint
DROP TABLE IF EXISTS `complaint`;
CREATE TABLE IF NOT EXISTS `complaint` (
  `complaint_id` int(11) NOT NULL AUTO_INCREMENT,
  `emailid` varchar(50) NOT NULL DEFAULT '0',
  `subject_name` varchar(50) DEFAULT NULL,
  `tutor_name` varchar(50) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `reply` varchar(50) DEFAULT NULL,
  `replied_by` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'pending',
  KEY `complaint_id` (`complaint_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table stem.complaint: ~0 rows (approximately)
/*!40000 ALTER TABLE `complaint` DISABLE KEYS */;
/*!40000 ALTER TABLE `complaint` ENABLE KEYS */;


-- Dumping structure for table stem.contact
DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `contact_id` int(11) NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `description` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'pending',
  KEY `contact_id` (`contact_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table stem.contact: ~0 rows (approximately)
/*!40000 ALTER TABLE `contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `contact` ENABLE KEYS */;


-- Dumping structure for table stem.courses_experience
DROP TABLE IF EXISTS `courses_experience`;
CREATE TABLE IF NOT EXISTS `courses_experience` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tutor_id` int(11) NOT NULL DEFAULT '0',
  `course_id` int(11) NOT NULL DEFAULT '0',
  `expertize` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table stem.courses_experience: ~0 rows (approximately)
/*!40000 ALTER TABLE `courses_experience` DISABLE KEYS */;
INSERT INTO `courses_experience` (`id`, `tutor_id`, `course_id`, `expertize`) VALUES
	(1, 1, 2, 'OK'),
	(2, 1, 1, 'Expert');
/*!40000 ALTER TABLE `courses_experience` ENABLE KEYS */;


-- Dumping structure for table stem.course_notifications
DROP TABLE IF EXISTS `course_notifications`;
CREATE TABLE IF NOT EXISTS `course_notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `option_type` varchar(50) DEFAULT NULL,
  `content` varchar(500) DEFAULT NULL,
  `student_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table stem.course_notifications: ~1 rows (approximately)
/*!40000 ALTER TABLE `course_notifications` DISABLE KEYS */;
INSERT INTO `course_notifications` (`id`, `option_type`, `content`, `student_id`) VALUES
	(1, 'courseNotExists', 'dfsdfdsf', 1),
	(2, 'limited', 'sfsf sdfsfsf s fsfsf sf', 1);
/*!40000 ALTER TABLE `course_notifications` ENABLE KEYS */;


-- Dumping structure for table stem.departments
DROP TABLE IF EXISTS `departments`;
CREATE TABLE IF NOT EXISTS `departments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `dept_name` varchar(100) DEFAULT NULL,
  `dept_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Dumping data for table stem.departments: ~5 rows (approximately)
/*!40000 ALTER TABLE `departments` DISABLE KEYS */;
INSERT INTO `departments` (`id`, `dept_name`, `dept_id`) VALUES
	(1, 'CIS', 'CIS'),
	(2, 'EE', 'EE'),
	(3, 'MEC', 'MEC'),
	(4, 'MBA', 'MBA'),
	(5, 'PHARMACY', 'PHARMACY');
/*!40000 ALTER TABLE `departments` ENABLE KEYS */;


-- Dumping structure for table stem.excel_date
DROP TABLE IF EXISTS `excel_date`;
CREATE TABLE IF NOT EXISTS `excel_date` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Year` int(11) DEFAULT NULL,
  `Term` varchar(50) DEFAULT NULL,
  `Department` varchar(50) DEFAULT NULL,
  `Number` int(11) DEFAULT NULL,
  `Section` int(11) DEFAULT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `InstructorID` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Dumping data for table stem.excel_date: ~0 rows (approximately)
/*!40000 ALTER TABLE `excel_date` DISABLE KEYS */;
/*!40000 ALTER TABLE `excel_date` ENABLE KEYS */;


-- Dumping structure for table stem.student
DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `student_name` varchar(50) DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone_number` bigint(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Accept',
  `major` varchar(50) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `term` varchar(50) DEFAULT NULL,
  `section` int(11) DEFAULT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table stem.student: ~1 rows (approximately)
/*!40000 ALTER TABLE `student` DISABLE KEYS */;
INSERT INTO `student` (`student_id`, `student_name`, `emailid`, `password`, `phone_number`, `address`, `status`, `major`, `year`, `term`, `section`) VALUES
	(1, 'chanti ', 'chantigadu502@gmail.com', '123', NULL, NULL, 'Accept', 'CIS', NULL, NULL, NULL);
/*!40000 ALTER TABLE `student` ENABLE KEYS */;


-- Dumping structure for table stem.student_to_tutor
DROP TABLE IF EXISTS `student_to_tutor`;
CREATE TABLE IF NOT EXISTS `student_to_tutor` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) NOT NULL DEFAULT '0',
  `courses_list` varchar(100) DEFAULT NULL,
  `phone_number` bigint(20) NOT NULL DEFAULT '0',
  `desp` varchar(1000) DEFAULT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table stem.student_to_tutor: ~2 rows (approximately)
/*!40000 ALTER TABLE `student_to_tutor` DISABLE KEYS */;
INSERT INTO `student_to_tutor` (`id`, `student_id`, `courses_list`, `phone_number`, `desp`, `status`) VALUES
	(1, 1, '2,1', 1234656799, 'sdsdfsfsd', 'pending'),
	(2, 1, '2,1', 8686148163, 'sdfd sdf ', 'pending');
/*!40000 ALTER TABLE `student_to_tutor` ENABLE KEYS */;


-- Dumping structure for table stem.stu_req_inconvenient_time
DROP TABLE IF EXISTS `stu_req_inconvenient_time`;
CREATE TABLE IF NOT EXISTS `stu_req_inconvenient_time` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `student_id` int(11) DEFAULT NULL,
  `subject_id` int(11) DEFAULT NULL,
  `date_selected` date DEFAULT NULL,
  `time` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'pending',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table stem.stu_req_inconvenient_time: ~2 rows (approximately)
/*!40000 ALTER TABLE `stu_req_inconvenient_time` DISABLE KEYS */;
INSERT INTO `stu_req_inconvenient_time` (`id`, `student_id`, `subject_id`, `date_selected`, `time`, `status`) VALUES
	(1, 1, 1, '2015-11-10', '18:10', 'pending'),
	(2, 1, 1, '2015-11-11', '8:10', 'pending');
/*!40000 ALTER TABLE `stu_req_inconvenient_time` ENABLE KEYS */;


-- Dumping structure for table stem.subject
DROP TABLE IF EXISTS `subject`;
CREATE TABLE IF NOT EXISTS `subject` (
  `subject_id` int(11) NOT NULL AUTO_INCREMENT,
  `subject_name` varchar(50) DEFAULT NULL,
  `course_id` varchar(50) DEFAULT NULL,
  `dept_id` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`subject_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Dumping data for table stem.subject: ~2 rows (approximately)
/*!40000 ALTER TABLE `subject` DISABLE KEYS */;
INSERT INTO `subject` (`subject_id`, `subject_name`, `course_id`, `dept_id`) VALUES
	(1, 'java', '111', 'CIS'),
	(2, 'C++', '112', 'CIS');
/*!40000 ALTER TABLE `subject` ENABLE KEYS */;


-- Dumping structure for table stem.tutor
DROP TABLE IF EXISTS `tutor`;
CREATE TABLE IF NOT EXISTS `tutor` (
  `tutor_id` int(11) NOT NULL AUTO_INCREMENT,
  `tutor_name` varchar(50) DEFAULT NULL,
  `instructor_id` varchar(50) DEFAULT NULL,
  `emailid` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `phone_number` bigint(20) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `subject` varchar(50) DEFAULT NULL,
  `working_hours` int(11) DEFAULT NULL,
  `working_days` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT 'Accept',
  `schedule_status` varchar(50) DEFAULT 'unschedule',
  PRIMARY KEY (`tutor_id`),
  UNIQUE KEY `emailid` (`emailid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- Dumping data for table stem.tutor: ~0 rows (approximately)
/*!40000 ALTER TABLE `tutor` DISABLE KEYS */;
INSERT INTO `tutor` (`tutor_id`, `tutor_name`, `instructor_id`, `emailid`, `password`, `phone_number`, `address`, `subject`, `working_hours`, `working_days`, `status`, `schedule_status`) VALUES
	(1, 'nukesh', NULL, 'nukesh.poodi@gmail.com', '123', 8686148163, '', '2,1', 5, 'Monday,Tuesday,Wednesday,Thursday,Friday,Saturday', 'Accept', 'unschedule');
/*!40000 ALTER TABLE `tutor` ENABLE KEYS */;


-- Dumping structure for table stem.tutor_schedule2
DROP TABLE IF EXISTS `tutor_schedule2`;
CREATE TABLE IF NOT EXISTS `tutor_schedule2` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tutor_id` int(11) DEFAULT NULL,
  `date_day` date NOT NULL DEFAULT '0000-00-00',
  `week_day` varchar(50) DEFAULT NULL,
  `fhours` int(11) NOT NULL DEFAULT '0',
  `fminutes` int(11) NOT NULL DEFAULT '0',
  `thours` int(11) DEFAULT '0',
  `tminutes` int(11) DEFAULT '0',
  `status` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

-- Dumping data for table stem.tutor_schedule2: ~8 rows (approximately)
/*!40000 ALTER TABLE `tutor_schedule2` DISABLE KEYS */;
INSERT INTO `tutor_schedule2` (`id`, `tutor_id`, `date_day`, `week_day`, `fhours`, `fminutes`, `thours`, `tminutes`, `status`) VALUES
	(1, 1, '2015-11-09', 'Monday', 10, 5, 12, 5, 'Preferred'),
	(2, 1, '2015-11-10', 'Tuesday', 10, 5, 11, 5, 'Preferred'),
	(3, 1, '2015-11-10', 'Tuesday', 11, 6, 12, 5, 'Preferred'),
	(4, 1, '2015-11-10', 'Tuesday', 13, 5, 14, 5, 'class'),
	(5, 1, '2015-11-11', 'Wednesday', 9, 5, 10, 5, 'Preferred'),
	(6, 1, '2015-11-10', 'Tuesday', 14, 5, 15, 5, 'Unavailable'),
	(7, 1, '2015-11-10', 'Tuesday', 12, 5, 13, 5, 'Unavailable'),
	(8, 1, '2015-11-10', 'Tuesday', 9, 0, 10, 0, 'Unavailable');
/*!40000 ALTER TABLE `tutor_schedule2` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
