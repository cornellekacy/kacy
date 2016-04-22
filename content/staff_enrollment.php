<!DOCTYPE html>
<html>
<head>
	<title></title>
    <style>

/*.modal-lg
{
    width: 1100px;
    height: 1000px; /* control height here */
}*/
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
    <th>Email</th>
    <th>Date of Birth</th>
    <th>Profile</th>
  </tr>
  </thead>
 <tbody id="staff_en">

</tbody>
</table>
         
    </div>
		
	</table>
    </div>
    <div class="col-sm-1">
    </div>	
    </div>

  <!-- Modal -->
  <div class="modal fade" id="staff_enrol" role="dialog">
    <div class="modal-dialog modal-lg">
          <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">
             <table>
                 <thead id="table3" style="text-transform: capitalize;" >
                </thead> 
              </table> 
          </h4>
        </div>
        <div class="modal-body">
          <div class="row-fliud">
          <div class="col-md-4">
              <form id="s_profile">
                  
              </form>
          </div>

          <div class="col-md-3"></div>

          <div class="col-md-5">
              <table>
                 <tbody id="table2" style="font-size: x-large; text-transform: capitalize;">
                </tbody> 
              </table>
          </div>
              
          </div>
        </div><br><br><br><br><br><br><br><br><br><br><br>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
<script src="asset/js/javascript.js"></script>
</body>
</html>