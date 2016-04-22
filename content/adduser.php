
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
		<form id="add_form" onsubmit="addUser(); return false;" method="POST" action="">
  <div class="row-fluid">
     <div class="col-md-6">
       <div class="form-group">
          <label for="u_user">Username</label>
          <input type="text" class="form-control" name="username" id="u_user">
     </div>
   </div>
   <div class="col-md-6">
      <div class="form-group">
          <label for="u_email">Email</label>
          <input type="text" class="form-control" id="u_email" required>
      </div>
    </div>
    </div>
  <div class="row-fluid">
  <div class="col-md-6">
    <div class="form-group">
      <label for="">Password</label>
       <input type="password" class="form-control" id="" required>
   </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="u_pass">Confirm-Password</label>
       <input type="password" class="form-control" id="u_pass" required>
   </div>
  </div>
  </div>
  <div class="row-fluid">
    <div class="col-md-6">
        <div class="form-group">
        <label for="u_fname">Firstname</label>
        <input type="text" class="form-control" id="u_fname">
    </div>
   </div>
  <div class="col-md-6">
      <div class="form-group">
      <label for="u_lname">Lastname</label>
      <input type="text" class="form-control" id="u_lname">
    </div>
  </div>
  </div>
       <div class="row-fluid">
             <div class="col-md-6">
                      <input type="checkbox" name="prog" value="" /><label style="font-weight: bolder;"> Agree to the terms and conditions to proceed</label><br>

         <input type="submit" class="btn btn-primary" value="Proceed"/>
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