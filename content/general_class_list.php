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
	    <form id="action" onsubmit="Generalclasslist(); return false;"  method="post">
	    <div class="row-fluid">
	       <div class="col-md-6">
	         <div class="form-group">
		   <label for="class_room1">Class</label>
		  <select class="form-control" id="class_room1" onchange="getSubClass_of_class();">
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

	   <div class="row-fluid">
	    <div class="col-md-5"></div>
	      <div class="col-md-3														">
		    <type="submit" class="btn btn-primary"><ng-class="{ selected: isActive('/gen_list')}"><a href="#/gen_list" onclick="Generalclasslist();"  style="color:white;">View general List</a>

		     <!-- <button type="submit" class="btn btn-primary" onclick="Generalclasslist(); return false;">View general List</a></button> -->
		 </div>
	       </form>
	     </div>
	     <div class="col-md-4"></div>
	   </div>

	   <div class="col-md-2"></div>
	   </div>

	<script src="asset/js/javascript.js"></script>
	</body>
	</html>
