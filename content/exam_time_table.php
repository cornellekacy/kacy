
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
  <div class="col-sm-2"></div>
	<div class="col-sm-8">
			  <div class="panel panel-default">
				    <div class="panel-body">
		<form id="change_form" onsubmit="addExamtimetable(); return false;" method="POST">
  <div class="row-fluid">
    <div class="col-md-6">
       <div class="form-group">
          <label for="exam">Exam Id</label>
          <input type="text" class="form-control" name="username" id="exam">
     </div>
   </div>
   <div class="col-md-6">
      <div class="form-group">
          <label for="examtype">Exam type Id</label>
          <select class="form-control" id="type" >
     </select>
      </div>
    </div>
  </div>

   <div class="row-fluid">
     <div class="col-md-6">
       <div class="form-group">
          <label for="name">Exam Name</label>
          <input type="text" class="form-control" name="username" id="name" required>
     </div>
   </div>
   <div class="col-md-6">
      <div class="form-group">
          <label for="start">Start Date</label>
          <input type="text" class="form-control" name="oldpassword" id="start" required>
      </div>
    </div>
  </div>
  <div class="row-fluid">
  <div class="col-md-12">
      <div class="form-group">
          <label for="end">End Date</label>
          <input type="text" class="form-control" name="oldpassword" id="end" required>
      </div>
    </div>
  </div>

       <div class="row-fluid">
       <div class="col-sm-4"></div>
             <div class="col-md-5">
                      <input type="checkbox" name="prog" value="" /><label style="font-weight: bolder;"> Agree to the terms and conditions to proceed</label><br>

         <input type="submit" class="btn btn-primary" value="Proceed"/>
      </div>
</div>
<div class="col-sm-4"></div>
</div>
  </div>
  </form>
  </div>
  </div>
  <div class="col-sm-2"></div>
  </div>
  <script src="asset/js/javascript.js"></script>
  </body>
  </html>