
<!DOCTYPE html>
<html lang="en">
	<head>
	<style type="text/css">
	</style>
      <script type="text/javascript" src="asset/js/jquery-1.10.2.min.js"></script>
      <script type="text/javascript" src="asset/js/bootstrapValidator.js"></script>
      <script type="text/javascript" src="asset/js/pass_meter.js"></script>
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
	<form id="add_form"  method="POST" onsubmit="addUser(); return false;" action="target.php">
    <div class="alert alert-success" style="display: none;"></div>
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
          <input type="text" class="form-control" name="email" id="u_email" required>
      </div>
    </div>
    </div>
  <div class="row-fluid">
  <div class="col-md-1"></div>
  <div class="col-md-5">
    <div class="form-group">
      <label for="">Password</label>
       <!-- <input type="password" class="form-control" name="password" id="" required> -->
        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="" />
          <div class="pwstrength_viewport_progress"></div>
   </div>
  </div>
  <div class="col-md-5">
    <div class="form-group">
      <label for="u_pass">Confirm-Password</label>
       <input type="password" class="form-control" id="u_pass" name="confirm-password" required />
       <div class="pwstrength_viewport_progress"></div>
   </div>
  </div>
  <div class="col-md-1"></div>
  </div>

  <div class="row-fluid">
  <div class="col-md-2"></div>
    <div class="col-md-4">
        <div class="form-group">
        <label for="u_fname">Firstname</label>
        <input type="text" class="form-control" name="firstname" id="u_fname">
    </div>
   </div>
  <div class="col-md-4">
      <div class="form-group">
      <label for="u_lname">Lastname</label>
      <input type="text" class="form-control" name="lastname" id="u_lname">
    </div>
  </div>
  <div class="col-md-2"></div>
  </div>

  <div class="row-fluid">
    <div class="col-md-5"></div>
        <div class="col-md-5">
           <input type="checkbox" name="prog" value="" /><label style="font-weight: bolder;"> Agree to the terms and conditions?</label><br>
           <input type="submit" class="btn btn-primary" value="Proceed" />
      </div>
  </div>
  <div class="col-md-5"></div>

                  </div>
               </div>
            </form>
        </div>
    </div>
 </div>
<script type="text/javascript">
$(document).ready(function() {
    $('#add_form')
        .bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                'firstname': {
                    validators: {
                        notEmpty: {
                            message: 'The first name is required and cannot be empty'
                        }
                    }
                },
                'lastname': {
                    validators: {
                        notEmpty: {
                            message: 'The last name is required and cannot be empty'
                        }
                    }
                },
                'username': {
                    message: 'The username is not valid',
                    validators: {
                        notEmpty: {
                            message: 'The username is required and cannot be empty'
                        },
                        stringLength: {
                            min: 6,
                            max: 30,
                            message: 'The username must be more than 6 and less than 30 characters long'
                        },
                        regexp: {
                            regexp: /^[a-zA-Z0-9_\.]+$/,
                            message: 'The username can only consist of alphabetical, number, dot and underscore'
                        },
                        different: {
                            field: 'password',
                            message: 'The username and password cannot be the same as each other'
                        }
                    }
                },
                'email': {
                    validators: {
                        emailAddress: {
                            message: 'The input is not a valid email address'
                        }
                    }
                },
               'password': {
                validators: {
                    notEmpty: {
                        message: 'The password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
            'confirm-Password': {
                validators: {
                    notEmpty: {
                        message: 'The confirm password is required and can\'t be empty'
                    },
                    identical: {
                        field: 'confirm-password',
                        message: 'The password and its confirm are not the same'
                    }
                }
            },
                'gender': {
                    feedbackIcons: false,
                    validators: {
                        notEmpty: {
                            message: 'The gender is required'
                        }
                    }
                }

            }

        })
         .on('success.form.bv', function(e) {
            // Prevent submit form
            e.preventDefault();

            var $form     = $(e.target),
                validator = $form.data('bootstrapValidator');
            $form.find('.alert').html('Registration succesfull. Now you can sign in as ' + validator.getFieldElements('username').val()).show();
        });
});

</script>
  </body>
  </html>

