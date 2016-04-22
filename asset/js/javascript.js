window.onload=init;
function init(){
  loadlookup();
}
function loadlookup(){
  // getgendertype();
  // getregionsoforigin();
  // getmaritalstatus();
  getstaffstatus();
  getclassmaster();
  // viewstaffs();
  // getacademic();
  // getMedicalstatus();

}

function addUser(){

  var username = document.getElementById('u_user').value;
  var email = document.getElementById('u_email').value;
  var password = document.getElementById('u_pass').value;
  var firstname = document.getElementById('u_fname').value;
  var lastname = document.getElementById('u_lname').value;

   var url ="ws/webservice.php" ; 
   var fd = new FormData();

   fd.append('op', 'addUser');
   fd.append('u_user', username);
   fd.append('u_email', email);
   fd.append('u_pass', password);
   fd.append('u_fname', firstname);
   fd.append('u_lname', lastname);

 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
        var responseText = this.responseText;
        alert ('Registration failed BECAUSE  ' + responseText);
        
      }
      if (response) {
        console.log(response);
        alert('SUCCESSFULLY REGISTERED');
        document.getElementById("add_form").reset();
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.send(fd);
}



//loginUser();
function loginUser(){

  var p_username = document.getElementById('username').value;
  var p_password = document.getElementById('password').value;

   var url ="ws/webservice.php" ;
   var fd = new FormData();

    fd.append('op', 'loginUser');
    fd.append('username', p_username);
    fd.append('password', p_password);
  
 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
        var responseText = this.responseText;
        alert ('Username/Password incorrect');
        
      }
      if (response) {
        console.log(response);
         document.getElementById("login").reset();
          window.location.href ='index.php';
        // window.location.href = "/index.php";
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.send(fd);
}

function ChangeUserPassword(){

  var p_username = document.getElementById('change_user').value;
  var p_OldPassword = document.getElementById('old_pass').value;
  var p_NewPassword = document.getElementById('new_pass').value;

   var url ="ws/webservice.php" ;
   var fd = new FormData();
    fd.append('op', 'ChangeUserPassword');
    fd.append('change_user', p_username);
    fd.append('old_pass', p_OldPassword);
    fd.append('new_pass', p_NewPassword);
  
 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
        var responseText = this.responseText;
        alert ('Sorry Password Could not be change  ' + responseText);
        
      }
      if (response) {
        console.log(response);
        alert('Password SUCCESSFULLY Changed');
         document.getElementById("add_form").reset();
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.send(fd);
}

function getUser(p_username){

   var url ="ws/webservice.php" ;
    var fd = new FormData();

     fd.append('op', 'getUser');
     fd.append('g_id', p_username);

 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
        var responseText = this.responseText;
        alert ('Registration failed BECAUSE  ' + responseText);
        
      }
      if (response) {
        console.log(response);
        // alert('login');
        // document.getElementById("staff").reset();
        // // window.location.href ='index.php';


        // var form = document.getElementById('update_user');

        // for (var i = 0; i < response.length; i++) {
        //      document.getElementById("upd_user").value = response[i].username;
        //      document.getElementById("upd_email").value = response[i].email;
        //      document.getElementById("upd_fname").value = response[i].firstname;
        //      document.getElementById("upd_lname").value = response[i].lastname;           
           
        // }
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.send(fd);
}

function logoutUser(p_userName){

   var url ="ws/webservice.php" ;
   var fd = new FormData();

    fd.append('op', 'logoutUser');
    fd.append('l_id', p_userName);

 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
        var responseText = this.responseText;
        alert ('couldnt logout user');
        
      }
      if (response) {
        console.log(response);
         // alert('logout');
          window.location.href ='login.html';
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.send(fd);
}


function updateUser(){

  var p_username = document.getElementById('upd_user').value;
  var email = document.getElementById('upd_email').value;
  var firstname = document.getElementById('upd_fname').value;
  var lastname = document.getElementById('upd_lname').value;

   var url ="ws/webservice.php" ;
   var fd = new FormData();

    fd.append('op', 'updateUser');
    fd.append('upd_user', p_username);
    fd.append('upd_email', email);
    fd.append('upd_fname', firstname);
    fd.append('upd_lname', lastname);


 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
        var responseText = this.responseText;
        alert ('Registration failed BECAUSE  ' + responseText);
        
      }
      if (response) {
        console.log(response);
        document.getElementById("update_user").reset();
        alert('User SUCCESSFULLY Updated');
        
        // // window.location.href ='index.php';
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.send(fd);
}

function getListofstudentinclass(){
  var classroom = document.getElementById('p_classroom_id').value;
  var academicyear = document.getElementById('p_academic_id').value;


  var url ="ws/webservice.php" ;
  var fd = new FormData();

    fd.append('op', 'getListofstudentinclass');
    fd.append('p_classroom_id', classroom);
    fd.append('p_academic_id', academicyear);


  var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
        var responseText = this.responseText;
        alert ('Registration failed BECAUSE  ' + responseText);
        
      }
      if (response) {
        console.log(response);
        document.getElementById("update_user").reset();
        alert('User SUCCESSFULLY Updated');
        
        // // window.location.href ='index.php';
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.send(fd);
}

