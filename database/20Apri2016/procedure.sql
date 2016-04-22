-- ------------------------------------------------------------------------------------------------------------------
      --                                                 users 
-- ------------------------------------------------------------------------------------------------------------------
-- ---------------------------------------------------------------------------
-- Create the insertUser stored procedure.
-- ---------------------------------------------------------------------------
DELIMITER $$
DROP PROCEDURE IF EXISTS addUser $$
CREATE PROCEDURE addUser(
	IN username VARCHAR(45),
	IN email VARCHAR(45),
	IN password VARCHAR(255),
	IN firstname VARCHAR(45),
	IN lastname VARCHAR(45))   
BEGIN                                                             
	INSERT INTO users(`username`,`email`, `password`, `firstname`, `lastname`)
	VALUES(username, email, password, firstname, lastname);
END $$ 


-- ---------------------------------------------------------------------------
-- check if a user have login or not
-- ---------------------------------------------------------------------------
DROP FUNCTION IF EXISTS hasLoggedIn $$
CREATE FUNCTION hasLoggedIn(p_username VARCHAR(45)) 
RETURNS BOOLEAN READS SQL DATA
/*
 * check and return true if user is currently logged in, else false.
 */
BEGIN
	RETURN (SELECT COUNT(*) FROM userlog_time WHERE `username`= p_username AND ISNULL(LogoutTime));
END $$
-- --------------------------------------------------------------------------
-- userlogin
-- --------------------------------------------------------------------------
DROP PROCEDURE IF EXISTS loginUser $$
CREATE PROCEDURE loginUser(p_username VARCHAR(45),p_password VARCHAR(255))
BEGIN	
SELECT u.email,u.firstname, u.lastname,l.LoginTime
FROM users u LEFT JOIN userlog_time l ON l.users_username=u.username
WHERE (u.username=p_username AND u.password=p_password) AND l.LoginTime=
	(select max(LoginTime) from userlog_time where password=p_password)
		into @on,@fn,@ln,@lt;

START TRANSACTION;
	UPDATE userlog_time SET LogoutTime=NOW() WHERE users_username=p_username AND LogoutTime IS NULL;
		INSERT INTO userlog_time(`users_username`,`users_password`,`LoginTime`, `LogoutTime`)
		VALUES (p_username, p_password, NOW(), NULL);
COMMIT;
	-- return full names and time of last login
IF (p_username and p_password) IS NOT NULL THEN
	SELECT p_username as username, @on as email, @fn as firstname, @ln as lastname, @lt as LoginTime FROM DUAL;
END IF;
END $$ 


/*DROP PROCEDURE IF EXISTS loginUser $$
CREATE PROCEDURE loginUser(IN UserName VARCHAR(45), IN Password VARCHAR(255))
BEGIN
 
  SELECT COUNT(username) FROM users WHERE userName = Username AND password = Password;
		
END $$
*/
-- --------------------------------------------------------------------------
-- to change the password of a user
-- --------------------------------------------------------------------------
DROP PROCEDURE ChangeUserPassword $$
CREATE PROCEDURE ChangeUserPassword(
  p_username       VARCHAR(45),
  p_OldPassword VARCHAR(255)  ,
  p_NewPassword VARCHAR(255) )
BEGIN
  UPDATE users
    SET password = p_NewPassword
    WHERE username = p_username
    AND password = p_OldPassword;
END $$


-- ---------------------------------------------------------------
-- Create the getUser stored procedure.
-- ---------------------------------------------------------------
DROP PROCEDURE IF EXISTS getUser $$
CREATE PROCEDURE getUser(IN p_username VARCHAR(45))
BEGIN 
	SELECT  username,
	email,
	firstname,
	password,
	lastname
	FROM users
	WHERE username = p_username;
END $$

-- ---------------------------------------------------------------
-- to logout a user using the name of the users
-- ---------------------------------------------------------------
DROP PROCEDURE IF EXISTS logoutUser $$
CREATE PROCEDURE logoutUser(p_username VARCHAR(45))
BEGIN
    UPDATE  userlog_time
    SET LogoutTime=NOW()
    WHERE users_username= p_username  AND ISNULL(LogoutTime) LIMIT 1;
END $$ 

