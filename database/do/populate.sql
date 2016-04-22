-- ----------------------------------------------------------------
-- Insert data into Classroom table.
-- ----------------------------------------------------------------
INSERT INTO `classes` (`classname1`)VALUES 
('Form 1'),
('Form 2'),
('Form 3'),
('Form 4'),
('Form 5'),
('LSA'),
('LSS'),
('USA'),
('USS');

-- ----------------------------------------------------------------
-- Insert data into Classes table.
-- ----------------------------------------------------------------
INSERT INTO `classroom` (`classes_id`,`classname`)VALUES 
(1,'Form 1A'),
(1,'Form 1B'),
(1,'Form 1C'),
(1,'Form 1D'),
(2,'Form 2A'),
(2,'Form 2B'),
(2,'Form 2C'),
(2,'Form 2D'),
(3,'Form 3A'),
(3,'Form 3B'),
(3,'Form 3C'),
(3,'Form 3D'),
(4,'Form 4A'),
(4,'Form 4B'),
(4,'Form 4C'),
(4,'Form 4D'),
(5,'Form 5A'),
(5,'Form 5B'),
(5,'Form 5C'),
(5,'Form 5D'),
(6,'LSA1'),
(6,'LSA2'),
(6,'LSA3'),
(6,'LSA4'),
(6,'LSA5'),
(7,'lSS1'),
(7,'LSS2'),
(7,'LSS3'),
(7,'LSS4'),
(8,'USA1'),
(8,'USA2'),
(8,'USA3'),
(8,'USA4'),
(8,'USA5'),
(9,'USS1'),
(9,'USS2'),
(9,'USS3'),
(9,'USS4');

-- ----------------------------------------------------------------
-- Insert data into academic table
-- ----------------------------------------------------------------
INSERT INTO `academic`(schoolyear)VALUES
('2015/2016'),
('2016/2017'),
('2017/2018'),
('2018/2019'),
('2019/2020');

-- ----------------------------------------------------------------
-- Insert data into medicalstatus table
-- ----------------------------------------------------------------
INSERT INTO `medicalstatus`(`Msdescription`)VALUES
('Medically fit'),
('Medically Disable');

-- ----------------------------------------------------------------
-- Insert data into grade table
-- ----------------------------------------------------------------
INSERT INTO `grade`(`name`, `desc`)VALUES
('A', 'EXCELLENT'),
('B', 'VERY GOOD'),
('C', 'AVERAGE'),
('D', 'FAIL'),
('U', 'USELESS');

-- -----------------------------------------------------------------
-- Insert data into Gender table.
-- -----------------------------------------------------------------
INSERT INTO `gender`(`Gid`, `gdescription`)VALUES
 ('M', 'Male'),
 ('F', 'Female');

-- --------------------------------------------------------
-- Insert data into RegionsOfOrigin.
-- --------------------------------------------------------
INSERT INTO `regionsoforigin` (`Rid`, `rdescription`) VALUES
('NW', 'Northwest'),
('SW', 'Southwest'),
('WT', 'West'),
('FN', 'Far North'),
('ET', 'East'),
('SH', 'South'),
('NH', 'North'),
('CE', 'Centre'),
('AD', 'Adamawa'),
('LT', 'Littoral');


-- -----------------------------------------------------------------
-- insert data into staffstatus table
-- -----------------------------------------------------------------
INSERT INTO `staffstatus`(`SSdescription`)VALUES
('FULL TIME'),
('PART TIME');

-- -----------------------------------------------------------------
-- insert data into classmaster table
-- -----------------------------------------------------------------
INSERT INTO `classmaster`(`Cmdescription`)VALUES
('YES'),
('NO');


-- -----------------------------------------------------------------
-- Insert data into maristalstatus table.
-- -----------------------------------------------------------------
INSERT INTO `maritalstatus`(`MS`, `MSdescription`)VALUES 
('S', 'SINGLE'),
('M', 'MARRIED');


INSERT INTO `relationship`(`relationship`)VALUES
('father_of'),
('mother_of'),
('Aunt_of'),
('Uncle_of'),
('Brother_of'),
('Sister_of'),
('Grandfather_of'),
('Grandmother_of'),
('Cousin_of');