function Generallistinclasses(){
  var g_class = document.getElementById('p_Clid').value;
  var academicyear = document.getElementById('p_academic_id').value;


   var url ="ws/webservice.php" ;
   var fd = new FormData();

    fd.append('op', 'Generallistinclasses');
    fd.append('p_Clid', g_class);
    fd.append('p_academic_id', academicyear);


   var xmlhttp = new XMLHttpRequest();
       xmlhttp.onreadystatechange = function() {
   if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
    {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
        var responseText = this.responseText;
        alert ('Registration failed BECAUSE  ' + responseText);
        
      }
      if (response) {
        console.log(response);
        document.getElementById("update_user").reset();
        alert('User SUCCESSFULLY Updated');
        
        // // window.location.href ='index.php';
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.send(fd);
}


 //getMaritalstatus
 getmaritalstatus();
  function getmaritalstatus() {
                                            
    var url ="ws/webservice.php" ; 
    var param1 = "op=getmaritalstatus";

 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
      }
      if (response) {
        console.log(response);
         var M = document.getElementById('mlstatus');
         var Ms = document.getElementById('mlstatuss')


         if (M) {
           M.length = 0;
           M.options[0] = new Option('select...', "", false, false);
         }

         if (Ms) {
           Ms.length = 0;
           Ms.options[0] = new Option('select...', "", false, false);
         }
         
         for (var i=0; i < response.length; i++) {
           if(M) M.options[i+1] = new Option(response[i].MSdescription, response[i].MS, false, false);
           if(Ms) Ms.options[i+1] = new Option(response[i].MSdescription, response[i].MS, false, false);

            
          }
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xmlhttp.send(param1);
              
}


// getclassmaster
 getclassmaster();
  function getclassmaster() {
                    
                             
    var url ="ws/webservice.php" ; 
    var param1 = "op=getclassmaster";

 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
      }
      if (response) {
        console.log(response);
         var m = document.getElementById('cmaster');
         var cm = document.getElementById('cmasters');


         if (m) {
           m.length = 0;
           m.options[0] = new Option('select...', "", false, false);
         }

         if (cm) {
           cm.length = 0;
           cm.options[0] = new Option('select...', "", false, false);
         }
         
         for (var i=0; i < response.length; i++) {
            if(m) m.options[i+1] = new Option(response[i].Cmdescription, response[i].classmasterId, false, false);
            if(cm) cm.options[i+1] = new Option(response[i].Cmdescription, response[i].classmasterId, false, false);

            
          }
      
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xmlhttp.send(param1);
              
} 

 
 
 // getstaffstatus
getstaffstatus();
function getstaffstatus() {
  var url ="ws/webservice.php" ; 
    var param3 = "op=getstaffstatus";

 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
      }
      if (response) {
        console.log(response);
         var s = document.getElementById('status');
         var st = document.getElementById('statuss');


         if (s) {
           s.length = 0;
           s.options[0] = new Option('select...', "", false, false);
         }

         if (st) {
           st.length = 0;
           st.options[0] = new Option('select...', "", false, false);
         }

         for (var i=0; i < response.length; i++) {
           if(s) s.options[i+1] = new Option(response[i].SSdescription, response[i].staffstatusId, false, false);
           if(st) st.options[i+1] = new Option(response[i].SSdescription, response[i].staffstatusId, false, false);

           
           }

      }
    }

 };
 

 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xmlhttp.send(param3);
}

// getgendertype
 getgendertype();
  function getgendertype() {
                    
                             
    var url ="ws/webservice.php" ; 
    var param1 = "op=getgendertype";

 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
      }
      if (response) {
        console.log(response);
         var g = document.getElementById('sgender');
         var h = document.getElementById('sgenders');
         var f = document.getElementById('gender1');
         var n = document.getElementById('u_gender');


         if(g){
           g.length = 0;
           g.options[0] = new Option('select...', "", false, false);
         }

          if(h){
           h.length = 0;
           h.options[0] = new Option('select...', "", false, false);
         }
         
        if(f){
           f.length = 0;
           f.options[0] = new Option('select...', "", false, false);
         }

         if(n){
           n.length = 0;
           n.options[0] = new Option('select...', "", false, false);
         }

         for (var i=0; i < response.length; i++) {
            if(g) g.options[i+1] = new Option(response[i].gdescription, response[i].Gid, false, false);
            if(h) h.options[i+1] = new Option(response[i].gdescription, response[i].Gid, false, false);
            if(f) f.options[i+1] = new Option(response[i].gdescription, response[i].Gid, false, false);
            if(n) n.options[i+1] = new Option(response[i].gdescription, response[i].Gid, false, false);


          }
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xmlhttp.send(param1);
              
} 





// getRegionsOfOrigin
getregionsoforigin();
function getregionsoforigin() {
  var url ="ws/webservice.php" ; 
    var param3 = "op=getregionsoforigin";

 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
      }
      if (response) {
        console.log(response);
         var r = document.getElementById('sroo');
         var s = document.getElementById('regions1');
         var sr = document.getElementById('sroos');
         var sg = document.getElementById('u_regions');


   
         if (r) {
           r.length = 0;
           r.options[0] = new Option('select...', "", false, false);
         }

        if (s) {
           s.length = 0;
           s.options[0] = new Option('select...', "", false, false);
         }

          if (sr) {
           sr.length = 0;
           sr.options[0] = new Option('select...', "", false, false);
         }

          if (sg) {
           sg.length = 0;
           sg.options[0] = new Option('select...', "", false, false);
         }

         for (var i=0; i < response.length; i++) {
           if (r) r.options[i+1] = new Option(response[i].rdescription, response[i].Rid, false, false);
           if (s) s.options[i+1] = new Option(response[i].rdescription, response[i].Rid, false, false);
           if (sr) sr.options[i+1] = new Option(response[i].rdescription, response[i].Rid, false, false);
           if (sg) sg.options[i+1] = new Option(response[i].rdescription, response[i].Rid, false, false);


           
         }
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xmlhttp.send(param3);
}