-- ---------------------------------------------------------------------------
-- Create the UpdateUser stored procedure.
-- ---------------------------------------------------------------------------
DROP PROCEDURE IF EXISTS updateUser $$
CREATE PROCEDURE updateUser(IN p_username VARCHAR(45),
	IN email VARCHAR(45)     ,
	IN firstname VARCHAR(45) ,
	IN lastname VARCHAR(45)  )                               
BEGIN
UPDATE `users`
SET	
	username = username,
	email    = email     ,
	firstname= firstname ,
	lastname = lastName
WHERE username = p_username;
END $$
DELIMITER ;

-- ------------------------------------------------------------------------------------------------------------------------
--                					WHAT THE SYSTEM CONCERN THEY STUDENT ONLY
-- ------------------------------------------------------------------------------------------------------------------------
-- ---------------------------------------------------------------
-- Create the addstudent stored procedure.
-- ---------------------------------------------------------------
DELIMITER $$
DROP PROCEDURE IF EXISTS addStudent $$
CREATE PROCEDURE addStudent(
  IN firstname  VARCHAR(45) 	 ,
  IN lastname  VARCHAR(250) 	 ,
  IN gender_id  CHAR(1) 		 ,
  IN dateofbirth  DATE 			 ,
  IN placeofbirth  VARCHAR(42)   ,
  IN regionsoforigin_id  CHAR(2) ,
  IN email  VARCHAR(250)         ,
  IN IDnumber VARCHAR(12)	     ,
  IN address VARCHAR(250) 	     ,
  IN medicalstatus_id INT        ,
  IN classroom_id INT 		     ,
  IN academic_id INT 			 ,
  IN Photo      MEDIUMBLOB       )                    
BEGIN
	INSERT INTO student(`firstname`, `lastname`, `gender_id`,`dateofbirth`, `placeofbirth`, `regionsoforigin_id`,`email`,`IDnumber`,`address`, `medicalstatus_id`, `classroom_id`,`Photo`)
	VALUES (firstname, lastname, gender_id,dateofbirth, placeofbirth, regionsoforigin_id,email, IDnumber, address, medicalstatus_id,classroom_id,Photo);
	INSERT INTO academic_has_student(`academic_id`, `student_studentId`)
	VALUES(academic_id, LAST_INSERT_ID());
END $$
-- ---------------------------------------------------------------
-- Create the getStudent stored procedure.
-- ---------------------------------------------------------------
DROP PROCEDURE IF EXISTS getStudent $$
CREATE PROCEDURE getStudent(IN p_studentId INT)
BEGIN 
	SELECT studentId,
	firstname,
	lastname, 
	gender_id,
	dateofbirth AS DOB, 
	placeofbirth AS POB,
	rdescription,
	email, 
	IDnumber,
	address, 
	Msdescription,  
	registrationtime AS RT, 
	classname,
	academic_id,
    Photo
	FROM student S
	INNER JOIN classes_of_class C
	ON C.classId = S.classroom_id
	INNER JOIN medicalstatus m
	ON m.id = S.medicalstatus_id
	INNER JOIN regionsoforigin ROO
	ON ROO.Rid = S.regionsoforigin_id
	INNER JOIN gender G
	ON G.Gid = S.gender_id
	INNER JOIN academic_has_student Acs
	ON S.studentId = Acs.student_studentId
	INNER JOIN academic A
	ON A.id = Acs.academic_id
	LEFT JOIN g_related_s GS
	ON GS.student_id = S.studentId
	WHERE studentId = p_studentId;
END $$


-- ---------------------------------------------------------------------------
						-- GENERAL LIST OF STUDENT in a class
-- ---------------------------------------------------------------------------
DROP PROCEDURE IF EXISTS viewStudents $$
CREATE PROCEDURE viewStudents()
BEGIN 
	SELECT 
	studentId,
	firstname,
	lastname, 
	gender_id,	
	dateofbirth AS DOB, 
	placeofbirth AS POB,
	rdescription,
	email, 
	IDnumber,
	address, 
	Msdescription,  
	registrationtime AS RT, 
	classname,
	schoolyear,
    Photo
	FROM student S
	INNER JOIN classes_of_class C
	ON C.classId = S.classroom_id
	INNER JOIN medicalstatus m
	ON m.id = S.medicalstatus_id
	INNER JOIN academic_has_student Acs
	ON S.studentId = Acs.student_studentId
	INNER JOIN academic A
	ON A.id = Acs.academic_id
	INNER JOIN regionsoforigin ROO
	ON ROO.Rid = S.regionsoforigin_id
	INNER JOIN gender G
	ON G.Gid = S.gender_id
	LEFT JOIN g_related_s GS
	ON GS.student_id = S.studentId
	ORDER BY firstname;
