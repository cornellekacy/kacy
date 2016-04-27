
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
		<form id="change_form" onsubmit="ChangeUserPassword(); return false;" method="POST" action="">
  <div class="row-fluid">
  <div class="col-md-3"></div>
     <div class="col-md-6">
       <div class="form-group">
          <label for="change_user">Username</label>
          <input type="text" class="form-control" name="username" id="change_user" required>
     </div>
   </div>
   <div class="col-md-3"></div>
   </div>
   <div class="row-fluid">
   <div class="col-md-6">
      <div class="form-group">
          <label for="old_pass">Old-Password</label>
          <input type="text" class="form-control" name="oldpassword" id="old_pass" required>
      </div>
    </div>
  </div>
   <div class="col-md-6">
      <div class="form-group">
          <label for="new_pass">New-Password</label>
          <input type="text" class="form-control" name="newpassword" id="new_pass" required>
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
  </body>
  </html>