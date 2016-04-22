
<!DOCTYPE html>
<html lang="en">
	<head>
	<style>
	</style>
	<script>
  
	</script>
	</head>
	<body>


<div class="row">
	<div class="col-sm-13">
		<div class="panel panel-default">
				<div class="panel-body">
  <form id="form0" onsubmit="addStaff(); return false;" method="POST">
  <div class="row-fluid">
   <div class="col-md-4">
     <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" id="fname" required>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
       <label for="lname">Last Name</label>
       <input type="text" class="form-control" id="lname" required>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
        <label for="email1">Email</label>
        <input type="email" class="form-control" id="email" required>
      </div>
    </div>
  </div>
     
  <div class="row-fluid">
    <div class="col-md-6">
     <div class="form-group">
       <label for="dofbirth">Date Of Birth</label>
       <input type="text" class="form-control" id="dob" required>
    </div>
  </div>

  <div class="col-md-6">
   <div class="form-group">
       <label for="sgender">Gender:</label>
       <select class="form-control" id="sgender" required>
     </select>
    </div>
   </div>
  </div>
  
     
  <div class="row-fluid">
   <div class="col-md-4">
    <div class="form-group">
      <label for="pofbirth">Place of Birth</label>
      <input type="text" class="form-control" id="pob" required>
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
	 <label for="address1">Home Address</label>
	 <input type="text" class="form-control" id="haddress" required>
     </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
	    <label for="nic">NIC Number</label>
	    <input type="text" class="form-control" id="nic" required min="9" max="15">
      </div>
    </div>
  </div>
    
    <div class="row-fluid">
     <div class="col-md-6">
       <div class="form-group">
        <label for="pnum1">Phone Number</label>
        <input type="text" class="form-control" id="pnum1" required>
      </div>
    </div>

  <div class="col-md-6">
   <div class="form-group">
	  <label for="sroo">Region Of Origin</label>
	  <select class="form-control" id="sroo" required>
      </select>
    </div>
   </div>
  </div>

  <div class="row-fluid">
   <div class="col-md-4">
    <div class="form-group">
	  <label for="mlstatus">Marital Status</label>
	  <select class="form-control" id="mlstatus" required>
      </select>
    </div>
  </div>

  <div class="col-md-4">
   <div class="form-group">
      <label for="cmaster">Class Master</label>
      <select class="form-control" id="cmaster" required>
    </select>
   </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
	  <label for="status">Staff Status</label>
	  <select class="form-control" id="status" required>
      </select>
    </div>
  </div>

     <form id="run" runat="server">
        <input type='file' id="upload" style="margin-left: 15px;" />
        <br>
        <div class="row-fluid">
           <div class="col-md-12">
           <img id="blah1" src="" alt="your image" height="60" width="60" />
       </form>
     </div>

  <!-- <input type="file" id="upload" style="margin-left: 15px;" /> -->
    </div><br>

    <!-- fith section end-->
  <div class="row-fluid">
     <div class="col-md-4">
           <input type="checkbox" name="prog" value="" /><label style="font-weight: bolder;"> Agree to terms and conditions to proceed</label><br>
           <input type="submit" class="btn btn-primary" value="Proceed"/>
           <br><br><br>
        </div>
      </div>
     </form>
    </div>
   </div>
  </div>
	    <script>

        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah1').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#upload").change(function(){
        readURL(this);
    });
        </script>
        <script src="asset/js/javascript.js"></script>
 	</body>
</html>