END $$

-- ---------------------------------------------------------------------------
-- Create the UpdateStudent stored procedure.
-- ---------------------------------------------------------------------------
DROP PROCEDURE IF EXISTS updateStudent $$
CREATE PROCEDURE updateStudent(IN p_studentId INT ,
  IN firstname  VARCHAR(45) 	 ,
  IN lastname  VARCHAR(250) 	 ,
  IN gender_id  CHAR(1) 		 ,
  IN dateofbirth  DATE 			 ,
  IN placeofbirth  VARCHAR(42)   ,
  IN regionsoforigin_id  CHAR(2) ,
  IN email  VARCHAR(250)         ,
  IN IDnumber VARCHAR(12)	     ,
  IN address VARCHAR(250) 	     ,
  IN medicalstatus_id INT        ,
  IN classroom_id INT 		     ,
  IN Photo 		MEDIUMBLOB       )                               
BEGIN 
UPDATE `student` 
SET firstname        = firstname                     ,
	lastname         = lastname                      ,
	gender_id        = gender_id 					 ,
	dateofbirth      = dateofbirth     	             ,	    		        
	placeofbirth     = placeofbirth                  ,
	regionsoforigin_id = regionsoforigin_id   	     , 
	email            = email                         ,				        
    IDnumber         = IDnumber                      ,	   			        
	address          = address            	         ,				        
	medicalstatus_id = medicalstatus_id              ,  
	classroom_id     = classroom_id                  ,
	Photo 			 = photo
WHERE studentId = p_studentId;
END $$
-- ---------------------------------------------------------------------------
		-- delete a Student that is not in school not dismiss.
-- ---------------------------------------------------------------------------
DROP PROCEDURE IF EXISTS deleteStudent $$
CREATE PROCEDURE deleteStudent(IN p_studentId INT)   
BEGIN                                                             
	DELETE FROM student
	WHERE studentId = p_studentId;
END $$
-- ---------------------------------------------------------------
-- add student and guardian using one form
-- ---------------------------------------------------------------
DROP PROCEDURE IF EXISTS addStudentGuardian $$
CREATE PROCEDURE addStudentGuardian(
	  IN firstname  VARCHAR(45) 	  ,
	  IN lastname  VARCHAR(250) 	  ,
	  IN gender_id  CHAR(1) 		  ,
	  IN dateofbirth  DATE 			  ,
	  IN placeofbirth  VARCHAR(42)    ,
	  IN regionsoforigin_id  CHAR(2)  ,
	  IN email  VARCHAR(250)          ,
	  IN IDnumber VARCHAR(12)	      ,
	  IN address VARCHAR(250)	      ,
	  IN medicalstatus_id  INT        ,
	  IN classroom_id INT 		      ,
	  IN academic_id INT              ,
      IN Photo       MEDIUMBLOB       ,
	  IN G1name VARCHAR(100) 	      ,
	  IN G1email VARCHAR(250)         ,
	  IN G1phonenumber INT            ,
	  IN G1homeaddress VARCHAR(100)   ,
	  IN G2name VARCHAR(100) 	      ,
	  IN G2email VARCHAR(250)         ,
	  IN G2phonenumber INT            ,
	  IN G2homeaddress VARCHAR(100)   )   
BEGIN  
	call addStudent(firstname ,lastname,gender_id ,dateofbirth ,placeofbirth,regionsoforigin_id,email,IDnumber ,address ,medicalstatus_id,classroom_id,academic_id,photo);
	if (G1name is not Null)then 
		call addGuardian(G1name, G1email, G1phonenumber, G1homeaddress);	
	end if;
	if (G2name is not NULL)then
		call addGuardian(G2name, G2email, G2phonenumber, G2homeaddress);
	end if;
END $$

-- ---------------------------------------------------------------
-- Create the getMedicalstatus stored procedure.
-- ---------------------------------------------------------------
DROP PROCEDURE IF EXISTS getMedicalstatus $$
CREATE PROCEDURE getMedicalstatus ()
BEGIN 
	SELECT `id`, `Msdescription` FROM medicalstatus;
