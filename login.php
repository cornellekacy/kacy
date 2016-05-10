<?php
    session_start();

    if (!empty($_SESSION['user_id'])) {
        header('location: index.php');
    }
?>

<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
  <link href="asset/css/style.css" rel="stylesheet">
   <link href="asset/css/login_style.css" rel="stylesheet">
</head>
<body>
  <div class="wrapper">
    <form id="login" onsubmit="loginUser(); return false;" action="" method="post" class="form-signin">     <div class="panel-body text-center">
                  <h2 class="atomic-symbol">SMS</h2>
                  <p class="element-name">Welcome to Quanteq school Management System</p>
       <div class="form-group form-animate-text" style="margin-top:20px !important;">
                    <input type="text" class="form-text" id="username" required>
                    <span class="bar"></span>
                    <label>Username</label>
                  </div>
       <div class="form-group form-animate-text" style="margin-top:20px !important;">
                    <input type="password" class="form-text" id="password" required>
                    <span class="bar"></span>
                    <label>Password</label>
                  </div> 
                  <div class="row-fluid">  
                  <div class="col-md-12">
      <label class="checkbox">
        <input type="checkbox" value="remember-me" id="rememberMe" name="rememberMe"> Remember me
      </label>
      </div>
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>   

    </form>
  </div>
   <script src="asset/js/javascript.js"></script>
</body>
</html>