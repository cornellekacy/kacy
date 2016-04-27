	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body><br><br>
	<div class="row-fluid">
	  <div class="col-md-2"></div>
	    <div class="col-md-8">
	      <div class="panel panel-default">
	    <div class="panel-body">
	    <form id="gen_list" onsubmit="Generalclasslist(); return false;" method="post">
	    <div class="row-fluid">
	       <div class="col-md-6">
	         <div class="form-group">
		   <label for="p_classroom_id">Class</label>
		   <select class="form-control" id="p_classroom_id">
	        </select> 
	      </div>
	    </div>
	    <div class="col-md-6">
	      <div class="form-group">
		  <label for="p_academic_id">Academic Year</label>
		  <select class="form-control" id="p_academic_id">
	       </select> 
	      </div>
	    </div>
	   </div>

  <!--      <div class="row-fluid">
       <div class="col-md-2"></div>
	   <div class="col-md-8">
	      <div class="form-group">
		  <label for="p_academic_id">Academic Year</label>
		  <select class="form-control" id="p_academic_id">
	       </select> 
	      </div>
	    </div>
	    <div class="col-md-2"></div>
	   </div> -->


	   <div class="row-fluid">
	    <div class="col-md-5"></div>
	      <div class="col-md-2">
		     <button type="submit" class="btn btn-success"><ng-class="{ selected: isActive('/gen_list')}"><a href="#/gen_list" onclick="Generalclasslist();">View List</a></button>
		   </div>
		 </div>
	       </form>
	     </div>
	     <div class="col-md-5"></div>
	   </div>

	   <div class="col-md-2"></div>
	   </div>

	<script src="asset/js/javascript.js"></script>
	</body>
	</html>