END $$
DELIMITER ;
-- -----------------------------------------------------------------------------------------------------------------
-- 											concern Academic year only
-- -----------------------------------------------------------------------------------------------------------------
DELIMITER $$
DROP PROCEDURE IF EXISTS Academicyear $$
CREATE PROCEDURE Academicyear()
BEGIN
	SELECT academic_id, student_studentId
    FROM academic_has_student;
END $$

/*DROP PROCEDURE IF EXISTS addAcademicyear $$
CREATE PROCEDURE addAcademicyear(IN student_studentId INT)
BEGIN
	INSERT INTO `academic_has_student`(`academic_id`,`student_studentId`)
	VALUES(LAST_INSERT_ID(), student_studentId);
END $$*/

-- ----------------------------------------------------------------------------
-- TRIGGER OF THE ACADEMIC YEAR
-- ----------------------------------------------------------------------------
/*DROP TRIGGER IF EXISTS `school`.`student_AFTER_INSERT` $$
CREATE DEFINER = CURRENT_USER TRIGGER `school`.`student_AFTER_INSERT` AFTER INSERT ON `student` FOR EACH ROW
BEGIN
	INSERT INTO `academic_has_student`(`academic_id`,`student_studentId`)
    VALUES(academic_id, student_studentId);
END $$ */
-- ---------------------------------------------------------------
-- Create the getAcademic stored procedure.
-- ---------------------------------------------------------------
DROP PROCEDURE IF EXISTS getAcademic $$
CREATE PROCEDURE getAcademic ()
BEGIN 
	SELECT `id`, `schoolyear` FROM academic;
END $$
DELIMITER ;
-- -------------------------------------------------------------------------------------------------------------
											-- concern the class only
-- -------------------------------------------------------------------------------------------------------------
-- -----------------------------------------------------------
	-- classlist of students in a particular classroom
-- -----------------------------------------------------------
DELIMITER $$
DROP PROCEDURE IF EXISTS getClasslistperclass $$
CREATE PROCEDURE getClasslistperclass(IN p_academic_id INT, IN p_classroom_id INT)
BEGIN 
	SELECT 
	CONCAT(firstname,',',lastname) AS fullname,
	classname,
	gender_id,
	schoolyear
	FROM student S
	INNER JOIN classes_of_class C
	ON C.classId = S.classroom_id
	INNER JOIN gender G
	ON G.Gid = S.gender_id
	INNER JOIN academic_has_student Acs
	ON S.studentId = Acs.student_studentId
	INNER JOIN academic A
	ON Acs.academic_id = A.id
	WHERE classroom_id = p_classroom_id and academic_id = p_academic_id
	ORDER BY firstname;
END $$
-- ----------------------------------------------------------------
		-- General classlist of students in a particular classes
-- ----------------------------------------------------------------
DROP PROCEDURE IF EXISTS Generalclasslist $$
CREATE PROCEDURE Generalclasslist (IN p_Clid INT, IN p_academic_id INT)
BEGIN

     select 
     CONCAT(firstname,',',lastname) AS fullname,   
	gender_id,
	classname,
	schoolyear
	FROM student S
	INNER JOIN classes_of_class C
	ON C.classId = S.classroom_id
	INNER JOIN gender G
	ON G.Gid = S.gender_id
	INNER JOIN academic_has_student Acs
	ON S.studentId = Acs.student_studentId
	INNER JOIN academic A
	ON Acs.academic_id = A.id
	where classes_id =some (select
		classes_id from classes_of_class where classes_id = p_Clid);
END $$
/*DROP PROCEDURE IF EXISTS Generallistinclasses $$
CREATE PROCEDURE Generallistinclasses (IN p_Clid INT, IN p_academic_id INT)
BEGIN
	DECLARE classroomId INT;
	DECLARE done INT;
	DECLARE cur_list CURSOR FOR SELECT classId FROM classroom WHERE classId =some(p_Clid);
	DECLARE CONTINUE HANDLER FOR NOT FOUND SET done = 1;
OPEN cur_list;
gen_list: LOOP
 FETCH cur_list INTO classroomId;
 IF done = 1 THEN 
  LEAVE gen_list;
 END IF;
 call Classlist(classroomId, p_academic_id);
END LOOP gen_list;
CLOSE cur_list;
END $$*/
-- ---------------------------------------------------------------
-- Create the getClassrooms stored procedure.
-- ---------------------------------------------------------------
DROP PROCEDURE IF EXISTS getSubClass $$
CREATE PROCEDURE getSubclass ()
BEGIN 
	SELECT `classId`, `classname` FROM classes_of_class;
