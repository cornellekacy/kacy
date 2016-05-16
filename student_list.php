
<!DOCTYPE html>
<html>
<head>
	<title></title>
  <script src="asset/js/javascript.js"></script>
  <link href="asset/css/jquery.ui.min.css" rel="stylesheet">

</head>
<body>
    <div class="row">
    <div class="col-sm-1">
    	
    </div>

    <div class="col-sm-12">
    <span style="float: right;"> 
    <form action="php/profile.php" method="post"> 
        <ul class="nav navbar-nav search-nav">
                <li>
                      <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                      <div class="form-group form-animate-text">
                      <input type="text" name="search" id="firstname" class="form-text" placeholder="search student.." required>
                      <span class="bar"></span>
                 
                </li>
              </ul>
 <!--  <input type="text" name="search" id="firstname" placeholder="search...." style="height: 2em;"> -->

</form>
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
  </div><br>
 
    <form runat="server">
        <input type='file' id="u_upload1" style="margin-left: 15px;" />
        <br>
        <div class="row-fluid">
    <div class="col-md-12">
        <img id="blah" src="" alt="your image" height="60" width="60" />
    </form>
    
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


  // $(function() {
  //   var availableTags = [
  //     "ActionScript",
  //     "AppleScript",
  //     "Asp",
  //     "BASIC",
  //     "C",
  //     "C++",
  //     "Clojure",
  //     "COBOL",
  //     "ColdFusion",
  //     "Erlang",
  //     "Fortran",
  //     "Groovy",
  //     "Haskell",
  //     "Java",
  //     "JavaScript",
  //     "Lisp",
  //     "Perl",
  //     "PHP",
  //     "Python",
  //     "Ruby",
  //     "Scala",
  //     "Scheme"
  //   ];
  //   $( "#tags" ).autocomplete({
  //     source: availableTags
  //   });
  // });


$(function() {
    var availableTags = <?php include('php/autocomplete.php'); ?>;
    $("#firstname").autocomplete({
        source: availableTags,
        autoFocus:true
    });
});


     </script>
     <script src="asset/js/jquery.ui.min.js"></script>
<script src="asset/js/javascript.js"></script>	
</body>
</html>