// getClassroom
getClasses();
function getClasses() {
  var url ="ws/webservice.php" ; 
    var param4 = "op=getClasses";

 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
      }
      if (response) {
        console.log(response);

        var f = document.getElementById('class_room');
        var c = document.getElementById('u_class');
        var e = document.getElementById('p_classroom_id');


        if (f) {
            f.length = 0;
            f.options[0] = new Option('select...', "", false, false);
        }

        
        if (e) {
            e.length = 0;
            e.options[0] = new Option('select...', "", false, false);
        }

        if (c) {
            c.length = 0;
            c.options[0] = new Option('select...', "", false, false);
        }

         for (var i=0; i < response.length; i++) {
           if(f) f.options[i+1] = new Option(response[i].classname, response[i].Clid, false, false);
           if(c) c.options[i+1] = new Option(response[i].classname, response[i].Clid, false, false);
           if(e) e.options[i+1] = new Option(response[i].classname, response[i].Clid, false, false);

            
         }
         
    }
  }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xmlhttp.send(param4);
}

getClasses();
function getSubclass() {
  var url ="ws/webservice.php" ; 
    var param4 = "op=getSubclass";

 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
      }
      if (response) {
        console.log(response);

        var f = document.getElementById('class_room');


        if (f) {
            f.length = 0;
            f.options[0] = new Option('select...', "", false, false);
        }


         for (var i=0; i < response.length; i++) {
           if(f) f.options[i+1] = new Option(response[i].classname, response[i].classId, false, false);

            
         }
         
    }
  }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xmlhttp.send(param4);
}


//insertstaff();
function Academicyear(){

    
    var fd = new FormData();
    var url = "ws/webservice.php";

    fd.append('op', "Academicyear");
   
                  
    //console.log(param6); return false;
 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      // console.log(responseText); return false;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
        var responseText = this.responseText;
        alert ('Registration failed BECAUSE  ' + responseText);
        
      }
      if (response) {
        console.log(response);
        alert('SUCCESSFULLY REGISTERED');
        document.getElementById("form0").reset();
        // window.location.href ='index.php';
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.send(fd);
}

getacademic();
function getacademic() {
  var url ="ws/webservice.php" ; 
    var param4 = "op=getacademic";

 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
      }
      if (response) {
        console.log(response);

        var a = document.getElementById('s_academic');
        var b = document.getElementById('u_academic');
        var c = document.getElementById('p_academic_id');


        if (a) {
            a.length = 0;
            a.options[0] = new Option('select...', "", false, false);
        }


        if (b) {
            b.length = 0;
            b.options[0] = new Option('select...', "", false, false);
        }


        if (c) {
            c.length = 0;
            c.options[0] = new Option('select...', "", false, false);
        }

         for (var i=0; i < response.length; i++) {
           if(a) a.options[i+1] = new Option(response[i].schoolyear, response[i].id, false, false);
           if(b) b.options[i+1] = new Option(response[i].schoolyear, response[i].id, false, false);
           if(c) c.options[i+1] = new Option(response[i].schoolyear, response[i].id, false, false);

            
         }
         
    }
  }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xmlhttp.send(param4);
}


getMedicalstatus();
function getMedicalstatus() {
  var url ="ws/webservice.php" ; 
    var param4 = "op=getMedicalstatus";

 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
      }
      if (response) {
        console.log(response);

        var ms = document.getElementById('medical');
        var sm = document.getElementById('u_medical');

        if (ms) {
            ms.length = 0;
            ms.options[0] = new Option('select...', "", false, false);
        }


        if (sm) {
            sm.length = 0;
            sm.options[0] = new Option('select...', "", false, false);
        }

         for (var i=0; i < response.length; i++) {
           if(ms) ms.options[i+1] = new Option(response[i].Msdescription, response[i].id, false, false);
           if(sm) sm.options[i+1] = new Option(response[i].Msdescription, response[i].id, false, false);

            
         }
         
    }
  }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xmlhttp.send(param4);
}

//insertstaff();
function addStaff(){

  var firstname = document.getElementById('fname').value;
  var lastname = document.getElementById('lname').value;
  var email = document.getElementById('email').value;
  var dateofbirth = document.getElementById('dob').value;
  var gender_id = document.getElementById('sgender').value;
  var placeofbirth = document.getElementById('pob').value;
  var address = document.getElementById('haddress').value;
  var NICnumber = document.getElementById('nic').value;
  var phonenumber = document.getElementById('pnum1').value;
  var regionsoforigin_id = document.getElementById('sroo').value;
  var maritalstatus_MS = document.getElementById('mlstatus').value;
  var classmaster_id = document.getElementById('cmaster').value;
  var staffstatus = document.getElementById('status').value;
  var photo = document.querySelector('#upload');

 
    
    var fd = new FormData();
    var url = "ws/webservice.php";

    fd.append('op', "addStaff");
    fd.append('fname', firstname);
    fd.append('lname', lastname);
    fd.append('email', email);
    fd.append('dob', dateofbirth);
    fd.append('sgender', gender_id);
    fd.append('pob', placeofbirth);
    fd.append('haddress', address);
    fd.append('nic', NICnumber);
    fd.append('pnum1', phonenumber);
    fd.append('sroo', regionsoforigin_id);
    fd.append('mlstatus', maritalstatus_MS);
    fd.append('cmaster', classmaster_id);
    fd.append('status', staffstatus);
    fd.append('upload', photo.files[0]);
                  
    //console.log(param6); return false;
 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      // console.log(responseText); return false;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
        var responseText = this.responseText;
        alert ('Registration failed BECAUSE  ' + responseText);
        
      }
      if (response) {
        console.log(response);
        alert('SUCCESSFULLY REGISTERED');
        document.getElementById("form0").reset();
        // window.location.href ='index.php';
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.send(fd);
}


