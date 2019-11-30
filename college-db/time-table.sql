/*
SQLyog - Free MySQL GUI v5.13
Host - 5.0.22-community-nt : Database - time-table
*********************************************************************
Server version : 5.0.22-community-nt
*/

SET NAMES utf8;

SET SQL_MODE='';

create database if not exists `time-table`;

USE `time-table`;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO';

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `name` varchar(10) default NULL,
  `pwd` varchar(15) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `admin` */

insert into `admin` (`name`,`pwd`) values ('admin','admin');
insert into `admin` (`name`,`pwd`) values ('student','student');
insert into `admin` (`name`,`pwd`) values ('teacher','123');

/*Table structure for table `subjects` */

DROP TABLE IF EXISTS `subjects`;

CREATE TABLE `subjects` (
  `subjects` varchar(50) default NULL,
  `teacher` varchar(50) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `subjects` */

insert into `subjects` (`subjects`,`teacher`) values ('CA','NONE');
insert into `subjects` (`subjects`,`teacher`) values ('DA','Suma');

/*Table structure for table `teachsubject` */

DROP TABLE IF EXISTS `teachsubject`;

CREATE TABLE `teachsubject` (
  `subjects` varchar(50) default NULL,
  `teacher` varchar(50) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `teachsubject` */

insert into `teachsubject` (`subjects`,`teacher`) values ('CA','NONE');
insert into `teachsubject` (`subjects`,`teacher`) values ('DA','Suma');

/*Table structure for table `timetable` */

DROP TABLE IF EXISTS `timetable`;

CREATE TABLE `timetable` (
  `day` varchar(50) default NULL,
  `p1` varchar(50) default NULL,
  `p2` varchar(50) default NULL,
  `p3` varchar(50) default NULL,
  `p4` varchar(50) default NULL,
  `p5` varchar(50) character set latin1 collate latin1_spanish_ci default NULL,
  `p6` varchar(50) default NULL,
  `p7` varchar(50) default NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Data for the table `timetable` */

insert into `timetable` (`day`,`p1`,`p2`,`p3`,`p4`,`p5`,`p6`,`p7`) values ('MON                  ','CA','CA','CA','CA','Lunch','CA','CA');
insert into `timetable` (`day`,`p1`,`p2`,`p3`,`p4`,`p5`,`p6`,`p7`) values ('TUE    ','CA','CA','CA','CA','Lunch','CA','CA');
insert into `timetable` (`day`,`p1`,`p2`,`p3`,`p4`,`p5`,`p6`,`p7`) values ('WED      ','CA','CA','CA','CA','Lunch','CA','CA');
insert into `timetable` (`day`,`p1`,`p2`,`p3`,`p4`,`p5`,`p6`,`p7`) values ('THU    ','CA','CA','CA','CA','Lunch','CA','CA');
insert into `timetable` (`day`,`p1`,`p2`,`p3`,`p4`,`p5`,`p6`,`p7`) values ('FRI     ','CA','CA','CA','CA','Lunch','CA','CA');
insert into `timetable` (`day`,`p1`,`p2`,`p3`,`p4`,`p5`,`p6`,`p7`) values ('SAT    ','CA','CA','CA','CA','Lunch','CA','CA');

SET SQL_MODE=@OLD_SQL_MODE;