-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
-- -----------------------------------------------------
-- Schema school
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `school` ;

-- -----------------------------------------------------
-- Schema school
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `school` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `school` ;

-- -----------------------------------------------------
-- Table `academic`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `academic` ;

CREATE TABLE IF NOT EXISTS `academic` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `schoolyear` VARCHAR(128) NOT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`id` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `classes`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `classes` ;

CREATE TABLE IF NOT EXISTS `classes` (
  `Clid` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `classname1` VARCHAR(13) NOT NULL COMMENT '',
  PRIMARY KEY (`Clid`)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`Clid` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `classroom`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `classroom` ;

CREATE TABLE IF NOT EXISTS `classroom` (
  `classId` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `classes_id` INT(11) NOT NULL COMMENT '',
  `classname` VARCHAR(20) NOT NULL COMMENT '',
  PRIMARY KEY (`classId`)  COMMENT '',
  UNIQUE INDEX `classroom_UNIQUE` (`classId` ASC)  COMMENT '',
  UNIQUE INDEX `classname_UNIQUE` (`classname` ASC)  COMMENT '',
  INDEX `fk_classroom_classes1_idx` (`classes_id` ASC)  COMMENT '',
  CONSTRAINT `fk_classroom_classes1`
    FOREIGN KEY (`classes_id`)
    REFERENCES `classes` (`Clid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `gender`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `gender` ;

CREATE TABLE IF NOT EXISTS `gender` (
  `Gid` CHAR(1) NOT NULL COMMENT '',
  `gdescription` VARCHAR(6) NOT NULL COMMENT '',
  PRIMARY KEY (`Gid`)  COMMENT '',
  UNIQUE INDEX `gender_id_UNIQUE` (`Gid` ASC)  COMMENT '',
  UNIQUE INDEX `description_UNIQUE` (`gdescription` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `medicalstatus`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `medicalstatus` ;

CREATE TABLE IF NOT EXISTS `medicalstatus` (
  `id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `Msdescription` VARCHAR(128) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`id`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `regionsoforigin`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `regionsoforigin` ;

CREATE TABLE IF NOT EXISTS `regionsoforigin` (
  `Rid` CHAR(2) NOT NULL COMMENT '',
  `rdescription` VARCHAR(15) NOT NULL COMMENT '',
  PRIMARY KEY (`Rid`)  COMMENT '',
  UNIQUE INDEX `description_UNIQUE` (`rdescription` ASC)  COMMENT '',
  UNIQUE INDEX `regionoforigin_id_UNIQUE` (`Rid` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `student`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `student` ;

CREATE TABLE IF NOT EXISTS `student` (
  `studentId` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `firstname` VARCHAR(45) NOT NULL COMMENT '',
  `lastname` VARCHAR(250) NOT NULL COMMENT '',
  `gender_id` CHAR(1) NOT NULL COMMENT '',
  `dateofbirth` DATE NOT NULL COMMENT '',
  `placeofbirth` VARCHAR(42) NOT NULL COMMENT '',
  `regionsoforigin_id` CHAR(2) NOT NULL COMMENT '',
  `email` VARCHAR(250) NULL DEFAULT NULL COMMENT '',
  `IDnumber` VARCHAR(12) NULL DEFAULT NULL COMMENT '',
  `address` VARCHAR(250) NOT NULL COMMENT '',
  `medicalstatus_id` INT(11) NOT NULL COMMENT '',
  `registrationtime` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT '',
  `classroom_id` INT(11) NOT NULL COMMENT '',
  `Photo` MEDIUMBLOB NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`studentId`)  COMMENT '',
  UNIQUE INDEX `student_id` (`studentId` ASC)  COMMENT '',
  UNIQUE INDEX `email_UNIQUE` (`email` ASC)  COMMENT '',
  INDEX `fk_student_gender1_idx` (`gender_id` ASC)  COMMENT '',
  INDEX `fk_student_regionsoforigin1_idx` (`regionsoforigin_id` ASC)  COMMENT '',
  INDEX `fk_student_classroom1_idx` (`classroom_id` ASC)  COMMENT '',
  INDEX `fk_student_medicalstatus1_idx` (`medicalstatus_id` ASC)  COMMENT '',
  CONSTRAINT `fk_student_classroom1`
    FOREIGN KEY (`classroom_id`)
    REFERENCES `classroom` (`classId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_student_gender1`
    FOREIGN KEY (`gender_id`)
    REFERENCES `gender` (`Gid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_student_medicalstatus1`
    FOREIGN KEY (`medicalstatus_id`)
    REFERENCES `medicalstatus` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_student_regionsoforigin1`
    FOREIGN KEY (`regionsoforigin_id`)
    REFERENCES `regionsoforigin` (`Rid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `academic_has_student`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `academic_has_student` ;

CREATE TABLE IF NOT EXISTS `academic_has_student` (
  `academic_id` INT(11) NOT NULL COMMENT '',
  `student_studentId` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`academic_id`, `student_studentId`)  COMMENT '',
  INDEX `fk_academic_has_student_student1_idx` (`student_studentId` ASC)  COMMENT '',
  INDEX `fk_academic_has_student_academic1_idx` (`academic_id` ASC)  COMMENT '',
  CONSTRAINT `fk_academic_has_student_academic1`
    FOREIGN KEY (`academic_id`)
    REFERENCES `academic` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_academic_has_student_student1`
    FOREIGN KEY (`student_studentId`)
    REFERENCES `student` (`studentId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `attendance`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `attendance` ;

CREATE TABLE IF NOT EXISTS `attendance` (
  `Aid` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `student_id` INT(11) NOT NULL COMMENT '',
  `attended` VARCHAR(20) NULL DEFAULT NULL COMMENT '',
  `date` DATE NULL DEFAULT NULL COMMENT '',
  `time` TIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`Aid`)  COMMENT '',
  INDEX `fk_attendnce_student1_idx` (`student_id` ASC)  COMMENT '',
  CONSTRAINT `fk_attendnce_student1`
    FOREIGN KEY (`student_id`)
    REFERENCES `student` (`studentId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `classmaster`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `classmaster` ;

CREATE TABLE IF NOT EXISTS `classmaster` (
  `classmasterId` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `Cmdescription` CHAR(6) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`classmasterId`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `maritalstatus`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `maritalstatus` ;

CREATE TABLE IF NOT EXISTS `maritalstatus` (
  `MS` CHAR(1) NOT NULL COMMENT '',
  `MSdescription` VARCHAR(15) NOT NULL COMMENT '',
  PRIMARY KEY (`MS`)  COMMENT '',
  UNIQUE INDEX `MSdescription_UNIQUE` (`MSdescription` ASC)  COMMENT '',
  UNIQUE INDEX `MS_UNIQUE` (`MS` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `staffstatus`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `staffstatus` ;

CREATE TABLE IF NOT EXISTS `staffstatus` (
  `staffstatusId` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `SSdescription` CHAR(12) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`staffstatusId`)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`staffstatusId` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `staff`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `staff` ;

CREATE TABLE IF NOT EXISTS `staff` (
  `staffId` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `firstname` VARCHAR(45) NOT NULL COMMENT '',
  `lastname` VARCHAR(250) NOT NULL COMMENT '',
  `email` VARCHAR(250) NULL DEFAULT NULL COMMENT '',
  `dateofbirth` DATE NOT NULL COMMENT '',
  `gender_id` CHAR(1) NOT NULL COMMENT '',
  `placeofbirth` VARCHAR(42) NOT NULL COMMENT '',
  `homeaddress` VARCHAR(250) NOT NULL COMMENT '',
  `NICnumber` VARCHAR(15) NOT NULL COMMENT '',
  `phonenumber` INT(11) NULL DEFAULT NULL COMMENT '',
  `regionsoforigin_id` CHAR(2) NOT NULL COMMENT '',
  `maritalstatus_MS` CHAR(1) NOT NULL COMMENT '',
  `classmaster_id` INT(11) NOT NULL COMMENT '',
  `staffstatus_id` INT(11) NOT NULL COMMENT '',
  `photo` MEDIUMBLOB NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`staffId`)  COMMENT '',
  UNIQUE INDEX `staff_id_UNIQUE` (`staffId` ASC)  COMMENT '',
  UNIQUE INDEX `NICnumber_UNIQUE` (`NICnumber` ASC)  COMMENT '',
  UNIQUE INDEX `email_UNIQUE` (`email` ASC)  COMMENT '',
  UNIQUE INDEX `phonenumber_UNIQUE` (`phonenumber` ASC)  COMMENT '',
  INDEX `fk_staff_maritalstatus1_idx` (`maritalstatus_MS` ASC)  COMMENT '',
  INDEX `fk_staff_staffstatus1_idx` (`staffstatus_id` ASC)  COMMENT '',
  INDEX `fk_staff_classmaster1_idx` (`classmaster_id` ASC)  COMMENT '',
  INDEX `fk_staff_regionsoforigin1_idx` (`regionsoforigin_id` ASC)  COMMENT '',
  INDEX `fk_staff_gender1_idx` (`gender_id` ASC)  COMMENT '',
  CONSTRAINT `fk_staff_classmaster1`
    FOREIGN KEY (`classmaster_id`)
    REFERENCES `classmaster` (`classmasterId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_staff_gender1`
    FOREIGN KEY (`gender_id`)
    REFERENCES `gender` (`Gid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_staff_maritalstatus1`
    FOREIGN KEY (`maritalstatus_MS`)
    REFERENCES `maritalstatus` (`MS`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_staff_regionsoforigin1`
    FOREIGN KEY (`regionsoforigin_id`)
    REFERENCES `regionsoforigin` (`Rid`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_staff_staffstatus1`
    FOREIGN KEY (`staffstatus_id`)
    REFERENCES `staffstatus` (`staffstatusId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `classroom_has_staff`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `classroom_has_staff` ;

CREATE TABLE IF NOT EXISTS `classroom_has_staff` (
  `classroom_id` INT(11) NOT NULL COMMENT '',
  `staff_id` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`classroom_id`, `staff_id`)  COMMENT '',
  INDEX `fk_classroom_has_staff_staff1_idx` (`staff_id` ASC)  COMMENT '',
  INDEX `fk_classroom_has_staff_classroom1_idx` (`classroom_id` ASC)  COMMENT '',
  CONSTRAINT `fk_classroom_has_staff_classroom1`
    FOREIGN KEY (`classroom_id`)
    REFERENCES `classroom` (`classId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_classroom_has_staff_staff1`
    FOREIGN KEY (`staff_id`)
    REFERENCES `staff` (`staffId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `exam_type`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `exam_type` ;

CREATE TABLE IF NOT EXISTS `exam_type` (
  `examtypeId` CHAR(10) NOT NULL COMMENT '',
  `Name` ENUM('1st Seq','2nd Seq','3rd Seq','4th Seq','5th Seq','Exam') NOT NULL DEFAULT '1st Seq' COMMENT '',
  PRIMARY KEY (`examtypeId`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `examtimetable`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `examtimetable` ;

CREATE TABLE IF NOT EXISTS `examtimetable` (
  `examId` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `exam_type_id` CHAR(10) NOT NULL DEFAULT '1st Seq' COMMENT '',
  `name` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `start_date` DATE NOT NULL COMMENT '',
  `end_date` DATE NOT NULL COMMENT '',
  PRIMARY KEY (`examId`)  COMMENT '',
  UNIQUE INDEX `examId_UNIQUE` (`examId` ASC)  COMMENT '',
  INDEX `fk_exam_exam_type1_idx` (`exam_type_id` ASC)  COMMENT '',
  CONSTRAINT `fk_exam_exam_type1`
    FOREIGN KEY (`exam_type_id`)
    REFERENCES `exam_type` (`examtypeId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `subjects`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `subjects` ;

CREATE TABLE IF NOT EXISTS `subjects` (
  `subjectId` CHAR(4) NOT NULL COMMENT '',
  `subjectname` VARCHAR(45) NOT NULL COMMENT '',
  `Coeff` SMALLINT(6) NOT NULL COMMENT '',
  PRIMARY KEY (`subjectId`)  COMMENT '',
  UNIQUE INDEX `subjectname_UNIQUE` (`subjectname` ASC)  COMMENT '',
  UNIQUE INDEX `subject_id_UNIQUE` (`subjectId` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `exam_result`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `exam_result` ;

CREATE TABLE IF NOT EXISTS `exam_result` (
  `exam_id` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `student_id` INT(11) NOT NULL COMMENT '',
  `subjects_id` CHAR(4) NOT NULL COMMENT '',
  `seq_1` DOUBLE(3,2) NOT NULL COMMENT '',
  `seq_2` DOUBLE(3,2) NOT NULL COMMENT '',
  PRIMARY KEY (`exam_id`)  COMMENT '',
  UNIQUE INDEX `exam_id_UNIQUE` (`exam_id` ASC)  COMMENT '',
  INDEX `fk_examresult_exam1_idx` (`exam_id` ASC)  COMMENT '',
  INDEX `fk_examresult_student1_idx` (`student_id` ASC)  COMMENT '',
  INDEX `fk_examresult_subjects1` (`subjects_id` ASC)  COMMENT '',
  CONSTRAINT `fk_examresult_exam1`
    FOREIGN KEY (`exam_id`)
    REFERENCES `examtimetable` (`examId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_examresult_student1`
    FOREIGN KEY (`student_id`)
    REFERENCES `student` (`studentId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_examresult_subjects1`
    FOREIGN KEY (`subjects_id`)
    REFERENCES `subjects` (`subjectId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `guardian`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `guardian` ;

CREATE TABLE IF NOT EXISTS `guardian` (
  `guardianId` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(100) NOT NULL COMMENT '',
  `email` VARCHAR(250) NOT NULL COMMENT '',
  `phonenumber` DECIMAL(10,0) NOT NULL COMMENT '',
  `homeaddress` VARCHAR(100) NOT NULL COMMENT '',
  PRIMARY KEY (`guardianId`)  COMMENT '',
  UNIQUE INDEX `id_UNIQUE` (`guardianId` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `relationship`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `relationship` ;

CREATE TABLE IF NOT EXISTS `relationship` (
  `rId` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `relationship` VARCHAR(100) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`rId`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `g_related_s`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `g_related_s` ;

CREATE TABLE IF NOT EXISTS `g_related_s` (
  `relationship_id` INT(11) NOT NULL COMMENT '',
  `guardian_id` INT(11) NOT NULL COMMENT '',
  `student_id` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`relationship_id`)  COMMENT '',
  INDEX `fk_g_related_s_relationship1_idx` (`relationship_id` ASC)  COMMENT '',
  INDEX `fk_g_related_s_guardian1_idx` (`guardian_id` ASC)  COMMENT '',
  INDEX `fk_g_related_s_student1_idx` (`student_id` ASC)  COMMENT '',
  CONSTRAINT `fk_g_related_s_guardian1`
    FOREIGN KEY (`guardian_id`)
    REFERENCES `guardian` (`guardianId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_g_related_s_relationship1`
    FOREIGN KEY (`relationship_id`)
    REFERENCES `relationship` (`rId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_g_related_s_student1`
    FOREIGN KEY (`student_id`)
    REFERENCES `student` (`studentId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `grade`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `grade` ;

CREATE TABLE IF NOT EXISTS `grade` (
  `gradeId` INT(11) NOT NULL AUTO_INCREMENT COMMENT '',
  `name` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `desc` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`gradeId`)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `subjects_has_grade`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `subjects_has_grade` ;

CREATE TABLE IF NOT EXISTS `subjects_has_grade` (
  `subjects_id` CHAR(4) NOT NULL COMMENT '',
  `grade_id` INT(11) NOT NULL COMMENT '',
  `classroom_classId` INT(11) NOT NULL COMMENT '',
  PRIMARY KEY (`subjects_id`, `grade_id`, `classroom_classId`)  COMMENT '',
  INDEX `fk_subjects_has_grade_grade1_idx` (`grade_id` ASC)  COMMENT '',
  INDEX `fk_subjects_has_grade_subjects1_idx` (`subjects_id` ASC)  COMMENT '',
  INDEX `fk_subjects_has_grade_classroom1_idx` (`classroom_classId` ASC)  COMMENT '',
  CONSTRAINT `fk_subjects_has_grade_classroom1`
    FOREIGN KEY (`classroom_classId`)
    REFERENCES `classroom` (`classId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_subjects_has_grade_grade1`
    FOREIGN KEY (`grade_id`)
    REFERENCES `grade` (`gradeId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_subjects_has_grade_subjects1`
    FOREIGN KEY (`subjects_id`)
    REFERENCES `subjects` (`subjectId`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `users`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `users` ;

CREATE TABLE IF NOT EXISTS `users` (
  `username` VARCHAR(45) NOT NULL COMMENT '',
  `email` VARCHAR(45) NULL COMMENT '',
  `password` VARCHAR(255) NOT NULL COMMENT '',
  `firstname` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  `lastname` VARCHAR(45) NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`username`)  COMMENT '',
  UNIQUE INDEX `email_UNIQUE` (`email` ASC)  COMMENT '')
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `userlog_time`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `userlog_time` ;

CREATE TABLE IF NOT EXISTS `userlog_time` (
  `users_username` VARCHAR(45) NOT NULL COMMENT '',
  `LoginTime` VARCHAR(45) NOT NULL COMMENT '',
  `LogoutTime` DATETIME NULL DEFAULT NULL COMMENT '',
  PRIMARY KEY (`LoginTime`, `users_username`)  COMMENT '',
  INDEX `fk_userlog_time_users1_idx` (`users_username` ASC)  COMMENT '',
  CONSTRAINT `fk_userlog_time_users1`
    FOREIGN KEY (`users_username`)
    REFERENCES `users` (`username`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
