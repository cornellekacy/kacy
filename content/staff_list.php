
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <style>
/*   input[type="search"] {
 border-radius: 20px;

}
button{
  right: 12px;
}*/
.search-form .form-group {
  float: right !important;
  transition: all 0.35s, border-radius 0s;
  width: 32px;
  height: 32px;
  background-color: #fff;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset;
  border-radius: 25px;
  border: 1px solid #ccc;
}
.search-form .form-group input.form-control {
  padding-right: 20px;
  border: 0 none;
  background: transparent;
  box-shadow: none;
  display:block;
}
.search-form .form-group input.form-control::-webkit-input-placeholder {
  display: none;
}
.search-form .form-group input.form-control:-moz-placeholder {
  /* Firefox 18- */
  display: none;
}
.search-form .form-group input.form-control::-moz-placeholder {
  /* Firefox 19+ */
  display: none;
}
.search-form .form-group input.form-control:-ms-input-placeholder {
  display: none;
}
.search-form .form-group:hover,
.search-form .form-group.hover {
  width: 200%;
  border-radius: 4px 25px 25px 4px;
}
.search-form .form-group span.form-control-feedback {
  position: absolute;
  top: -1px;
  right: -2px;
  z-index: 2;
  display: block;
  width: 34px;
  height: 34px;
  line-height: 34px;
  text-align: center;
  color: #3596e0;
  left: initial;
  font-size: 14px;
}


  </style>
</head>
<body>
    <div class="row">
    <div class="col-sm-1">
    	
    </div>
    <div class="col-sm-12">
    <span style="float: right;">  
            <form action="" class="search-form">
                <div class="form-group has-feedback">
                <label for="search" class="sr-only">Search</label>
                <input type="text" class="form-control" name="search" id="search" placeholder="search">
                  <span class="glyphicon glyphicon-search form-control-feedback"></span>
    
            </form>
      </span>
    </div>
            </form></span>
 <table class="table">
  <thead>
  <tr>
    <th>NO</th>
    <th>Name</th>   
    <th>Gender</th>
    <th>Email</th>
    <th>Phonenumber</th>
    <th>Address</th>
    <th>Edit Staff</th>
    <th>Delete</th>
  </tr>
  </thead>
 <tbody id="table0">

</tbody>
</table>
         
    </div>
		
	</table>
    </div>
    <div class="col-sm-1">
    	
    </div>	
    </div>

     <!-- Modal -->
  <div class="modal fade" id="edit_staff" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">update staff informtion</h4>
        </div>
        <div class="modal-body">
         <p>
     <form id="update_staff" onsubmit="updateStaff(); return false;">
    <div class="row-fluid">
    <div class="col-md-12">
      <div class="form-group">
        <label for="s_id"></label>
        <input type="hidden" class="form-control" id="s_id" required>
    </div>
  </div>
  </div>
  <div class="row-fluid">
   <div class="col-md-4">
    <div class="form-group">
        <label for="fnames">First Name</label>
        <input type="text" class="form-control" id="fnames" required>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
        <label for="lnames">Last Name</label>
        <input type="text" class="form-control" id="lnames" required>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
        <label for="emails">Email</label>
        <input type="email" class="form-control" id="emails" required>
      </div>
    </div>
  </div>
     
  <div class="row-fluid">
    <div class="col-md-6">
      <div class="form-group">
        <label for="dobs">Date Of Birth</label>
        <input type="text" class="form-control" id="dobs" required>
     </div>
  </div>
  <div class="col-md-6">
      <div class="form-group">
          <label for="sgenders">Gender:</label>
          <select class="form-control" id="sgenders" required>
        </select>
      </div>
    </div>
  </div>
  
     
  <div class="row-fluid">
    <div class="col-md-4">
     <div class="form-group">
        <label for="pobs">Place of Birth</label>
        <input type="text" class="form-control" id="pobs" required>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="haddresss">Home Address</label>
      <input type="text" class="form-control" id="haddresss" required>
    </div>
  </div>
  <div class="col-md-4">
      <div class="form-group">
        <label for="nics">NIC Number</label>
        <input type="text" class="form-control" id="nics" required min="9" max="15">
      </div>
    </div>
  </div>
  <div class="row-fluid">
      <div class="col-md-6">
        <div class="form-group">
          <label for="pnums">Phone Number</label>
          <input type="text" class="form-control" id="pnums" required>
      </div>
    </div>
    <div class="col-md-6">
      <div class="form-group">
            <label for="sroos">Region Of Origin</label>
            <select class="form-control" id="sroos" required>
          </select>
        </div>
      </div>
    </div>

  <div class="row-fluid">
  <div class="col-md-4">
  <div class="form-group">
    <label for="mlstatuss">Marital Status</label>
    <select class="form-control" id="mlstatuss" required>
  </select>
  </div>
  </div>
  <div class="col-md-4">
  <div class="form-group">
    <label for="cmasters">Class Master</label>
    <select class="form-control" id="cmasters" required>
  </select>
  </div>
  </div>
  <div class="col-md-4">
  <div class="form-group">
    <label for="statuss">Staff Status</label>
    <select class="form-control" id="statuss" required>
  </select>
  </div>
  </div>
   <form runat="server">
        <input type='file' id="uploads" style="margin-left: 15px;" />
        <br>
        <div class="row-fluid">
    <div class="col-md-12">
        <img id="blah" src="" alt="your image" height="60" width="60" />
    </form>
    </div>
    </div>
<!--   <input type="file" id="uploads" style="margin-left: 15px;" /> -->
  </div><br>
         </p>
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
    
    $("#uploads").change(function(){
        readURL(this);
    });
     </script>
<script src="asset/js/javascript.js"></script>	
</body>
</html>