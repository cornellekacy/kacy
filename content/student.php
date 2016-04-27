
<!DOCTYPE html>
<html lang="en">
	<head>
	<style type="text/css">
	</style>
	<script type="text/javascript">

	</script>
	<style>
	</style>
	</head>
	<body>
  <div class="row">
	<div class="col-sm-13">
			  <div class="panel panel-default">
				    <div class="panel-body">
				      <div id="rtn"></div>
		<form id="student_form" onsubmit="addStudentGuardian(); return false;" method="POST" action="">
  <div class="row-fluid">
     <div class="col-md-4">
       <div class="form-group">
          <label for="s_fname">First Name</label>
          <input type="text" class="form-control" id="s_fname" required>
     </div>
   </div>
   <div class="col-md-4">
      <div class="form-group">
          <label for="s_lname">Last Name</label>
          <input type="text" class="form-control" id="s_lname" required>
      </div>
    </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="gender1">Gender</label>
      <select class="form-control" id="gender1">
    </select>
   </div>
  </div>
  <div class="row-fluid">
    <div class="col-md-4">
        <div class="form-group">
        <label for="sdob">Date Of Birth</label>
        <input type="text" class="form-control" id="s_dob">
    </div>
   </div>
  <div class="col-md-4">
      <div class="form-group">
      <label for="s_pob">Place Of Birth</label>
      <input type="text" class="form-control" id="s_pob">
    </div>
  </div>
  <div class="col-md-4">
      <div class="form-group">
      <label for="regions1">Region Of Origin:</label>
      <select class="form-control" id="regions1">
    </select>  
   </div>
   </div>
  </div>
  
  <div class="row-fluid">
   <div class="col-md-6">
    <div class="form-group">
      <label for="s_email">Email</label>
      <input type="email" class="form-control" id="s_email" required>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="s_ID">ID Number</label>
      <input type="text" class="form-control" id="s_ID">
   </div>
  </div>
  
  <div class="row-fluid">
    <div class="col-md-6">
      <div class="form-group">
        <label for="h_addr">Address</label>
        <input type="text" class="form-control" id="h_addr"> 
    </div>
  </div>
  <div class="col-md-6">
   <div class="form-group">
      <label for="medical">Medical Status</label>
      <select class="form-control" id="medical">
      </select>
    </div> 
  </div>
  </div>
  <div class="row-fluid">
  <div class="col-md-4">
    <div class="form-group">
        <label for="class_room">Class:</label>
        <select class="form-control" id="class_room1" onchange="getSubClass_of_class();">
     </select>  
    </div>
  </div>
   <div class="col-md-4">
    <div class="form-group">
        <label for="class_room">Sub_Class:</label>
        <select class="form-control" id="class_room" >
     </select>  
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="s_academic">Academic Year:</label>
      <select class="form-control" id="s_academic" id="">
    </select>  
   </div>
  </div>
    <form runat="server">
        <input type='file' id="fileinput" style="margin-left: 15px;" />
        <div class="row-fluid">
    <div class="col-md-12">
        <img id="blah" src="" alt="your image" height="60" width="60" style="border: none;"  />
    </form>
    </div>


  </div><br><br>
			<button id="flip" type="button" class="btn btn-success" style="margin-left: 15px;">Add Guardian</button>
			<div id="pane">

  <div class="row-fluid">
  <div class="col-md-6">
  <div class="form-group">
    <label for="g1_name">Guardian1 Name</label>
    <input type="text" class="form-control" id="g1_name">
  </div>
  </div>
  <div class="col-md-6">
  <div class="form-group">
    <label for="g1_email">Guardian1 Email</label>
    <input type="text" class="form-control" id="g1_email">
    </div>
  </div>
  </div>
  <div class="row-fluid">
    <div class="col-md-6">
      <div class="form-group">
        <label for="g1_pnum">Guardian1 Phonenumber</label>
        <input type="text" class="form-control" id="g1_pnum">
    </div>
  </div>
  <div class="col-md-6">
     <div class="form-group">
        <label for="g1_haddr">Guardian1 Homeaddress</label>
        <input type="text" class="form-control" id="g1_haddr">
      </div>
    </div>

			 <button id="flip1" type="button" class="btn btn-success" style="margin-left: 15px;">Add Guardian2</button>
			<div id="pane1">
  <div class="row-fluid">
    <div class="col-md-6">
      <div class="form-group">
        <label for="g2_name">Guardian2 Name</label>
        <input type="text" class="form-control" id="g2_name">
      </div>
    </div>
  <div class="col-md-6">
    <div class="form-group">
        <label for="g2_email">Guardian2 Email</label>
        <input type="text" class="form-control" id="g2_email">
    </div>
  </div>
  <div class="row-fluid">
     <div class="col-md-6">
      <div class="form-group">
        <label for="g2_pnumb">Guardian2 Phonenumber</label>
        <input type="text" class="form-control" id="g2_pnumb">
    </div>
  </div>
  <div class="col-md-6">
     <div class="form-group">
        <label for="g2_haddr">Guardian2 Homeaddress</label>
        <input type="text" class="form-control" id="g2_haddr">
      </div>
    </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div>
  </div><br>
			   
			   <div class="row-fluid">
			       <div class="col-md-6">
			                <input type="checkbox" name="prog" value="" /><label style="font-weight: bolder;"> Agree to the terms and conditions to proceed</label><br>

         <input type="submit" class="btn btn-primary" value="Proceed"/>
	    </div>
</div>
</div>
</form>


<script>
              $(document).ready(function(){
    $("#flip").click(function(){
        $("#pane").slideToggle("slow");
    });
});

$(document).ready(function(){
    $("#flip1").click(function(){
        $("#pane1").slideToggle("slow");
    });
}); 
            

         function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#fileinput").change(function(){
        readURL(this);
    });
          
</script>
<script src="asset/js/javascript.js"></script>
 	</body>
</html>