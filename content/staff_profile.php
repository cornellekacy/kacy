<!DOCTYPE html>
<html>
<head>
  <title></title>
  <style>


#panel {
    padding: 0px;
    display: none;
}
.container{
  /*margin-left: 300px;*/
  width: 980px;
  {

  </style>



</head>
<body>
<div class="container">
  <div class="row-fluid">
      <div class="panel panel-default">
      <div class="panel-body">
                  <div class="row">
                        <div class="col-xs-12 col-sm-8">
                            <h2>Mike Anamendolla</h2>
                            <p><strong>About: </strong> Web Designer / UI. </p>
                            <p><strong>Hobbies: </strong> Read, out with friends, listen to music, draw and learn new things. </p>
                        </div><!--/col--> 
                        <form id="pic">        
                        <div class="col-xs-12 col-sm-4 text-center">
                                 <img src="cinqueterre.jpg" class="img-thumbnail" alt="Cinque Terre" width="100" height="100"> 
                        </div><!--/col-->
                        </form> 
                 
</div>

<script>
  $(document).ready(function(){
    $("#flip").click(function(){
        $("#panel").slideToggle("slow");
    });
});
</script>
    
    
    </div>
  </div>
</div>

<div class="container1">
  <div class="row-fluid">
      <div class="panel panel-default">
      <div class="panel-body">
      
<div class="container">
  <h2>Dynamic Pills</h2>
 <ul class="nav nav-pills nav-justified">
    <li class="active"><a data-toggle="pill" href="#home">Home</a></li>
    <li><a data-toggle="pill" href="#menu1">Menu 1</a></li>
    <li><a data-toggle="pill" href="#menu2">Menu 2</a></li>
    <li><a data-toggle="pill" href="#menu3">Menu 3</a></li>
  </ul>
  
  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <h3>HOME</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>Menu 3</h3>
      <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
    </div>
  </div>
</div>

     </div>
    </div>
   </div>
 <script src="asset/js/javascript.js"></script> 
<script src="asset/js/jquery-2.1.4.min.js"></script>
<script src="asset/js/bootstrap.min.js"></script>
</body>
</html>