END $$

-- --------------------------------------------------------------
-- classes from form 1A to 5D LSS1,LSA1 to USS1,USA5
-- --------------------------------------------------------------
DROP PROCEDURE IF EXISTS getClasses $$
CREATE PROCEDURE getClasses ()
BEGIN 
	SELECT `Clid`, `classname`, `classname1` 
	FROM classes_of_class C
	INNER JOIN class Cl
	ON C.classId = Cl.Clid;
END $$
DELIMITER ;
-- ---------------------------------------------------------------
-- Create the addGuardian stored procedure.
-- ---------------------------------------------------------------
DELIMITER $$
DROP PROCEDURE IF EXISTS addGuardian $$
CREATE PROCEDURE addGuardian(
	IN name VARCHAR(100) 	,			-- input parameter
	IN email VARCHAR(250)   ,			-- input parameter
	IN phonenumber INT      ,			-- input parameter
	IN homeaddress VARCHAR(100) )                        
BEGIN
	INSERT INTO guardian(`name`, `email`,`phonenumber`,`homeaddress`)
	VALUES (name, email, phonenumber, homeaddress);
END $$

-- ---------------------------------------------------------------
-- Create the getGuardian stored procedure.
-- ---------------------------------------------------------------
DROP PROCEDURE IF EXISTS getGuardian $$
CREATE PROCEDURE getGuardian(IN p_guardianId INT)
BEGIN
SELECT
	guardianId	,				-- input parameter
	name 		,				-- input parameter
	email		,				-- input parameter
	phonenumber	,				-- input parameter
	homeaddress
FROM guardian
WHERE guardianId = p_guardianId;
END $$

-- ----------------------------------------------------------------
-- GENERAL LIST OF ALL GUARDIAN
-- ----------------------------------------------------------------
DROP PROCEDURE IF EXISTS viewGuardians $$
CREATE PROCEDURE viewGuardians()
BEGIN
SELECT
	guardianId	,				-- input parameter
	name 		,				-- input parameter
	email		,				-- input parameter
	phonenumber	,				-- input parameter
	homeaddress
FROM guardian
ORDER BY name;
END $$

-- ----------------------------------------------------------------
-- Create the UpdateGuardian stored procedure.
-- ----------------------------------------------------------------
DROP PROCEDURE IF EXISTS updateGuardian $$
CREATE PROCEDURE updateGuardian(IN p_guardianId INT ,
	IN name VARCHAR(100) 	      ,
	IN email VARCHAR(250)         ,
	IN phonenumber INT            ,
	IN homeaddress VARCHAR(100))                               
BEGIN
UPDATE `guardian` 
SET name         = name           ,
	email		 = email          ,
	phonenumber  = phonenumber    ,
	homeaddress  = homeaddress           
WHERE guardianId = p_guardianId;
END $$

-- ----------------------------------------------------------------
-- delate a guardian
-- ----------------------------------------------------------------
DROP PROCEDURE IF EXISTS deleteGuardian $$
CREATE PROCEDURE deleteGuardian(IN p_guardianId INT)   
BEGIN                                                             
	DELETE FROM guardian
	WHERE guardianId = p_guardianId;
END $$
DELIMITER ;
-- ----------------------------------------------------------------------------------------------------------
						--            Relation between Students and Guardians
-- ----------------------------------------------------------------------------------------------------------
-- ----------------------------------------------------------------
-- insert to show how the Guardian and Student are related
-- ----------------------------------------------------------------
DELIMITER $$
DROP PROCEDURE IF EXISTS addGRelationshipS $$
CREATE PROCEDURE addGRelationshipS(
	relationship_id INT, 
	guardian_id INT    ,
	student_id INT     )
BEGIN
	INSERT INTO `g_related_s`(`relationship_id`,`guardian_id`,`student_id`)
    VALUES (relationship_id,guardian_id,student_id);
END $$

-- --------------------------------------------------------------
-- view out the relationship between guardian and student
-- --------------------------------------------------------------
DROP PROCEDURE IF EXISTS getGRelationS $$
CREATE PROCEDURE getGRelationS(p_student_id INT)
BEGIN
SELECT 
	name  ,
	relationship ,
	concat(firstname,lastname)      
