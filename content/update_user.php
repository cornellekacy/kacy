
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
		<form id="update_user" onsubmit="updateUser(); return false;" method="POST" action="">
  <div class="row-fluid">
     <div class="col-md-6">
       <div class="form-group">
          <label for="upd_user">Username</label>
          <input type="text" class="form-control" id="upd_user" required>
     </div>
   </div>
   <div class="col-md-6">
      <div class="form-group">
          <label for="upd_email">Email</label>
          <input type="text" class="form-control" id="upd_email" required>
      </div>
    </div>
  </div>
  <div class="row-fluid">
    <div class="col-md-6">
        <div class="form-group">
        <label for="upd_fname">Firstname</label>
        <input type="text" class="form-control" id="upd_fname">
    </div>
   </div>
  <div class="col-md-6">
      <div class="form-group">
      <label for="upd_lname">Lastname</label>
      <input type="text" class="form-control" id="upd_lname">
    </div>
  </div>
  </div>
       <div class="row-fluid">
             <div class="col-md-6">
                      <input type="checkbox" name="prog" value="" /><label style="font-weight: bolder;"> Agree to the terms and conditions to proceed</label><br>

         <input type="submit" class="btn btn-primary" value="Update"/>
      </div>
</div>
</div>
  </div>
  </form>
  </div>
  </div>
  </div>
  </body>
  </html>