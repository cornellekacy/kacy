
<!DOCTYPE html>
<html lang="en" ng-app="myApp" ng-controller="AppCtrl">
<head>
  
  <meta charset="utf-8">
  <meta name="description" content="Quanteq school managment system v.1">
  <meta name="author" content="kacy">
  <meta name="keyword" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Miminium</title>
 
    <!-- start: Css -->
    
    
    <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">

      <!-- plugins -->
      <link rel="stylesheet" href="asset/css/bootstrapValidator.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/font-awesome.min.css"/>
      <link rel="stylesheet" type="text/css" href="asset/css/plugins/animate.min.css"/>
  <link href="asset/css/style.css" rel="stylesheet">
      <script type="text/javascript" src="asset/js/jquery-1.10.2.min.js"></script>
  <!-- end: Css -->

  <link rel="shortcut icon" href="asset/img/logomi.png">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script type="text/javascript">
    </script>
    <style>
    .heading-one 
  {display:table-cell;vertical-align:middle;font-family:Helvetica Neue,Helvetica,Arial;font-weight:bold;font-size:24px;color:#3a3d40;line-height:29px;letter-spacing:-1px;}
    </style>
  </head>

 <body id="mimin" class="dashboard">
 <script type="text/ng-template" id="pages/index.html">
      <h1>Home</h1>
    </script>
    <script type="text/ng-template" id="pages/student.html">
      <h1>Home</h1>
    </script>
      <!-- start: Header -->
        <nav class="navbar navbar-default header navbar-fixed-top">
          <div class="col-md-12 nav-wrapper">
            <div class="navbar-header" style="width:100%;">
              <div class="opener-left-menu is-open">
                <span class="top"></span>
                <span class="middle"></span>
                <span class="bottom"></span>
                </div>
                <a href="#"> 
                <img src="img/logo.png" style="float: left;"></a>
                 <!-- <b>MIMIN</b> -->

              <ul class="nav navbar-nav search-nav">
                <li>
                  <div class="search">
                      <span class="fa fa-search icon-search" style="font-size:23px;"></span>
                      <div class="form-group form-animate-text">
                      <input type="text" class="form-text" required>
                      <span class="bar"></span>
                      <label class="label-search">Type anywhere to <b>Search</b> </label>
                    </div>
                  </div>
                </li>
              </ul>

               <ul class="nav navbar-nav">
                <li ng-class="{ selected: isActive('/home')}"><a href="#/home"><span class="fa fa-home" style="font-size: x-large;"></span>Home</a>
                </li>
               </ul>

              <ul class="nav navbar-nav navbar-right user-nav">
                <li class="user-name"><span>
                  <table>
                  <tbody id="user">
              </tbody>
            </table>
          </span>
                    </li>

        <li class="dropdown avatar-dropdown">
              <img src="asset/img/avatar.jpg" class="img-circle avatar" alt="user name" data-toggle="dropdown"  
              aria-haspopup="true" aria-expanded="true"/>
              <ul class="dropdown-menu user-dropdown">
              <li><a href="#"><span class="fa fa-user"></span> My Profile</a></li>
              <li role="separator" class="divider"></li>
              <li class="more">
              <ul>
              <li><a href=""><span class="fa fa-cogs"></span></a></li>
              <li><a href=""></a></li>
              <li><a href="" onclick="logoutUser(); return false;"><span class="fa fa-power-off "></span></a></li>
                      </ul>
                    </li>
                  </ul>
                </li>
                <!-- <li ><a href="#" class="opener-right-menu"><span class="fa fa-coffee"></span></a></li>
              </ul> -->
            </div>
          </div>
        </nav>
      <!-- end: Header -->

     
  
          <!-- start:Left Menu -->
           <div class="row">
            <div class="col-md-1">
             <div class="container-fluid mimin-wrapper">
              <div id="left-menu">
               <div class="sub-left-menu scroll">
                <ul class="nav nav-list">
                    <!-- <li><div class="left-bg"></div></li> -->
                         <li class="time">
                         <h1 class="animated fadeInLeft" style="font-size: xx-large; font-weight: bolder;">21:00</h1>
                         <p class="animated fadeInRight"style="font-weight: bolder;">Sat,October 1st 2029</p>
                    </li>

                    <li class="active ripple">
                          <a class="tree-toggle nav-header"><span class="fa-home fa"></span> Registration 
                          <span class="fa-angle-right fa right-arrow text-right"></span></a>
                          <ul class="nav nav-list tree">
                          <li ng-class="{ selected: isActive('/staff')}"><a href="#/staff">Admit Staff</a></li>
                          <li ng-class="{ selected: isActive('/content/student')}"><a href="#/student">Admit Student</a></li>
                      </ul>
                    </li>

                    <li class="ripple">
                        <a class="tree-toggle nav-header">
                        <span class="fa-diamond fa"></span> Manage
                        <span class="fa-angle-right fa right-arrow text-right"></span></a>
                        <ul class="nav nav-list tree">
                        <li ng-class="{ selected: isActive('/adduser')}"><a href="#/adduser">Add User</a></li>
                        <li ng-class="{ selected: isActive('/change_password')}"><a href="#/change_password">Change Password</a></li>
                        <li ng-class="{ selected: isActive('/update_user')}"><a href="#/update_user" onclick="getUser();"">Update User</a></li>
                      </ul>
                    </li>

                    <li class="ripple">
                        <a class="tree-toggle nav-header">
                        <span class="fa-area-chart fa"></span> Computation
                        <span class="fa-angle-right fa right-arrow text-right"></span></a>
                        <ul class="nav nav-list tree">
                        <li ng-class="{ selected: isActive('/staff_list')}"><a  href="#/staff_list" onclick="viewstaffs();">Staff List</a></li>
                        <li ng-class="{ selected: isActive('/student_list')}"><a href="#/student_list" onclick="viewStudents();">Student List</a></li>
                        <li ng-class="{ selected: isActive('/class_list')}"><a href="#/class_list">Class List</a></li>
                      </ul>
                    </li>

                    <li class="ripple"><a class="tree-toggle nav-header">
                        <span class="fa fa-pencil-square"></span> Payments  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                        <ul class="nav nav-list tree">
                        <li><a href="">Fees Payment</a></li>
                        <li><a href="">Other Payment</a></li>
                  </ul>
                </li>

                <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-pencil-square"></span> Statistics  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                    <ul class="nav nav-list tree">
                    <li ng-class="{ selected: isActive('/student_enrollment')}"><a href="#/staff_enrollment" onclick="viewstaffs();">
                    Staff enrollment</a></li>
                    <li ng-class="{ selected: isActive('/student_enrollment')}"><a  href="#/student_enrollment" onclick="viewStudent();">
                    Student Enrolment</a></li>    
                  </ul>
                </li>
 
                <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-pencil-square"></span> Compute Marks  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                    <ul class="nav nav-list tree">
                    <li><a href="">Per Class</a></li>
                    <li><a href="">Per</a></li>
                  </ul>
                </li> 

                  <li class="ripple"><a class="tree-toggle nav-header">
                    <span class="fa fa-cog"></span> Setup  <span class="fa-angle-right fa right-arrow text-right"></span> </a>
                    <ul class="nav nav-list tree">
                    <li ng-class="{ selected: isActive('/setup_class')}"><a href="#/setup_class">setup class</a></li>     
                  </ul>
                </li> 
              </div>
            </div>
          </div>
        </div>
      
       
    
<!-- <div class="heading-bar">
    <span class="heading-one"><img ng-src="{{img}}" width="48"
                                   height="100"> {{title}}</span> -->

          <!-- end: Left Menu -->
      
          <!-- start: content -->
          <div class="content">
            <div class="row">
              <div class="col-md-12">
                <div id="content">
                  <div class="panel-default">
                    <div class="panel-heading">
                      <span class="heading-one"><img ng-src="{{img}}" width="48"
                            height="48"> {{title}}</span> </div> 
                        <div class="panel-body"> 
                          <div ng-view>
                     
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
                        


    
          <!-- start: right menu -->
            <!-- <div id="right-menu">
              <ul class="nav nav-tabs">
                <li class="active">



                </li>
              </ul>
            </div> -->

            
                    
       <!-- end: Mobile -->
 
    <!-- start: Javascript -->


     <script type="text/javascript" src="asset/js/bootstrapValidator.js"></script>
    <script src="asset/js/javascript.js"></script>
    <script src="asset/js/jquery.ui.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
   
    
    <!-- plugins -->
     <script src="asset/js/plugins/moment.min.js"></script>
     <script src="asset/js/plugins/fullcalendar.min.js"></script>
    <script src="asset/js/plugins/jquery.nicescroll.js"></script>
    <script src="asset/js/plugins/jquery.vmap.min.js"></script>
    <script src="asset/js/plugins/maps/jquery.vmap.world.js"></script>
    <script src="asset/js/plugins/jquery.vmap.sampledata.js"></script>
    <script src="asset/js/plugins/chart.min.js"></script>

    <script src="asset/js/angular.min.js"></script>
    <script src="asset/js/angular-route.js"></script>
    <script src="asset/js/app.js"></script>
    <script src="asset/js/services.js"></script>
    <script src="asset/js/controllers.js"></script>
    <script src="asset/js/filters.js"></script>
    <script src="asset/js/directives.js"></script>

    <!-- custom -->
     <script src="asset/js/main.js"></script>
     <script src="asset/js/datepicker.js"></script>
     </script>
  <!-- end: Javascript -->

  </body>
</html>