FROM g_related_s GrS
INNER JOIN guardian G
ON G.guardianId = GrS.guardian_id
INNER JOIN relationship R
ON R.rId = GrS.relationship_id
INNER JOIN student S
ON S.studentId = GrS.student_id
WHERE student_id = p_student_id;
END $$
DELIMITER ;
-- ---------------------------------------------------------------
-- Create the addStaff stored procedure.
-- ---------------------------------------------------------------
DELIMITER $$
DROP PROCEDURE IF EXisTS addStaff $$
CREATE PROCEDURE addStaff(
	IN firstname VARCHAR(45)            ,						-- input parameter
	IN lastname VARCHAR(250)   	        ,						-- input parameter
	IN email VARCHAR(250) 	 		    ,						-- input parameter
	IN dateofbirth DATE                 , 						-- input parameter
	IN gender_id CHAR(1) 			    ,   					-- input parameter
	IN placeofbirth VARCHAR(42) 	 	,						-- input parameter
	IN homeaddress VARCHAR(250)   	    ,						-- input parameter
	IN NICnumber VARCHAR(15)   	        ,						-- input parameter
	IN phonenumber INT 			    	,						-- input parameter
	IN regionsoforigin_id CHAR(2)  	    ,						-- input parameter
	IN maritalstatus_MS CHAR(1) 		,						-- input parameter
	IN classmaster_id INT 			    ,						-- input parameter
	IN staffstatus_id INT 			    ,
	IN Photo      MEDIUMBLOB            )
BEGIN
	INSERT INTO `staff`(`firstname`, `lastname`, `email`, `dateofbirth`, `gender_id`, `placeofbirth`,`homeaddress`, `NICnumber`,`phonenumber`, `regionsoforigin_id`, `maritalstatus_MS`, `classmaster_id`, `staffstatus_id`,`Photo`)
	VALUES (firstname, lastname, email, dateofbirth, gender_id, placeofbirth, homeaddress, NICnumber, phonenumber, regionsoforigin_id, maritalstatus_MS, classmaster_id, staffstatus_id,Photo );
END $$


-- ---------------------------------------------------------------
-- Create the getStaff stored procedure.
-- ---------------------------------------------------------------
DROP PROCEDURE IF EXISTS getStaff $$
CREATE PROCEDURE getStaff(IN p_staffId INT)
BEGIN 
	SELECT  p_staffId      ,
	firstname 	           ,
	lastname 	  	       ,
	email  		           ,
	dateofbirth 	       ,
	gender_id              ,
	placeofbirth 		   ,
	homeaddress 	   	   ,
	NICnumber 	  	       ,
	phonenumber 		   ,
	regionsoforigin_id     ,
	MSdescription		   ,
	Cmdescription 		   ,
	SSdescription 	       ,
	Photo
	FROM staff
	INNER JOIN gender
	on gender.Gid = staff.gender_id
	INNER JOIN regionsoforigin
	on regionsoforigin.rId = staff.regionsoforigin_id
	INNER JOIN classmaster
	on classmaster.classmasterId = staff.classmaster_id
	INNER JOIN maritalstatus
	on maritalstatus.MS = staff.maritalstatus_MS
	INNER JOIN staffstatus
	on staffstatus.staffstatusId = staff.staffstatus_id
	WHERE staffId = p_staffId;
END $$


-- ---------------------------------------------------------------
-- Create the getStaff stored procedure.
-- ---------------------------------------------------------------
DROP PROCEDURE IF EXISTS viewStaffs $$
CREATE PROCEDURE viewStaffs()
BEGIN 
	SELECT 
	staffId   			   , 
	firstname 	           ,
	lastname 	  	       ,
	email  		           ,
	dateofbirth 	       , 
	gender_id              ,
	placeofbirth 		   ,
	homeaddress 	   	   ,
	NICnumber 	  	       ,
	phonenumber 		   ,
	regionsoforigin_id     ,
	MSdescription 	       ,
	Cmdescription 		   ,
	SSdescription  	   	   ,
	photo  
	FROM staff
	INNER JOIN gender
	on gender.Gid = staff.gender_id
	INNER JOIN regionsoforigin
	on regionsoforigin.rId = staff.regionsoforigin_id
	INNER JOIN classmaster
	on classmaster.classmasterId = staff.classmaster_id
	INNER JOIN maritalstatus
	on maritalstatus.MS = staff.maritalstatus_MS
	INNER JOIN staffstatus
	on staffstatus.staffstatusId = staff.staffstatus_id
	ORDER BY firstname;
