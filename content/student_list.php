
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <script src="asset/js/javascript.js"></script>
  <style>

.search1 {
    padding: 5px 0;
    width: 230px;
    height: 30px;
    position: relative;
    left: 10px;
    float: left;
    line-height: 22px;
}

    .search1 input {
        position: absolute;
        width: 0px;
        float: Left;
        margin-left: 210px;
        -webkit-transition: all 0.7s ease-in-out;
        -moz-transition: all 0.7s ease-in-out;
        -o-transition: all 0.7s ease-in-out;
        transition: all 0.7s ease-in-out;
        height: 30px;
        line-height: 18px;
        padding: 0 2px 0 2px;
        border-radius:1px;
    }

        .search1:hover input, .search1 input:focus {
            width: 400px;
            margin-left: 0px;
        }

.btn1 {
    height: 30px;
    position: absolute;
    right: 0;
    top: 5px;
    border-radius:1px;
}
  

  </style>
</head>
<body>
    <div class="row">
    <div class="col-sm-1">
    	
    </div>
    <div class="col-sm-12">
    <span style="float: right;"> 
              <div class="search1">
<input type="text" class="form-control input-sm" maxlength="64" placeholder="Search" />
 <button type="submit" class="btn1 btn-success btn-sm">Search</button>
</div>
   </span>
          
 <table class="table">
  <thead>
  <tr>
    <th>NO</th>
    <th>Name</th>   
    <th>Gender</th>
    <th>Address</th>
    <th>Email</th>
    <th>Edit Student</th>
    <th>Delete</th>
  </tr>
  </thead>
 <tbody id="tbody1">

</tbody>
</table>
         
    </div>
		
	</table>
    </div>
    <div class="col-sm-1">
    	
    </div>	
    </div>

     <!-- Modal -->

     <!-- Modal -->
  <div class="modal fade" id="update_student" role="dialog">
    <div class="modal-dialog modal-lg">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Student Information</h4>
        </div>
        <div class="modal-body">
          <form id="up_student" onsubmit="updateStudent(); return false;">
      <div class="row-fluid">
       <div class="col-md-12">
        <div class="form-group">
          <label for="upd_id"></label>
          <input type="hidden" class="form-control" id="upd_id" required>
       </div>
     </div>
     <div class="row-fluid">
      <div class="col-md-4">
       <div class="form-group">
          <label for="u_fname">First Name</label>
          <input type="text" class="form-control" id="u_fname" required>
     </div>
   </div>
   <div class="col-md-4">
      <div class="form-group">
          <label for="u_lname">Last Name</label>
          <input type="text" class="form-control" id="u_lname" required>
      </div>
    </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="u_gender">Gender</label>
      <select class="form-control" id="u_gender">
    </select>
   </div>
  </div>
  <div class="row-fluid">
    <div class="col-md-4">
        <div class="form-group">
        <label for="u_dob">Date Of Birth</label>
        <input type="text" class="form-control" id="u_dob">
    </div>
   </div>
  <div class="col-md-4">
      <div class="form-group">
      <label for="u_pob">Place Of Birth</label>
      <input type="text" class="form-control" id="u_pob">
    </div>
  </div>
  <div class="col-md-4">
      <div class="form-group">
      <label for="u_regions">Region Of Origin:</label>
      <select class="form-control" id="u_regions">
    </select>  
   </div>
   </div>
  </div>
  
  <div class="row-fluid">
   <div class="col-md-6">
    <div class="form-group">
      <label for="u_email">Email</label>
      <input type="email" class="form-control" id="u_email" required>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="u_ID">ID Number</label>
      <input type="text" class="form-control" id="u_ID">
   </div>
  </div>
  
  <div class="row-fluid">
    <div class="col-md-3">
      <div class="form-group">
        <label for="uh_addr">Address</label>
        <input type="text" class="form-control" id="uh_addr"> 
    </div>
  </div>
  <div class="col-md-3">
   <div class="form-group">
      <label for="u_medical">Medical Status</label>
      <select class="form-control" id="u_medical">
      </select>
    </div> 
  </div>
  <div class="col-md-3">
    <div class="form-group">
        <label for="u_class">Class:</label>
        <select class="form-control" id="u_class">
     </select>  
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label for="u_academic">Academic Year:</label>
      <select class="form-control" id="u_academic">
    </select>  
   </div>
  </div>
 
    <form runat="server">
        <input type='file' id="u_upload1" style="margin-left: 15px;" />
        <br>
        <div class="row-fluid">
    <div class="col-md-12">
        <img id="blah" src="" alt="your image" height="60" width="60" />
    </form>
    </div>
<!--   <input type="file" id="u_upload1" style="margin-left: 15px;" /> -->
  </div><br>
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         <button type="submit" class="btn btn-success">Update</button>
         </form>
     </div>
    </div>
   </div>
  </div>
     <script>
         function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#u_upload1").change(function(){
        readURL(this);
    });
     </script>
<script src="asset/js/javascript.js"></script>	
</body>
</html>