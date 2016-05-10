<?php
	session_start();
	error_reporting(E_ALL ^ E_WARNING);
	
	function mysqlquote($str){
		if(empty($str))
			return "NULL";
		else
			return "'" . $str . "'";
	}

	if(!isset($_POST['op']) || empty($_POST['op'])){
		echo "There are Missing operation(s)";
		exit(0);
	}
	$op = $_POST['op'];
	
	$opProc = array( "getsubjects"=>"getSubjects",
					 "getgendertype"=>"getGenderTypes",
					 "getregionsoforigin"=>"getROO",
					 "getacademic"=>"getAcademic",
					 "getMedicalstatus"=>"getMedicalstatus",
					 "getClasses"=>"getClasses",
					 "getSubclass"=>"getSubclass",
					 "getSubClass_of_class"=>"getSubClass_of_class",
					 "deleteStudent"=>"deleteStudent",
					 "getStudent"=>"getStudent",
					 "addStudentGuardian"=>"addStudentGuardian",
					 "updateStudent"=>"updateStudent",
					 "getstudent"=>"getStudent",
					 "viewStudents"=>"viewStudents",
					 "getmaritalstatus"=>"getMaritalstatus",
					 "getstaff"=>"getStaff",
					 "getclassmaster"=>"getClassmaster",
					 "getstaffstatus"=>"getStaffstatus",
					 "addStaff"=>"addStaff",
					 "insertparent"=>"insertParent",
					 "viewstaffs"=>"viewStaffs",
					 "updateStaff"=>"updateStaff",
					 "deletestaff"=>"deleteStaff",
					 "getGuardian"=>"getGuardian",
					 "viewGuardians"=>"viewGuardians",
					 "updateGuardian"=>"updateGuardian",
					 "deleteGuardian"=>"deleteGuardian",
					 "Academicyear"=>"Academicyear",
					 "addUser"=>"addUser",
					 "loginUser"=>"loginUser",
					 "ChangeUserPassword"=>"ChangeUserPassword",
					 "getUser"=>"getUser",
					 "logoutUser"=>"logoutUser",
					 "updateUser"=>"updateUser",
                     "getClasslistperclass"=>"getClasslistperclass",
                     "Generalclasslist"=>"Generalclasslist",
                     "addSubject"=>"addSubject",
                     "viewSubjects"=>"viewSubjects",
                     "removeSubject"=>"removeSubject",
                     "getExamtype"=>"getExamtype",
                     "addExamtimetable"=>"addExamtimetable",
                     "addExamMark"=>"addExamMark",
                     "viewMarks"=>"viewMarks",
                     "getMark"=>"getMark",
					 "Classlist"=>"Classlist");

	if(!isset($opProc[$op])){
		echo "Unknown operation: {$op}";
		exit(0);
	}
	
	$proc = $opProc[$op];
	
	$params = "";

	if(
		$op == "getgendertype" || $op == "getsubjects" || $op == "getregionsoforigin" || 
		$op == "getClasses" || $op == "getmaritalstatus" ||  $op == "getstaffstatus" || $op == "getclassmaster" || $op == "getSubclass" || $op == "viewSubjects" || $op == "getExamtype" || $op == "viewMarks" ||
		$op == "viewstaffs" || $op == "viewStudents" || $op == "viewStudents" || $op == "getMedicalstatus" || $op == "getacademic" || $op == "Academicyear"){



	}else if($op == "addUser"){
		$param1 = mysqlquote($_POST['u_user']);
		$param2 = mysqlquote($_POST['u_email']);
		$param3 = mysqlquote($_POST['u_pass']);
		$param4 = mysqlquote($_POST['u_fname']);
		$param5 = mysqlquote($_POST['u_lname']);
		
		$params = $param1 . ", " .$param2 .", ".
                          $param3.", ".$param4.", ".$param5;

       }else if($op == "loginUser"){
		$param1 = mysqlquote($_POST['username']);
		$param2 = mysqlquote($_POST['password']);


		    $_SESSION['user_id'] = $param1['id'];
			$_SESSION['user'] = ($_POST['username']);
                
		 // echo "Session variables are set.";
		
		$params = $param1 . ", " .$param2;

       }else if($op == "ChangeUserPassword"){
		$param1 = mysqlquote($_POST['change_user']);
		$param2 = mysqlquote($_POST['old_pass']);
		$param3 = mysqlquote($_POST['new_pass']);
		
		$params = $param1 . ", " .$param2 . ", " .$param3;

	}else if($op == "getUser"){
		$param1 = mysqlquote($_POST['g_id']);
		
		$params = $param1;

	}else if($op == "logoutUser"){
		$param1 = mysqlquote($_POST['l_id']);
		
        if (!empty($_SESSION['user_id'])) {
		$_SESSION['user_id'] = '';
	}
	session_destroy();

		$params = $param1;

	}else if($op == "updateUser"){
		$param1 = mysqlquote($_POST['upd_user']);
		$param2 = mysqlquote($_POST['upd_email']);
		$param3 = mysqlquote($_POST['upd_fname']);
		$param4 = mysqlquote($_POST['upd_lname']);

		$params = $param1.",".$param2.",".$param3.",".$param4;

    }else if($op == "getClasslistperclass"){
		$param1 = mysqlquote($_POST['class1']);
		$param2 = mysqlquote($_POST['p_academic_id']);
		

		$params = $param1.",".$param2;

	}else if($op == "Generalclasslist"){
		$param1 = mysqlquote($_POST['class_room1']);
		$param2 = mysqlquote($_POST['p_academic_id']);
		

		$params = $param1.",".$param2;

	}else if($op == "getstaff"){
		$param2 = mysqlquote($_POST['ssid']);

		$params = $param2;
	}else if($op == "deletestaff"){
			$param1 = mysqlquote($_POST['sid']);
		
		$params = $param1;

	}else if($op == "getSubClass_of_class"){
			$param1 = mysqlquote($_POST['cid']);
		
		$params = $param1;

	}else if($op == "getstudent"){
		$param2 = mysqlquote($_POST['sid']);

		$params = $param2;

	}else if($op == "getStudent"){
		$param3 = mysqlquote($_POST['sid']);
		
		$params = $param3;

	}else if($op == "deleteStudent"){
		$param1 = mysqlquote($_POST['sid']);
		
		$params = $param1;
	}else if($op == "getparent"){
		$param1 = mysqlquote($_POST['p_id']);
		
		$params = $param1;

	}else if($op == "getGuardian"){
		$param1 = mysqlquote($_POST['gid']);
		
		$params = $param1;
	}else if($op == "deleteGuardian"){
		$param1 = mysqlquote($_POST['gid']);
		
		$params = $param1;

	}else if($op == "param1"){
		$param1 = mysqlquote($_POST['param1']);
		
		$params = $param1;

	}else if($op == "param1"){
		$param1 = mysqlquote($_POST['param1']);
		
		$params = $param1;

	}else if($op == "param1"){
		$param1 = mysqlquote($_POST['param1']);
		
		$params = $param1;

	}else if($op == "param1"){
		$param1 = mysqlquote($_POST['param1']);
		
		$params = $param1;

	}else if($op == "addStudentGuardian"){
		$param1 = mysqlquote($_POST['s_fname']);
		$param2 = mysqlquote($_POST['s_lname']);
		$param3 = mysqlquote($_POST['gender1']);
		$param4 = mysqlquote($_POST['s_dob']);
		$param5 = mysqlquote($_POST['s_pob']);
		$param6 = mysqlquote($_POST['regions1']);
		$param7 = mysqlquote($_POST['s_email']);
		$param8 = mysqlquote($_POST['s_ID']);
		$param9 = mysqlquote($_POST['h_addr']);
		$param10 = mysqlquote($_POST['medical']);
		$param11 = mysqlquote($_POST['class_room']);
		$param12 = mysqlquote($_POST['s_academic']);
		$param13 = mysqlquote(base64_encode(file_get_contents($_FILES['fileinput']['tmp_name'])));
		$param14 = mysqlquote($_POST['g1_name']);
		$param15 = mysqlquote($_POST['g1_email']);
		$param16 = mysqlquote($_POST['g1_pnum']);
		$param17 = mysqlquote($_POST['g1_haddr']);
		$param18 = mysqlquote($_POST['g2_name']);
		$param19 = mysqlquote($_POST['g2_email']);
		$param20 = mysqlquote($_POST['g2_pnumb']);
		$param21 = mysqlquote($_POST['g2_haddr']);
		
		$params = $param1 .",". $param2 . ", " .$param3 .", " . $param4 . ", " . 
                          $param5 . ", " . 
		                  $param6. ", " . $param7 . ", " . $param8 . ", " . $param9 . ", " . 
                          $param10. ", " . 
                          $param11 . ", " .$param12 . ", " . $param13 . ", " . $param14 . ", " . 
                          $param15 . ", " . 
                          $param16 . ", " . $param17. ", " . $param18 . ", " . $param19 . ", " . 
                          $param20 . ", " . $param21 ;

       }else if($op == "insertparent"){
		$param1 = mysqlquote($_POST['fname']);
		$param2 = mysqlquote($_POST['lname']);
		$param3 = mysqlquote($_POST['haddress']);
		$param4 = mysqlquote($_POST['gender']);
		$param5 = mysqlquote($_POST['email']);
		$param6 = mysqlquote($_POST['prof']);
		$param7 = mysqlquote($_POST['pnum']);
		$param8 = mysqlquote($_POST['other']);
		
		$params = $param1 . ", " .$param2 .", " . $param3 . ", " . $param4 . ", " . 
			      $param5 . ", " . $param6 . ", " . $param7 . ", " . $param8;

       }else if($op == "addStaff"){
       	$param0 = mysqlquote($_POST['tittle']);
	    $param1 = mysqlquote($_POST['fname']);
	 	$param2 = mysqlquote($_POST['lname']);
	 	$param3 = mysqlquote($_POST['email']);
	 	$param4 = mysqlquote($_POST['dob']);
	 	$param5 = mysqlquote($_POST['sgender']);
	 	$param6 = mysqlquote($_POST['pob']);
	 	$param7 = mysqlquote($_POST['haddress']);
	 	$param8 = mysqlquote($_POST['nic']);
	 	$param9 = mysqlquote($_POST['pnum1']);
	 	$param10 = mysqlquote($_POST['sroo']);
	 	$param11 = mysqlquote($_POST['mlstatus']);
	 	$param12 = mysqlquote($_POST['cmaster']);
		$param13 = mysqlquote($_POST['status']);
		$param14 = mysqlquote(base64_encode(file_get_contents($_FILES['upload']['tmp_name'])));
		
	 	$params = $param0 . ", " .$param1 . ", " . $param2 .", " .$param3 .", " . $param4 . ", " . $param5 . ", " . 
                          $param6 . ", " . $param7 . ", " . $param8 . ", " . $param9 . ", " . $param10. ", ". 
                          $param11 . ", " . $param12 . ", " . $param13 . ", " . $param14;

       }else if($op == "updateStaff"){
	 	$param0 = mysqlquote($_POST['s_id']);
	        $param1 = mysqlquote($_POST['fnames']);
	 	$param2 = mysqlquote($_POST['lnames']);
	 	$param3 = mysqlquote($_POST['emails']);
	 	$param4 = mysqlquote($_POST['dobs']);
	 	$param5 = mysqlquote($_POST['sgenders']);
	 	$param6 = mysqlquote($_POST['pobs']);
	 	$param7 = mysqlquote($_POST['haddresss']);
	 	$param8 = mysqlquote($_POST['nics']);
	 	$param9 = mysqlquote($_POST['pnums']);
	 	$param10 = mysqlquote($_POST['sroos']);
	 	$param11 = mysqlquote($_POST['mlstatuss']);
	 	$param12 = mysqlquote($_POST['cmasters']);
		$param13 = mysqlquote($_POST['statuss']);
		$param14 = mysqlquote($_POST['statuss']);
		$param15 = mysqlquote(base64_encode(file_get_contents($_FILES['uploads']['tmp_name'])));

		
	 	$params = $param0. ", ". $param1 . ", " . $param2 .", " .$param3 .", " . $param4 . ", " . 
                          $param5 . ", " . $param6 . ", " . $param7 . ", " . $param8 . ", " . $param9 . ", " . 
                          $param10. ", " . $param11 . ", " . $param12 . ", " . $param13 . ", " . $param14;
       }else if($op == "updateStudent"){
		$param0 = mysqlquote($_POST['upd_id']);
		$param1 = mysqlquote($_POST['u_fname']);
		$param3 = mysqlquote($_POST['u_lname']);
		$param4 = mysqlquote($_POST['u_gender']);
		$param5 = mysqlquote($_POST['u_dob']);
		$param6 = mysqlquote($_POST['u_pob']);
		$param7 = mysqlquote($_POST['u_regions']);
		$param8 = mysqlquote($_POST['u_email']);
		$param9 = mysqlquote($_POST['u_ID']);
		$param10 = mysqlquote($_POST['uh_addr']);
		$param11= mysqlquote($_POST['u_medical']);
		$param12 = mysqlquote($_POST['u_class']);
		$param13 = mysqlquote($_POST['u_academic']);
		$param14 = mysqlquote(base64_encode(file_get_contents($_FILES['u_upload1']['tmp_name'])));
		// $param14 = mysqlquote($_POST['u_upload1']);

		$params = $param0 . ", " .$param1 . ", " .$param3 .", " . $param4 . ", " . $param5 . ", " . 
			  $param6 . ", " . $param7 . ", " . $param8 . ", " . $param9 . ", " . $param10. ", " . 
			  $param11 . ", " . $param12 . ", " . $param13 . ", " . $param14;

       }else if($op == "updateGuardian"){
		$param1 = mysqlquote($_POST['gid']);
		$param2 = mysqlquote($_POST['name']);
		$param3 = mysqlquote($_POST['email']);
		$param4 = mysqlquote($_POST['pnumb']);
		$param5 = mysqlquote($_POST['home']);
				
		$params = $param1.",".$param2.",".$param3.",".$param4.",".$param5;

       }else if($op == "Classlist"){
		$param1 = mysqlquote($_POST['cid']);
		
		$params = $param1;

	}else if($op == "addSubject"){
		$param1 = mysqlquote($_POST['subject']);
		$param2 = mysqlquote($_POST['coef']);
		
		$params = $param1.",".$param2;

    }else if($op == "removeSubject"){
		$param1 = mysqlquote($_POST['rid']);
		
		$params = $param1;

	}else if($op == "getMark"){
		$param1 = mysqlquote($_POST['gid']);
		
		$params = $param1;

    }else if($op == "addExamMark"){
		$param1 = mysqlquote($_POST['typeid']);
		$param2 = mysqlquote($_POST['student']);
		$param3 = mysqlquote($_POST['subject']);
		$param4 = mysqlquote($_POST['seq_1']);
		$param5 = mysqlquote($_POST['seq_2']);
				
		$params = $param1.",".$param2.",".$param3.",".$param4.",".$param5;

	}else if($op == "addExamtimetable"){
		$param1 = mysqlquote($_POST['exam']);
		$param2 = mysqlquote($_POST['type']);
		$param3 = mysqlquote($_POST['name']);
		$param4 = mysqlquote($_POST['start']);
		$param5 = mysqlquote($_POST['end']);
				
		$params = $param1.",".$param2.",".$param3.",".$param4.",".$param5;

	}else{
		echo "Operation not implemented: {$op}";
		exit(0);
	}

		
	$con = mysqli_connect("localhost", "root", "cornellekacy", "school");
	if (mysqli_connect_errno($con)) {
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
		exit(0);
	}
	
	$output = array();
		 $sql = "CALL {$proc}({$params});";
	//   if($op == "addStudentGuardian"){
	//   	echo $sql;
	//   	exit(0);
	 // }

	
	$res = mysqli_query($con, $sql);
	
	if($res){
		while($row = mysqli_fetch_assoc($res)){
			$output[] = $row;
		}
		echo header('Content-Type: application/json');
		echo json_encode($output);
		
	}else{
		echo "Database query error Due To: " . mysqli_error($con);
		exit(0);
	}
	
	mysqli_close($con);
?>