/*INSERT INTO PermissionTypes(`Mode`,Description)
VALUES('REPORT','create reports'),
('USER','manage users'),
('ADMIN','administer system data'),
('ENROL','do data entry'),
('AUTEX','authorize exceptions'),
('UPDATE','update records');

INSERT INTO MachineIDTypes(`Code`,Description)  VALUES('cpu','CPU serial number');
INSERT INTO MachineIDTypes(`Code`,Description)  VALUES('hdd','Hard disk serial number');
INSERT INTO MachineIDTypes(`Code`,Description)  VALUES('host','hostname');
INSERT INTO MachineIDTypes(`Code`,Description)  VALUES('mac','mac address');
*/
-- --------------------------------------------------------
-- Insert data into Subjects.
-- --------------------------------------------------------
/*INSERT INTO `subjects` (`subjectId`, `subjectcode`, `subjectname`) VALUES
-- ---------------------------------------------------------
-- ORDINARY LEVEL
-- ---------------------------------------------------------
('MATo', '570', 'MATHEMATICS'),
('FREo', '545', 'FRENCH o'),
('ENGo', '530', 'ENGLISH o'),
('CHMo', '515', 'CHEMISTRY 0'),
('BIOo', '510', 'BIOLOGY o'),
('ADMo', '575', 'ADDITIONAL MATH'),
('HBIo', '565', 'HUMAN BIOLOGY'),
('PHYo', '580', 'PHYSICS o'),
('ECOo', '525', 'ECONOMICS o'),
('GEOo', '550', 'GEOGRAPHY o'),
('FANo', '540', 'FOOD AND NUTRITION o'),
('ACCo', '505', 'Accounting o'),
('COMo', '520', 'COMMERCE'),
('CPUo', '595', 'COMPUTER SCIENCE o'),
('RESo', '585', 'RELIGION STUDIES o'),
('LITo', '535', 'LITERATURE IN ENGLISH o'),
('HISo', '560', 'HISTORY o'),
-- -----------------------------------------------------------
-- TECHNICAL SECTION
-- -----------------------------------------------------------
('BMao', '5073', 'Business Mathematics o'),
('E/T0', '5095', 'Electrical Technology o'),
('B/Co', '5010', 'Building Construction o'),
('E/So', '5100', 'ENGINEERING SCIENCE o'),
('LAGo', '5120', 'LAW AND GOVERNMENT'),
('H/Mo', '5115', 'HOME MANAGEMENT'),
('WAWo', '5170', 'WOODWORK'),
('MAMo', '5130', 'MOTOR MECHANIC'),
('HASo', '5110', 'HEALTH SCIENCE'),
('OFPo', '5135', 'OFFICE PRACTICE'),
('WOPo', '5175', 'WORD PROCESSING'),
('FFDo', '5105', 'FASHION & FABRIC DESIGN'),
('TADo', '5155', 'TECHNICAl DRAWING'),
-- ------------------------------------------------------
-- ADVANCE LEVEL
-- ------------------------------------------------------
('MWTa', '765', 'Math with Mechanics'),
('MWSa', '770', 'Math with Statistics'),
('FREa', '745', 'FRENCH'),
('ENGa', '730', 'ENGLISH'),
('CHMa', '715', 'CHEMISTRY'),
('BIOa', '710', 'BIOLOGY'),
('PHYa', '780', 'PHYSICS'),
('FMAa', '775', 'FURTHER MATH'),
('ECOa', '725', 'ECONOMICS'),
('GEOa', '750', 'Geography'),
('RESa', '785', 'RELIGION STUDIES'),
('LITa', '735', 'LITERATURE IN ENGLISH'),
('HISa', '760', 'HISTORY'),
('CPUa', '795', 'COMPUTER SCIENCE'),
('FANa', '740', 'FOOD AND NUTRITION'),
('ICTa', '796', 'Info and Comm. Tech'), 
('GELa', '755', 'GEOLOGY'),
('PHIa', '790', 'Philosophy'),
('ACCa', '705', 'Accounting'),
-- ------------------------------------------------------------
-- TECHNICAL SECTION
-- ------------------------------------------------------------
('C/Sa', '7180', 'Communication Skills'),
('BMaa', '7073', 'Business Mathematics'),
('B/Ca', '7010', 'Building Construction'),
('E/Ta', '7095', 'Electrical Technology'),
('S/Aa', '7145', 'Secretarial Administration'),
('MAMa', '7066', 'Mathematics and Mechanics'),
('D/Pa', '7090', 'Data Processing'),
('BMga', '7035', 'BUSINESS MANAGEMENT'),
('CAFa', '7020', 'COMMERCE AND FINANCE'),
('E/Sa', '7100', 'ENGINEERING SCIENCE'),
('MARa', '7125', 'MARKETING'),
('LAGa', '7060', 'LAW');