END $$

-- ---------------------------------------------------------------------------
-- Create the UpdateStaff stored procedure.
-- ---------------------------------------------------------------------------
DROP PROCEDURE IF EXISTS updateStaff $$
CREATE PROCEDURE updateStaff(IN p_staffId INT,
	IN firstname VARCHAR(45)            ,
	IN lastname VARCHAR(250)   	        ,
	IN email VARCHAR(250) 	 		    ,
	IN dateofbirth DATE                 , 
	IN gender_id CHAR(1) 			    ,
	IN placeofbirth VARCHAR(42) 	 	,
	IN homeaddress VARCHAR(250)   	    ,
	IN NICnumber VARCHAR(15)   	        ,
	IN phonenumber INT 			    	,
	IN regionsoforigin_id CHAR(2)  	    ,
	IN maritalstatus_MS CHAR(1) 		,
	IN classmaster_id INT 			    ,
	IN staffstatus_id INT 			    ,
	IN Photo MEDIUMBLOB                 )	                               
BEGIN
UPDATE `staff` 
SET firstname        = firstname                     ,
	lastname         = lastname                      ,	
	email            = email                         ,
    dateofbirth      = dateofbirth     	             ,
	gender_id        = gender_id	   				 ,
	placeofbirth     = placeofbirth                  ,	   			        
	homeaddress      = homeaddress           	     ,
	NICnumber        = NICnumber                     ,
	phonenumber		 = phonenumber				     ,
	regionsoforigin_id = regionsoforigin_id 		 ,
	maritalstatus_MS = maritalstatus_MS			     ,
	classmaster_id	 = classmaster_id	    		 ,
	staffstatus_id	 = staffstatus_id				 ,
	Photo		     = Photo
WHERE staffId = p_staffId;
END $$

-- ---------------------------------------------------------------------------
-- Create the deleteStaff stored procedure.
-- ---------------------------------------------------------------------------
DROP PROCEDURE IF EXISTS deleteStaff $$
CREATE PROCEDURE deleteStaff(IN p_staffId INT)   
BEGIN                                                             
	DELETE FROM staff
	WHERE staffId = p_staffId;
END $$
-- ---------------------------------------------------------------
-- Create the getMaritalstatus stored procedure.
-- ---------------------------------------------------------------
DROP PROCEDURE IF EXISTS getMaritalstatus $$
CREATE PROCEDURE getMaritalstatus ()
BEGIN 
	SELECT `MS`, `MSdescription` FROM maritalstatus;
END $$
-- ---------------------------------------------------------------
-- Create the getStaffstatus stored procedure.
-- ---------------------------------------------------------------
DROP PROCEDURE IF EXISTS getStaffstatus $$
CREATE PROCEDURE getStaffstatus ()
BEGIN 
	SELECT `staffstatusId`, `SSdescription` FROM staffstatus;
END $$
-- ---------------------------------------------------------------
-- Create the getStaffstatus stored procedure.
-- ---------------------------------------------------------------
DROP PROCEDURE IF EXISTS getClassmaster $$
CREATE PROCEDURE getClassmaster ()
BEGIN 
	SELECT `classmasterId`, `Cmdescription` FROM classmaster;
END $$ 
DELIMITER ;
-- ---------------------------------------------------------------
-- Create the getGenderTypes stored procedure.
-- ---------------------------------------------------------------
DELIMITER $$
DROP PROCEDURE IF EXISTS getGenderTypes $$
CREATE PROCEDURE getGenderTypes ()
BEGIN 
	SELECT `Gid`, `gdescription` FROM gender;
END $$
DELIMITER ; 
-- ---------------------------------------------------------------
-- Create the getRelationship stored procedure.
-- ---------------------------------------------------------------
DELIMITER $$
DROP PROCEDURE IF EXISTS getRelationship $$
CREATE PROCEDURE getRelationship ()
BEGIN 
	SELECT `rId`, `relationship` FROM relationship;
END $$
DELIMITER ; 
-- ---------------------------------------------------------------
-- Create the getRegionsOfOrigin(getROO) stored procedure.
-- ---------------------------------------------------------------
DELIMITER $$
DROP PROCEDURE IF EXISTS getROO $$
CREATE PROCEDURE getROO ()
BEGIN 
	SELECT `Rid`, `rdescription` FROM regionsoforigin;
