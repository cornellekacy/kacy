INSERT INTO `relationship`(`relationship`)VALUES
('is_father_the_of'),
('is_mother_the_of'),
('is_Aunt_the_of'),
('is_Uncle_the_of'),
('is_Brother_the_of'),
('is_Sister_the_of'),
('is_Grandfather_the_of'),
('is_Grandmother_the_of'),
('is_Cousin_the_of');
-- ----------------------------------------------------------------
-- Insert data into medicalstatus table
-- ----------------------------------------------------------------
INSERT INTO `medicalstatus`(`Msdescription`)VALUES
('Medically fit'),
('Medically Disable');
-- -------------------------------------------------------------------
-- insert into EXAM_TYPE
-- -------------------------------------------------------------------
INSERT INTO `exam_type`(`name`)VALUES
('1st TERM'),
('2nd TERM'),
('3rd TERM');
-- ----------------------------------------------------------------
-- Insert data into grade table
-- ----------------------------------------------------------------
/*INSERT INTO `grade`(`name`, `desc`)VALUES
('A', 'EXCELLENT'),
('B', 'VERY GOOD'),
('C', 'AVERAGE'),
('D', 'FAIL'),
('U', 'USELESS');*/
-- ----------------------------------------------------------------
-- Insert data into Classroom table.
-- ----------------------------------------------------------------
INSERT INTO `class` (`classname1`)VALUES 
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
INSERT INTO `classes_of_class` (`classes_id`,`classname`)VALUES 
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
INSERT INTO `academic_year`(schoolyear)VALUES
('2015/2016'),
('2016/2017'),
('2017/2018'),
('2018/2019'),
('2019/2020');
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
--    insert date into the title table
-- -----------------------------------------------------------------
INSERT INTO `Title`(`tdescription`)VALUES
('Mr.'),
('Mrs.'),
('Miss');
-- -----------------------------------------------------------------
-- Insert data into maristalstatus table.
-- -----------------------------------------------------------------
INSERT INTO `maritalstatus`(`MS`, `MSdescription`)VALUES 
('S', 'SINGLE'),
('M', 'MARRIED');