function getstaff(p_staffId) {
  var url ="ws/webservice.php" ; 
    var param6 = "op=getstaff&ssid="+ p_staffId;
//console.log(param6);
 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
      }
      if (response) {
        console.log(response);

        $('#edit_staff').modal('show');
        $('#edit_staff').on('shown.bs.modal', function(){
          // console.log("");
        });

        $('#staff_enrol').modal('show');
          $('#staff_enrol').on('shown.bs.modal', function(){
            // console.log("");
          });
        


        var form = document.getElementById('update_staff');
        var form1 = document.getElementById('s_profile');
        if (form1) form1.innerHTML='';
        var tbody = document.getElementById('table2');
        if (tbody) tbody.innerHTML='';
        var tbody0 = document.getElementById('table3');
        if (tbody0) tbody0.innerHTML='';

        for (var i = 0; i < response.length; i++) {

           // document.getElementById("s_id").value = response[i].p_staffId;
           // document.getElementById("fnames").value = response[i].firstname;
           // document.getElementById("lnames").value = response[i].lastname;
           // document.getElementById("emails").value = response[i].email;
           // document.getElementById("dobs").value = response[i].dateofbirth;
           // document.getElementById("sgenders").value = response[i].gender_id;
           // document.getElementById("pobs").value = response[i].placeofbirth;
           // document.getElementById("haddresss").value = response[i].homeaddress;
           // document.getElementById("nics").value = response[i].NICnumber;
           // document.getElementById("pnums").value = response[i].phonenumber;
           // document.getElementById("sroos").value = response[i].regionsoforigin_id;
           // document.getElementById("mlstatuss").value = response[i].maritalstatus_MS;
           // document.getElementById("cmasters").value = response[i].classmaster_id;
           // document.getElementById("statuss").value = response[i].staffstatus_id;

           var image = document.createElement('img');
           image.src = "data:image/png;base64," +response[i].Photo;
           image.width='200';
           image.height='190';

           form1.appendChild(image);


            var row = document.createElement('tr');
             
          var row1 = document.createElement('tr');

             var class_td = document.createElement('td');
            class_td.innerHTML = 'Name:';
            row.appendChild(class_td);

           var name_td = document.createElement('td');
           name_td.innerHTML =  response[i].firstname +" "+ response[i].lastname;
           row.appendChild(name_td);

          

           if (tbody) tbody.appendChild(row);
           if (tbody) tbody.appendChild(row1);
            //gender
           var row = document.createElement('tr');     
           var row1 = document.createElement('tr');

           var name_td = document.createElement('td');
           name_td.innerHTML = 'Gender:';
           row.appendChild(name_td);

           var name_td = document.createElement('td');
           name_td.innerHTML =  response[i].gender_id;
           row.appendChild(name_td);

           if (tbody) tbody.appendChild(row);
        

           //home address
           var row = document.createElement('tr');     
           var row1 = document.createElement('tr');

           var name_td = document.createElement('td');
           name_td.innerHTML =  'Address:';
           row.appendChild(name_td);

           var name_td = document.createElement('td');
           name_td.innerHTML =  response[i].homeaddress;
           row.appendChild(name_td);

           if (tbody) tbody.appendChild(row);

           //placeofbirth
           var row = document.createElement('tr');     
           var row1 = document.createElement('tr');

           var name_td = document.createElement('td');
           name_td.innerHTML =  'Placeofbirth:';
           row.appendChild(name_td);

           var name_td = document.createElement('td');
           name_td.innerHTML =  response[i].placeofbirth;
           row.appendChild(name_td);

           if (tbody) tbody.appendChild(row);


            //dateofbirth
           var row = document.createElement('tr');     
           var row1 = document.createElement('tr');

            var name_td = document.createElement('td');
           name_td.innerHTML = 'Dateofbirth:';
           row.appendChild(name_td);

           var name_td = document.createElement('td');
           name_td.innerHTML =  response[i].dateofbirth;
           row.appendChild(name_td);

           if (tbody) tbody.appendChild(row);
        }

        var thead = document.getElementById('table3');

        for (var i = 0; i < response.length; i++) {
          var row = document.createElement('tr');     
           var row1 = document.createElement('tr');

           var name_td = document.createElement('td');
           name_td.innerHTML =  response[i].firstname +" "+ 'Profile';
           row.appendChild(name_td);

           if (thead) thead.appendChild(row);
        }
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xmlhttp.send(param6);
}



