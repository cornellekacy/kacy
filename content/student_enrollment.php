<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>

.modal-lg
{
    width: 1000px;
    height: 1000px; /* control height here */
}
#table1{
   border: none !important;
  font-size: xx-large;
  font-weight: bolder;
  text-transform: capitalize;
  text-align: center;
}
.centered
{
    text-align:center;
}
#table1 table {
border:none;
}
#table1 td{
  border:none;
}


    </style>
</head>
<body>
    <div class="row">
    <div class="col-sm-1">
    	
    </div>
    <div class="col-sm-12">
 <table class="table">
  <thead>
  <tr>
    <th>NO</th>
    <th>Name</th>   
    <th>Gender</th>
    <th>Address</th>
    <th>Email</th>
    <th>Profile</th>
  </tr>
  </thead>
 <tbody id="tbody2">

</tbody>
</table>
         
    </div>
		
	</table>
    </div>
    <div class="col-sm-1">

    	
    </div>	
    </div>

<!-- Modal -->
<div id="fsModal" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Student Profile</h4>
      </div>
      <div class="modal-body">
      <div class="container-fluid">
                  <div class="row-fluid">
                  <div class="col-xs-12 col-sm-3">
                  <form id="picture"> 
                  </form>
                  </div>
                        <div class="col-xs-12 col-sm-6">
                           
                          <div class="panel panel-default">
                          <div class="panel-body">
                          <table class='table table-borderless' style="border: none;">
                           <tbody id="table1">
                           </tbody>
                          </table> 
                          </div>
                          </div>
                           
                        </div><!--/col--> 
                        <form id="pics">     
                        <div class="col-xs-12 col-sm-3">
                             
                        </div><!--/col-->
                        </form> 
                        </div>
                  <div class="col-xs-12 col-sm-2"></div>
                  <div class="col-xs-12 col-sm-10">
         <ul class="nav nav-tabs nav-justified">
        <li><a data-target="#home" data-toggle="tab">Home</a></li>
        <li><a data-target="#profile" data-toggle="tab">Profile</a></li>
        <li><a data-target="#messages" data-toggle="tab"  style="left: 10px;">Payement</a></li>
        <li><a data-target="#settings" data-toggle="tab">Peformance</a></li>
         </ul>
         </div>
         <div class="col-xs-12 col-sm-10">
        

      <div class="tab-content"><br><br>
        <div class="tab-pane active" id="home"> <div class="centered">
                                  <button data-toggle="modal" data-target="#myModal2" class="btn btn-large btn-default" style=" font-size: x-large;">Update Student Information</button><br><br><br>
                                  <button id="b"  data-toggle="modal" data-target="#myModal1" class="btn btn-large btn-default" style=" font-size: x-large;">Update guardian Information</button>
                              </div>
                               </div>
        <div class="tab-pane" id="profile">
        <div class="row-fluid">
        <div class="col-md-5">
        <h4 style="text-decoration: underline;">Student Information:</h4>
         <table>
           <thead id="std_head" style="font-size: large; text-transform: capitalize;">
             
           </thead>
         </table>
         </div>
         <div class="col-md-2"></div>
         <div class="col-md-5">
         <h4 style="text-decoration: underline;">Guardian Information</h4>
           <table>
             <tbody id="gud_tbody">
               
             </tbody>
           </table>
         </div>
        </div>
        </div>
        <div class="tab-pane" id="messages">Message</div>
        <div class="tab-pane" id="settings">Settings</div>
         </div>
    




  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">update student</h4>
        </div>
        <div class="modal-body">
                <form id="up_student" onsubmit="updateStudent();">
      <div class="row-fluid">
       <div class="col-md-12">
        <div class="form-group">
          <label for=></label>
          <input type="hidden" class="form-control"  required>
       </div>
     </div>
     <div class="row-fluid">
      <div class="col-md-4">
       <div class="form-group">
          <label for>First Name</label>
          <input type="text" class="form-control"  required>
     </div>
   </div>
   <div class="col-md-4">
      <div class="form-group">
          <label for="">Last Name</label>
          <input type="text" class="form-control" id="" required>
      </div>
    </div>
  <div class="col-md-4">
    <div class="form-group">
      <label for="">Gender</label>
      <select class="form-control" id="">
    </select>
   </div>
  </div>
  <div class="row-fluid">
    <div class="col-md-4">
        <div class="form-group">
        <label for="">Date Of Birth</label>
        <input type="text" class="form-control" id="">
    </div>
   </div>
  <div class="col-md-4">
      <div class="form-group">
      <label for="">Place Of Birth</label>
      <input type="text" class="form-control" id="">
    </div>
  </div>
  <div class="col-md-4">
      <div class="form-group">
      <label for="">Region Of Origin:</label>
      <select class="form-control" id="">
    </select>  
   </div>
   </div>
  </div>
  
  <div class="row-fluid">
   <div class="col-md-6">
    <div class="form-group">
      <label for="">Email</label>
      <input type="email" class="form-control" id="" required>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label for="">ID Number</label>
      <input type="text" class="form-control" id="">
   </div>
  </div>
  
  <div class="row-fluid">
    <div class="col-md-3">
      <div class="form-group">
        <label for="">Address</label>
        <input type="text" class="form-control" id=""> 
    </div>
  </div>
  <div class="col-md-3">
   <div class="form-group">
      <label for="">Medical Status</label>
      <select class="form-control" id="">
      </select>
    </div> 
  </div>
  <div class="col-md-3">
    <div class="form-group">
        <label for="">Class:</label>
        <select class="form-control" id="">
     </select>  
    </div>
  </div>
  <div class="col-md-3">
    <div class="form-group">
      <label for="">Academic Year:</label>
      <select class="form-control" id="">
    </select>  
   </div>
  </div>