END $$
DELIMITER ;
-- --------------------------------------------------------------
-- addSubject 
-- --------------------------------------------------------------
DELIMITER $$
DROP PROCEDURE IF EXISTS addSubject $$
CREATE PROCEDURE addSubject(
	subjectname VARCHAR(100) 	,
	Coeff       smallint(6)     )			                     
BEGIN
	INSERT INTO `subjects`(`subjectname`, `Coeff`)
	VALUES (subjectname, Coeff);
END $$
-- ---------------------------------------------------------------
-- Create the viewSubject stored procedure.
-- ---------------------------------------------------------------
DROP PROCEDURE IF EXISTS viewSubjects $$
CREATE PROCEDURE viewSubjects ()
BEGIN 
	SELECT `subjectId`,'Belong to the department of' literal,`subjectname`, `Coeff`
	FROM subjects;
END $$

-- -------------------------------------------------------------
-- remove a subject
-- -------------------------------------------------------------
DROP PROCEDURE IF EXISTS removeSubject $$
CREATE PROCEDURE removeSubject(IN p_subjectId CHAR(4))   
BEGIN                                                             
	DELETE FROM subjects
	WHERE subjectId = p_subjectId;
END $$
DELIMITER ;
-- -------------------------------------------------------------
-- to view the exam type
-- -------------------------------------------------------------
DELIMITER $$
DROP PROCEDURE IF EXISTS getExamtype $$
CREATE PROCEDURE getExamtype()
BEGIN
	SELECT
		examtypeId,
		Name
	FROM exam_type;

END $$
-- --------------------------------------------------------------
-- addExamtimetable
-- --------------------------------------------------------------
DROP PROCEDURE IF EXisTS addExamtimetable $$
CREATE PROCEDURE addExamtimetable(
	examId        INT         ,
	exam_type_id  INT         ,
  	name          VARCHAR(45) ,
    start_date	  DATE        ,
    end_date      DATE        )
BEGIN
	INSERT INTO `examtimetable`(`examId`, `exam_type_id`, `name`, `start_date`, `end_date`)
	VALUES (examId, exam_type_id, name, start_date, end_date );
END $$

-- ----------------------------------------------------------------
-- insert exam marks
-- ----------------------------------------------------------------
DROP PROCEDURE IF EXisTS addExamMark $$
CREATE PROCEDURE addExamMark( 
	examtypeId     INT          ,
    student_id     INT          ,
	subjects_id    INT          ,
	seq_1          DOUBLE(100,30)  ,
	seq_2          DOUBLE(100,30)  )
	-- average                  DOUBLE  ,
	-- ranking          VARCHAR(45) ,
	-- subj_cls_avg          DOUBLE  ,
	-- teacher_remarks  VARCHAR(45) )
BEGIN
	INSERT INTO `exam_result`(`examtypeId`, `student_id`, `subjects_id`, `seq_1`, `seq_2`)
    VALUES(examtypeId,student_id,subjects_id,seq_1,seq_2);
END $$

-- -------------------------------------------------------------------
-- see students mark
-- -------------------------------------------------------------------
DROP PROCEDURE IF EXISTS viewMarks $$
CREATE PROCEDURE viewMarks()
BEGIN
	SELECT 
	examtypeId,
	firstname,
	subjectname,
	seq_1,seq_2,
	sum(seq_1+seq_2) as total,
	sum(seq_1+seq_2)/2.0 as avg,
	Coeff
	-- rank()
	-- subj_cls_avg,
	-- teacher_remarks       
	FROM exam_result ER
	INNER JOIN student S
	ON S.studentId = ER.student_id
	INNER JOIN subjects Subj
	ON Subj.subjectId = ER.subjects_id
	WHERE subjects_id = subjects_id;
END $$


DROP PROCEDURE IF EXISTS getMark $$
CREATE PROCEDURE getMark(IN p_student_id INT, IN p_subjects_id INT)
BEGIN
	SELECT 
	examtypeId,
	firstname,
	subjectname,
	seq_1,seq_2,
	avg((seq_1+seq_2)/2.0),
	Coeff,
	sum((seq_1+seq_2)/2.0)
	-- ranking,
	-- subj_cls_avg,
	-- teacher_remarks       
	FROM exam_result ER
	INNER JOIN student S
	ON S.studentId = ER.student_id
	INNER JOIN subjects Subj
	ON Subj.subjectId = ER.subjects_id;
END $$
DELIMITER ;