function updateStaff(){

  var p_staffId = document.getElementById('s_id').value;
  var firstname = document.getElementById('fnames').value;
  var lastname = document.getElementById('lnames').value;
  var email = document.getElementById('emails').value;
  var dateofbirth = document.getElementById('dobs').value;
  var gender_id = document.getElementById('sgenders').value;
  var placeofbirth = document.getElementById('pobs').value;
  var address = document.getElementById('haddresss').value;
  var NICnumber = document.getElementById('nics').value;
  var phonenumber = document.getElementById('pnums').value;
  var regionsoforigin_id = document.getElementById('sroos').value;
  var maritalstatus_MS = document.getElementById('mlstatuss').value;
  var classmaster_id = document.getElementById('cmasters').value;
  var staffstatus_id = document.getElementById('statuss').value;
  var photo = document.querySelector('#uploads');

  

 
    var url ="ws/webservice.php" ;
    var fd = new FormData();

    fd.append('op', "updateStaff");
    fd.append('s_id', p_staffId);
    fd.append('fnames', firstname);
    fd.append('lnames', lastname);
    fd.append('emails', email);
    fd.append('dobs', dateofbirth);
    fd.append('sgenders', gender_id);
    fd.append('pobs', placeofbirth);
    fd.append('haddresss', address);
    fd.append('nics', NICnumber);
    fd.append('pnums', phonenumber);
    fd.append('sroos', regionsoforigin_id);
    fd.append('mlstatuss', maritalstatus_MS);
    fd.append('cmasters', classmaster_id);
    fd.append('statuss', staffstatus_id);
    fd.append('uploads', photo.files[0]);

                  
    // console.log(param6); return false;
 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
        var responseText = this.responseText;
        alert ('Update failed BECAUSE  ' + responseText);
        
      }
      if (response) {
        console.log(response);
        alert('Updated SUCCESSFULLY');
        document.getElementById("update_staff").reset();
        // window.location.href ='staff.php';
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.send(fd);
}



 viewstaffs();
function viewstaffs() {
  var url ="ws/webservice.php" ; 
    var param6 = "op=viewstaffs";
// console.log(param6);
 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
      }
      if (response) {
        console.log(response);

         

        // var tbody = document.getElementById('table0');
        //  tbody.innerHTML = '';
         var tbody = document.getElementById('table0');
         if(tbody) tbody.innerHTML="";

        for (var i = 0; i < response.length; i++) {
          
          var row = document.createElement("tr");
          var currentstaffId = response[i].staffId;
          
          var id_td = document.createElement("td");
          id_td.innerHTML = response[i].staffId;
          row.appendChild(id_td);

          var name_td = document.createElement("td");
          name_td.innerHTML = response[i].firstname  + " " + response[i].lastname;
          row.appendChild(name_td);

          var sex_td = document.createElement("td");
          sex_td.innerHTML = response[i].gender_id;
          row.appendChild(sex_td);
          
          var email_td = document.createElement("td");
          email_td.innerHTML = response[i].email;
          row.appendChild(email_td);

          var pnum_td = document.createElement("td");
          pnum_td.innerHTML = response[i].phonenumber;
          row.appendChild(pnum_td);

          var haddr_td = document.createElement("td");
          haddr_td.innerHTML = response[i].homeaddress;
          row.appendChild(haddr_td);

          var edit_td = document.createElement("td");
          edit_td.innerHTML = "<a href='/edit_staff/"+response[i].staffId+"/' onclick='getstaff("+currentstaffId+");return false;' $('#myModal').modal('show'); ></i>Edit</a>"
          row.appendChild(edit_td);

          var delete_td = document.createElement("td");
          delete_td.innerHTML = "<a href='/delete_staff/"+response[i].staffId+"/' onclick='deletestaff("+currentstaffId+");return false;'><i class='remove icon'></i>Delete</a>"
          row.appendChild(delete_td);



         if (tbody) tbody.appendChild(row);

        }

         var tbody = document.getElementById('staff_en');
         if(tbody) tbody.innerHTML="";

        for (var i = 0; i < response.length; i++) {
          
          var row = document.createElement("tr");
          var currentstaffId = response[i].staffId;
          
          var id_td = document.createElement("td");
          id_td.innerHTML = response[i].staffId;
          row.appendChild(id_td);

          var name_td = document.createElement("td");
          name_td.innerHTML = response[i].firstname  + " " + response[i].lastname;
          row.appendChild(name_td);

          var sex_td = document.createElement("td");
          sex_td.innerHTML = response[i].gender_id;
          row.appendChild(sex_td);
          
          var email_td = document.createElement("td");
          email_td.innerHTML = response[i].email;
          row.appendChild(email_td);

          var date_td = document.createElement("td");
          date_td.innerHTML = response[i].dateofbirth;
          row.appendChild(date_td);

          var edit_td = document.createElement("td");
          edit_td.innerHTML = "<a href='/staff_enrol/"+response[i].staffId+"/' onclick='getstaff("+currentstaffId+");return false;' $('#staff_enrol').modal('show'); ><i class='edit icon'></i>View</a>"
          row.appendChild(edit_td);

         if (tbody) tbody.appendChild(row);

        }
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xmlhttp.send(param6);
}

function updateStudent() {

  var p_studentId = document.getElementById('upd_id').value
  var firstname = document.getElementById('u_fname').value;
  var lastname = document.getElementById('u_lname').value;
  var gender_id = document.getElementById('u_gender').value;
  var dateofbirth = document.getElementById('u_dob').value;
  var placeofbirth = document.getElementById('u_pob').value;
  var regionsoforigin_id = document.getElementById('u_regions').value;
  var email = document.getElementById('u_email').value;
  var IDnumber = document.getElementById('u_ID').value;
  var address = document.getElementById('uh_addr').value;
  var medicalstatus = document.getElementById('u_medical').value
  var classroom_id = document.getElementById('u_class').value;
  var academic_id = document.getElementById('u_academic').value;
  var photo = document.querySelector('#u_upload1');

    var url ="ws/webservice.php" ;
    var fd = new FormData();

    fd.append('op', "updateStudent");
    fd.append('upd_id', p_studentId);
    fd.append('u_fname', firstname);
    fd.append('u_lname', lastname);
    fd.append('u_gender', gender_id);
    fd.append('u_dob', dateofbirth);
    fd.append('u_pob', placeofbirth);
    fd.append('u_regions', regionsoforigin_id);
    fd.append('u_email', email);
    fd.append('u_ID', IDnumber);
    fd.append('uh_addr', address);
    fd.append('u_medical', medicalstatus);
    fd.append('u_class', classroom_id);
    fd.append('u_academic', academic_id);
    fd.append('u_upload1', photo.files[0]);
                
// console.log(param6);
 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
         var t = this.responseText;
        alert('FAILED. ' + t);
      }
      if (response) {
        console.log(response);
        alert('SUCCESSFULLY Updated. Refresh to see Changes');
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.send(fd);
}