<!--   <form runat="server">
        <input type='file' id="u_upload1" style="margin-left: 15px;" />
        <br>
        <div class="row-fluid">
    <div class="col-md-12">
        <img id="blah" src="" alt="your image" height="60" width="60" />
    </form>
    </div>
    </div> -->
<!--        <input type="file" id="u_upload1" style="margin-left: 15px;" /> -->
  </div><br>
      
                 <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-success">Update</button>
                </form>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
    </div>
        <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

  <!-- Modal -->
  <div class="modal fade" id="myModal1" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Update Guardian Informtion</h4>
        </div>
        <div class="modal-body">
        <form id="update_guardian" onsubmit="updateGuardian(); return false;" action="" method="post">
         <div class="row-fluid">
      <div class="col-md-12">
       <div class="form-group">
          <label for="g_id">Guardian id</label>
          <input type="text" class="form-control" id="g_id" required>
     </div>
   </div>
   </div>

      <div class="row-fluid">
      <div class="col-md-6">
       <div class="form-group">
          <label for="g_fname">Guardian Name</label>
          <input type="text" class="form-control" id="g_fname" required>
     </div>
   </div>
   <div class="col-md-6">
      <div class="form-group">
          <label for="g_email">Guardian Email</label>
          <input type="text" class="form-control" id="g_email" required>
      </div>
    </div>
   </div>
   <div class="row-fluid">
  <div class="col-md-6">
    <div class="form-group">
      <label for="g_pumb">Guardian Phonenumber</label>
      <input type="text" class="form-control" id="g_pumb" required>
   </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
            <label for="g_addr">Guardian Address</label>
           <input type="text" class="form-control" id="g_addr" required>
      </div>
     </div>
    </div>
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-success">Update</button>
                </form>
              </div>
             </div>
            </div>
          </div>
         </div>
  
</div>
     
<!-- Modal -->
  <div class="modal fade" id="myModal2" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">update student</h4>
        </div>
        <div class="modal-body">
            <form id="up_student" onsubmit="updateStudent();">
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
    </div>
    </div>
 <!--       <input type="file" id="u_upload1" style="margin-left: 15px;" /> -->
  </div><br>
                 <button  type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 <button type="submit" class="btn btn-success">Update</button>
                </form>
              </div>
             </div>
            </div>
           </div>
          </div>
         </div>
        </div>
       </div>
      </div>
    </div>
         
<script>
  jQuery(function () {
    jQuery('#myTab a:first').tab('show')
})

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

 // $("#myModal").modal({onClose: function () {
 //     $.modal.close();
 //     location.reload(true);
 // }});
</script>

<script src="asset/js/javascript.js"></script>
    </body>
    </html>