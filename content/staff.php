
<!DOCTYPE html>
<html lang="en">
	<head>
	<style>
	</style>
	<script>
 $(document).ready(function () {
                
                $('#dob').datepicker({
                    format: "yyyy/mm/dd"
                });  
            
            });
	</script>

	</head>
	<body>


<div class="row">
	<div class="col-sm-13">
		<div class="panel panel-default">
				<div class="panel-body">
  <form id="form0" onsubmit="addStaff(); return false;" method="POST">
  <div class="row-fluid">
   <div class="col-md-4">
     <div class="form-group">
        <label>First Name</label>
        <input type="text" class="form-control" id="fname" name="firstname">
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
       <label for="lname">Last Name</label>
       <input type="text" class="form-control" id="lname" name="lastname">
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
        <label for="email1">Email</label>
        <input type="email" class="form-control" id="email" name="email">
      </div>
    </div>
  </div>
     
  <div class="row-fluid">
    <div class="col-md-6">
     <div class="form-group">
       <label for="dofbirth">Date Of Birth</label>
       <input type="text" class="form-control" id="dob" name="dateofbirth">
    </div>
  </div>

  <div class="col-md-6">
   <div class="form-group">
       <label for="sgender">Gender:</label>
       <select class="form-control" id="sgender" name="gender" >
     </select>
    </div>
   </div>
  </div>
  
     
  <div class="row-fluid">
   <div class="col-md-4">
    <div class="form-group">
      <label for="pofbirth">Place of Birth</label>
      <input type="text" class="form-control" id="pob" name="placeofbirth" >
    </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
	 <label for="address1">Home Address</label>
	 <input type="text" class="form-control" id="haddress" name="address" >
     </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
	    <label for="nic">NIC Number</label>
	    <input type="text" class="form-control" id="nic" name="nicnumber" >
      </div>
    </div>
  </div>
    
    <div class="row-fluid">
     <div class="col-md-6">
       <div class="form-group">
        <label for="pnum1">Phone Number</label>
        <input type="text" class="form-control" id="pnum1" name="phonenumber" >
      </div>
    </div>

  <div class="col-md-6">
   <div class="form-group">
	  <label for="sroo">Region Of Origin</label>
	  <select class="form-control" id="sroo" name="regionoforigin">
      </select>
    </div>
   </div>
  </div>

  <div class="row-fluid">
   <div class="col-md-4">
    <div class="form-group">
	  <label for="mlstatus">Marital Status</label>
	  <select class="form-control" id="mlstatus" name="maritalstatus">
      </select>
    </div>
  </div>

  <div class="col-md-4">
   <div class="form-group">
      <label for="cmaster">Class Master</label>
      <select class="form-control" id="cmaster" name="classmaster">
    </select>
   </div>
  </div>

  <div class="col-md-4">
    <div class="form-group">
	  <label for="status">Staff Status</label>
	  <select class="form-control" id="status" name="staffstatus">
      </select>
    </div>
  </div>

     <form id="run" runat="server">
        <div class="col-lg-12">
        <div class="form-group">
        <input type="file" class="form-control" id="upload" name="picture" />
        <br>
        <div class="row-fluid">
           <div class="col-md-12">
           <img id="blah1" src="" alt="your image" height="80" width="80" />
       </form>
     </div>
     </div>
     </div>

  <!-- <input type="file" id="upload" style="margin-left: 15px;" /> -->
    </div>

    <!-- fith section end-->
  <div class="row-fluid">
     <div class="col-md-4">
           <input type="checkbox" name="prog" value="" /><label style="font-weight: bolder;"> Agree to terms and conditions to proceed</label><br>
           <input type="submit" class="btn btn-primary" value="Proceed"/>
           <br><br><br>
        </div>
      </div>
     </form>
    </div>
   </div>
  </div>
	    <script>

        function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            
            reader.onload = function (e) {
                $('#blah1').attr('src', e.target.result);
            }
            
            reader.readAsDataURL(input.files[0]);
        }
    }
    
    $("#upload").change(function(){
        readURL(this);
    });
        

$(document).ready(function() {
    $('#form0').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            firstname: {
                message: 'The firstname is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 3,
                        max: 30,
                        message: 'The firstname must be more than 3 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
             lastname: {
                message: 'The lastname is not valid',
                validators: {
                    notEmpty: {
                        message: 'The username is required and can\'t be empty'
                    },
                    stringLength: {
                        min: 3,
                        max: 30,
                        message: 'The firstname must be more than 3 and less than 30 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The username can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            gender: {
                validators: {
                    notEmpty: {
                        message: 'The country is required and can\'t be empty'
                    }
                }
            },
              dateofbirth: {
                validators: {
                    date: {
                        format: 'YYYY/MM/DD',
                        message: 'The birth day format is not surported YYYY/MM/DD'
                    }
                }
            },
            'placeofbirth': {
                    validators: {
                        notEmpty: {
                            message: 'placeofbirth cannot be empty'
                        }
                    }
                },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required and can\'t be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
             'address': {
                    validators: {
                        notEmpty: {
                            message: 'home address cannot be empty'
                        }
                    }
                },
              nicnumber: {
                        message: 'The phone number is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The phone number is required'
                            },
                               stringLength: {
                        min: 8,
                        max: 13,
                        message: 'The national ID number must be more than 8 and equal to 13 characters long'
                      },
                            digits: {
                                message: 'The value can contain only digits'
                            }
                        }
                    },
             phonenumber: {
                        message: 'The phone number is not valid',
                        validators: {
                            notEmpty: {
                                message: 'The phone number is required'
                            },
                               stringLength: {
                        min: 5,
                        max: 9,
                        message: 'The phonenumber must be more than 5 and equal to 9 characters long'
                      },
                            digits: {
                                message: 'The value can contain only digits'
                            }
                        }
                    },
            regionoforigin: {
                validators: {
                    notEmpty: {
                        message: 'The country is required and can\'t be empty'
                    }
                }
            },
             maritalstatus: {
                validators: {
                    notEmpty: {
                        message: 'The country is required and can\'t be empty'
                    }
                }
            },
             classmaster: {
                validators: {
                    notEmpty: {
                        message: 'The country is required and can\'t be empty'
                    }
                }
            },
             staffstatus: {
                validators: {
                    notEmpty: {
                        message: 'The country is required and can\'t be empty'
                    }
                }
            },
            zipCode: {
                validators: {
                    zipCode: {
                        country: 'US',
                        message: 'The input is not a valid US zip code'
                    }
                }
            },
            
            picture: {
                validators: {
                    file: {
                            extension: 'jpg',
                            type: 'image/jpeg',
                            maxSize: 1024 * 1024,
                            message: 'The selected file is not valid, or the size is not large enough!'
                        }
                }
            },
        }
    });
});
</script>
        <script src="asset/js/javascript.js"></script>
          <script type="text/javascript" src="asset/js/datepicker.js"></script>
      <script type="text/javascript" src="asset/js/jquery-1.10.2.min.js"></script>
 	</body>
</html>