// deleteStudent --------------------------------------------------------------------------------
//deletestaff("1");
function deletestaff(p_staffId) {
  var url ="ws/webservice.php" ; 
    var param5 = "op=deletestaff&sid="+ p_staffId;

 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
      }
      if (response) {
        console.log(response);
        alert('DELETED.' + ' Please Refresh The page');
        // window.location.reload();

      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xmlhttp.send(param5);
}

function addStudentGuardian(){
  // console.log('rou'); return false;
  
  var firstname = document.getElementById('s_fname').value;
  var lastname = document.getElementById('s_lname').value;
  var gender_id = document.getElementById('gender1').value;
  var dateofbirth = document.getElementById('s_dob').value;
  var placeofbirth = document.getElementById('s_pob').value;
  var regionsoforigin_id = document.getElementById('regions1').value;
  var email = document.getElementById('s_email').value;
  var IDnumber = document.getElementById('s_ID').value;
  var address = document.getElementById('h_addr').value;
  var medicalstatus = document.getElementById('medical').value
  var classroom_id = document.getElementById('class_room').value;
  var schoolyear = document.getElementById('s_academic').value;
  var photo = document.querySelector('#fileinput');
  var G1name = document.getElementById('g1_name').value;
  var G1email = document.getElementById('g1_email').value;
  var G1phonenumber = document.getElementById('g1_pnum').value;
  var G1homeaddress = document.getElementById('g1_haddr').value;
  var G2name = document.getElementById('g2_name').value;
  var G2email = document.getElementById('g2_email').value;
  var G2phonenumber = document.getElementById('g2_pnumb').value;
  var G2homeaddress = document.getElementById('g2_haddr').value;

  var fd = new FormData();
  var url = "ws/webservice.php";

   fd.append('op', "addStudentGuardian");
   fd.append('s_fname', firstname);
   fd.append('s_lname', lastname);
   fd.append('gender1', gender_id);
   fd.append('s_dob', dateofbirth);
   fd.append('s_pob', placeofbirth);
   fd.append('regions1', regionsoforigin_id);
   fd.append('s_email', email);
   fd.append('s_ID', IDnumber);
   fd.append('h_addr', address);
   fd.append('medical', medicalstatus);
   fd.append('class_room', classroom_id);
   fd.append('s_academic', schoolyear);
   fd.append('fileinput', photo.files[0]);
   fd.append('g1_name', G1name);
   fd.append('g1_email', G1email);
   fd.append('g1_pnum', G1phonenumber);
   fd.append('g1_haddr', G1homeaddress);
   fd.append('g2_name', G2name);
   fd.append('g2_email', G2email);
   fd.append('g2_pnumb', G2phonenumber);
   fd.append('g2_haddr', G2homeaddress);



  //   var param6 = "op=addStudentGuardian&s_fname="+ firstname + "&s_lname="+ lastname + "&gender1="+ gender_id + "&dob="+dateofbirth +  "&s_pob="+ placeofbirth + 
  //    "&sroo="+ regionsoforigin_id + "&s_email="+ email + "&s_ID="+ IDnumber + "&h_addr="+ address + "&medical="+ medicalstatus + "&class_room="+classroom_id +
  //    "&year="+ schoolyear + "&fileinput="+ photo +
  //     "&g1_name="+ G1name + "&g1_email="+ G1email + "&g1_pnum="+ G1phonenumber + "&g1_haddr="+G1homeaddress +
  //     "&g2_name="+G2name+ "&g2_email="+G2email + "&g2_pnum="+ G2phonenumber + "&g2_haddr="+G2homeaddress;

// console.log(param6);

 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
        var responseText = this.responseText;
        alert ('FAILED:,  ' + responseText);
      }
      if (response) {
        console.log(response);
         alert('SUCCESSFULLY');
         document.getElementById("student_form").reset();
      }
    }

 };

 xmlhttp.open('POST', url, true);
 // xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xmlhttp.send(fd);
}

