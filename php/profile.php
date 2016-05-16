<?php  

  $search = $_POST["search"];
  mysql_connect("localhost", "root", "cornellekacy") OR die (mysql_error());
  mysql_select_db ("school") or die(mysql_error());

  $query = "SELECT * FROM `student` WHERE `firstname`='$search'";

  $result = mysql_query($query) or die (mysql_error());

  if($result) 
   {    
      while($row=mysql_fetch_row($result))   
       {      
          echo $row[0],$row[1],$row[2],$row[3],$row[4],$row[7],$row[9]; 


       }    
     }
   else
     { 
       echo "No result";  
     }
 ?>
<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link href="bootstrap.min.css" rel="stylesheet">
</head>
<body>
<table class="table">
  <thead>
  <tr>
    <th>NO</th>
    <th>Name</th>   
    <th>Gender</th>
    <th>Email</th>
    <th>Phonenumber</th>
    <th>Address</th>
  </tr>
  </thead>
 <tbody>
 <tr>
   <td></td>
 </tr>
</tbody>
</table>
</body>
</html>


