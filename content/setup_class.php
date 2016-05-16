<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<div class="row-fluid">
<div class="col-md-3"><br>
	
</div>
<div class="col-md-3"><br>
<button type="button" class="btn btn-info"><ng-class="{ selected: isActive('/subject_class')}"><a href="#/subject_class" style="color: white;" onclick="getExamtype();">Assign subject to class</a></button>
</div>
<div class="col-md-3"><br>

</div>
<div class="col-md-3"><br>
	<button type="button" class="btn btn-info">Assign Fee To Class</button>
</div>
</div>


  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Setup</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

</body>
</html>