function getStudent(p_studentId) {
  var url ="ws/webservice.php" ; 
    var param6 = "op=getStudent&sid="+ p_studentId;

 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
      }
      if (response) {
        console.log(response);

         $('#update_student').modal('show');
         $('#update_student').on('shown.bs.modal', function(){
           // console.log("");
         });

           $('#fsModal').modal('show');
          $('#fsModal').on('shown.bs.modal', function(){
            // console.log("");
          });

           var form = document.getElementById('up_student');
           var tbody = document.getElementById('table1');
           if (tbody) tbody.innerHTML='';
           var form1 = document.getElementById('pics');
           if (form1) form1.innerHTML='';
           var form2 = document.getElementById('std_head');
           if (form2) form2.innerHTML='';

            
        
        for (var i = 0; i < response.length; i++) {

               document.getElementById("upd_id").value = response[i].studentId;
               document.getElementById('u_fname').value = response[i].firstname;
               document.getElementById('u_lname').value = response[i].lastname;
               document.getElementById('u_gender').value = response[i].gender_id;
               document.getElementById('u_dob').value = response[i].DOB;
               document.getElementById('u_pob').value = response[i].POB;
               document.getElementById('u_regions').value = response[i].rdescription;
               document.getElementById('u_email').value = response[i].email;
               document.getElementById('u_ID').value = response[i].IDnumber;
               document.getElementById('uh_addr').value = response[i].address;
               document.getElementById('u_medical').value = response[i].Msdescription
               document.getElementById('u_class').value = response[i].classroom_id;
               document.getElementById('u_academic').value = response[i].academic_id;

         var image = document.createElement('img');
           image.src = "data:image/png;base64," +response[i].Photo;
           image.width='200';
           image.height='190';

           form1.appendChild(image);

          var row = document.createElement('tr');
          var row1 = document.createElement('tr');


           var name_td = document.createElement('td');
           name_td.innerHTML = response[i].firstname +" "+ response[i].lastname;
           row.appendChild(name_td);

          var class_td = document.createElement('td');
              class_td.innerHTML = response[i].classname;
              row1.appendChild(class_td);

           if (tbody) tbody.appendChild(row);
           if (tbody) tbody.appendChild(row1);
    // End @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

          var row = document.createElement('tr');
          var row1 = document.createElement('tr');

          var class_td = document.createElement('td');
              class_td.innerHTML = 'Name:';
              row1.appendChild(class_td);

          var name_td = document.createElement('td');
              name_td.innerHTML = response[i].firstname +" "+ response[i].lastname;
              row1.appendChild(name_td);

          if (form2) form2.appendChild(row);
          if (form2) form2.appendChild(row1);
    // End @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

          var row = document.createElement('tr');
          var row1 = document.createElement('tr');

          var name_td = document.createElement('td');
              name_td.innerHTML = 'class:';
              row.appendChild(name_td);

          var class_td = document.createElement('td');
              class_td.innerHTML = response[i].classname;
              row.appendChild(class_td);

          if (form2) form2.appendChild(row);
          if (form2) form2.appendChild(row1);
    // End @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

          var row = document.createElement('tr');
          var row1 = document.createElement('tr');

          var name_td = document.createElement('td');
              name_td.innerHTML = 'Email:';
              row.appendChild(name_td);

          var class_td = document.createElement('td');
              class_td.innerHTML = response[i].email;
              row.appendChild(class_td);

          if (form2) form2.appendChild(row);
          if (form2) form2.appendChild(row1);
      // End @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

          var row = document.createElement('tr');
          var row1 = document.createElement('tr');

          var name_td = document.createElement('td');
              name_td.innerHTML = 'Medical:';
              row.appendChild(name_td);

          var class_td = document.createElement('td');
              class_td.innerHTML = response[i].Msdescription;
              row.appendChild(class_td);

          if (form2) form2.appendChild(row);
          if (form2) form2.appendChild(row1);

    // End @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@
          var row = document.createElement('tr');
          var row1 = document.createElement('tr');

          var name_td = document.createElement('td');
              name_td.innerHTML = 'Gender:';
              row.appendChild(name_td);

          var class_td = document.createElement('td');
              class_td.innerHTML = response[i].gender_id;
              row.appendChild(class_td);

          if (form2) form2.appendChild(row);
          if (form2) form2.appendChild(row1);
    //End @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

          var row = document.createElement('tr');
          var row1 = document.createElement('tr');

          var name_td = document.createElement('td');
              name_td.innerHTML = 'Region:';
              row.appendChild(name_td);

          var class_td = document.createElement('td');
              class_td.innerHTML = response[i].rdescription;
              row.appendChild(class_td);

          if (form2) form2.appendChild(row);
          if (form2) form2.appendChild(row1);
      // End @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@S

          var row = document.createElement('tr');
          var row1 = document.createElement('tr');

          var name_td = document.createElement('td');
              name_td.innerHTML = 'IDnumber:';
              row.appendChild(name_td);

          var class_td = document.createElement('td');
              class_td.innerHTML = response[i].IDnumber;

              row.appendChild(class_td);

          if (form2) form2.appendChild(row);
          if (form2) form2.appendChild(row1);
      //End @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

          var row = document.createElement('tr');
          var row1 = document.createElement('tr');

          var name_td = document.createElement('td');
              name_td.innerHTML = 'Schoolyear:';
              row.appendChild(name_td);

          var class_td = document.createElement('td');
              class_td.innerHTML = response[i].schoolyear;
              row.appendChild(class_td);

          if (form2) form2.appendChild(row);
          if (form2) form2.appendChild(row1);
      // End @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

          var row = document.createElement('tr');
          var row1 = document.createElement('tr');

          var name_td = document.createElement('td');
              name_td.innerHTML = 'dateofbirth:';
              row.appendChild(name_td);

          var class_td = document.createElement('td');
              class_td.innerHTML = response[i].DOB;
              row.appendChild(class_td);

          if (form2) form2.appendChild(row);
          if (form2) form2.appendChild(row1);
      //End @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@

          var row = document.createElement('tr');
          var row1 = document.createElement('tr');

          var name_td = document.createElement('td');
              name_td.innerHTML = 'placeofbirth:';
              row.appendChild(name_td);

          var class_td = document.createElement('td');
              class_td.innerHTML = response[i].POB;
              row.appendChild(class_td);

          if (form2) form2.appendChild(row);
          if (form2) form2.appendChild(row1);
      // End @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@




        
      }

      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xmlhttp.send(param6);
}

