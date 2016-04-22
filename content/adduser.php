
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
		<form id="add_form" onsubmit="addUser(); return false;" method="POST" action="target.php">
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
  <div class="col-md-6">
    <div class="form-group">
      <label for="">Password</label>
       <input type="password" class="form-control" name="password" id="" required>
   </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="u_pass">Confirm-Password</label>
       <input type="password" class="form-control" id="u_pass" name="confirm-password" required>
   </div>
  </div>
  </div>
  <div class="row-fluid">
    <div class="col-md-6">
        <div class="form-group">
        <label for="u_fname">Firstname</label>
        <input type="text" class="form-control" name="firstname" id="u_fname">
    </div>
   </div>
  <div class="col-md-6">
      <div class="form-group">
      <label for="u_lname">Lastname</label>
      <input type="text" class="form-control" name="lastname" id="u_lname">
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
                        field: 'confirmPassword',
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
                        field: 'password',
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
        });
});
</script>
  </body>
  </html>

<!--   <!DOCTYPE html>
<html>
<head>
    <title>BootstrapValidator demo</title>
   
</head>
<body>
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-lg-offset-2">
            <div class="page-header">
                <h2>Disable feedback icons for particular fields</h2>
            </div>

            <form id="defaultForm" method="post" class="form-horizontal">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Full name</label>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="firstName" placeholder="First name" />
                    </div>
                    <div class="col-lg-4">
                        <input type="text" class="form-control" name="lastName" placeholder="Last name" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">Username</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="username" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">Email address</label>
                    <div class="col-lg-5">
                        <input type="text" class="form-control" name="email" data-bv-feedbackicons="false" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">Password</label>
                    <div class="col-lg-5">
                        <input type="password" class="form-control" name="password" />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-lg-3 control-label">Gender</label>
                    <div class="col-lg-5">
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" value="male" /> Male
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" value="female" /> Female
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="gender" value="other" /> Other
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group hide">
                    <div class="col-lg-9 col-lg-offset-3">
                        <ul id="errors"></ul>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-lg-9 col-lg-offset-3">
                        <button type="submit" class="btn btn-primary">Sign up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<script type="text/javascript">
$(document).ready(function() {
    $('#defaultForm')
        .bootstrapValidator({
            message: 'This value is not valid',
            feedbackIcons: {
                valid: 'glyphicon glyphicon-ok',
                invalid: 'glyphicon glyphicon-remove',
                validating: 'glyphicon glyphicon-refresh'
            },
            fields: {
                'firstName': {
                    validators: {
                        notEmpty: {
                            message: 'The first name is required and cannot be empty'
                        }
                    }
                },
                'lastName': {
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
                    feedbackIcons: 'false',
                    validators: {
                        notEmpty: {
                            message: 'The password is required and cannot be empty'
                        },
                        different: {
                            field: 'username',
                            message: 'The password cannot be the same as username'
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
        });
});
</script>
</body>
</html> -->