viewStudents();
function viewStudents() {
  var url ="ws/webservice.php" ; 
    var param6 = "op=viewStudents";
// console.log(param6);
 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
      }
      if (response) {
        console.log(response);

        var tbody = document.getElementById('tbody1');
        if (tbody) tbody.innerHTML='';

        for (var i = 0; i < response.length; i++) {
          
          var row = document.createElement("tr");
          var currentstudentId = response[i].studentId;
          
          var id_td = document.createElement("td");
          id_td.innerHTML = response[i].studentId;
          row.appendChild(id_td);

          var name_td = document.createElement('td');
          name_td.innerHTML = response[i].firstname + " " + response[i].lastname;
          row.appendChild(name_td);

          var sex_td = document.createElement('td');
          sex_td.innerHTML = response[i].gender_id;
          row.appendChild(sex_td);

          var home_td = document.createElement('td');
          home_td.innerHTML = response[i].address;
          row.appendChild(home_td);

          var email_td = document.createElement('td');
          email_td.innerHTML = response[i].email;
          row.appendChild(email_td);

          var edit_td = document.createElement("td");
          edit_td.innerHTML = "<a href='/edit_student/"+response[i].studentId+"/' onclick='getStudent("+currentstudentId+");return false;' ><i class='edit icon'></i>Edit</a>"
          row.appendChild(edit_td);

          var delete_td = document.createElement("td");
          delete_td.innerHTML = "<a href='/delete_student/"+response[i].studentId+"/' onclick='deleteStudent("+currentstudentId+");return false;'><i class='remove icon'></i>Delete</a>"
          row.appendChild(delete_td);

          if(tbody) tbody.appendChild(row);
        }

        var tbody = document.getElementById('tbody2');
        if (tbody) tbody.innerHTML='';

        for (var i = 0; i < response.length; i++) {
          
          var row = document.createElement("tr");
          var currentstudentId = response[i].studentId;
          
          var id_td = document.createElement("td");
          id_td.innerHTML = response[i].studentId;
          row.appendChild(id_td);

          var name_td = document.createElement('td');
          name_td.innerHTML = response[i].firstname + " " + response[i].lastname;
          row.appendChild(name_td);

          var sex_td = document.createElement('td');
          sex_td.innerHTML = response[i].gender_id;
          row.appendChild(sex_td);

          var home_td = document.createElement('td');
          home_td.innerHTML = response[i].address;
          row.appendChild(home_td);

          var email_td = document.createElement('td');
          email_td.innerHTML = response[i].email;
          row.appendChild(email_td);

          var viewprofile_td = document.createElement("td");
          viewprofile_td.innerHTML = "<a href='/fsModal/"+response[i].studentId+"/' onclick='getStudent("+currentstudentId+");return false;' >View Profile</a>"
          row.appendChild(viewprofile_td);


          if(tbody) tbody.appendChild(row);
        } 
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xmlhttp.send(param6);
}



function deleteStudent(p_studentId) {
  var url ="ws/webservice.php" ; 
    var param5 = "op=deleteStudent&sid="+ p_studentId;

 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
      }
      if (response) {
        console.log(response);
        alert('DELETED. Please Refresh The Page')
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xmlhttp.send(param5);
}

// ===================================================================

function getGuardian(p_guardianId) {
  var url ="ws/webservice.php" ; 
    var param5 = "op=getGuardian&gid="+ p_guardianId;

 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
      }
      if (response) {
        console.log(response);
           var g_form = getElementById('update_guardian');

        for (var i = 0; i < response.length; i++) {
          
          document.getElementById('g_id').value = response[i].guardianId;
          document.getElementById('g_fname').value = response[i].name;
          document.getElementById('g_email').value = response[i].email;
          document.getElementById('g_pnum').value = response[i].phonenumber;
          document.getElementById('g_addr').value = response[i].homeaddress;
        }
        
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xmlhttp.send(param5);
}

// ===========================================================

function viewGuardians(p_guardianId) {
  var url ="ws/webservice.php" ; 
    var param5 = "op=viewGuardians";

 var xmlhttp = new XMLHttpRequest();
 xmlhttp.onreadystatechange = function() {
  if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
   {
      var response;
      try {
      
        response = JSON.parse(xmlhttp.responseText);
      }catch(e) {
        console.error(this.responseText);
      }
      if (response) {
        console.log(response);
        
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xmlhttp.send(param5);
}

// ===========================================================

function updateGuardian(p_guardianId) {

          var p_guardianId = document.getElementById('g_id').value;
          var name = document.getElementById('g_fname').value;
          var email = document.getElementById('g_email').value;
          var phonenumber = document.getElementById('g_pumb').value;
          var homeaddress = document.getElementById('g_addr').value;

    var url ="ws/webservice.php" ; 
    var param5 = "op=updateGuardian&gid="+ p_guardianId+ "&name="+name+ "&email="+email+
                   "&pnumb="+phonenumber+ "&home="+homeaddress;


    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
      {
    var response;
    try {
      
        response = JSON.parse(xmlhttp.responseText);
         }
    catch(e) {
        console.error(this.responseText);
      }
    if (response) {
        console.log(response);
      }
    }

 };

 xmlhttp.open('POST', url, true);
 xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
 xmlhttp.send(param5);
}

// ===========================================================

function deleteGuardian(p_guardianId) {
    var url ="ws/webservice.php" ; 
    var param5 = "op=deleteGuardian";

    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) 
       {
    var response;
    try {
      
        response = JSON.parse(xmlhttp.responseText);
        }    
   catch(e) {
        console.error(this.responseText);
        }
    if (response) {
        console.log(response);
        
        }
     }

   };

	 xmlhttp.open('POST', url, true);
	 xmlhttp.setRequestHeader("Content-type","application/x-www-form-urlencoded");
	 xmlhttp.send(param5);
   }
