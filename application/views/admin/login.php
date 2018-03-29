<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 		<!--Import materialize.css-->
 <link type="text/css" rel="stylesheet" href="<?php echo base_url();?>materialize/css/materialize.css" media="screen,projection"/> 
		<!--Let browser know website is optimized for mobile--> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 		<!--Import jQuery before materialize.js--> 
<script type="text/javascript" src="<?php echo base_url();?>materialize/js/jquery-2.1.3.min.js"></script> 
<script type="text/javascript" src="<?php echo base_url();?>materialize/js/materialize.js"></script>

<script type="text/javascript" src="<?php echo base_url();?>script.js"></script>


<link href="<?php echo base_url();?>temp.css" rel="stylesheet" type="text/css" />
<link href="<?php echo base_url();?>responsive.css" rel="stylesheet" type="text/css" />
<style type="text/css">
body {
	background-image: url();
}
</style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login : Home</title>
</head>

<body>
><!--<p class="myClass" id="myDiv">-->
<div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper mynav1">
       <a href="<?php echo base_url();?>index.php/admin/login" class="brand-logo logosize">REAL ESTATE MANAGEMENT SYSTEM ADMIN PAGE</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
      
        <li><a href="#"></a></li>
        <li><a href="#"></a></li>
       
      </ul>
     <!-- <ul class="side-nav" id="mobile-demo">
        <li><a href="signup.php">Sign Up</a></li>
        <li><a href="login.php">Login</a></li>
        
       
      </ul>-->
    </div>
    
  </nav>
</div>
  <div class="row"> 
<div class="col s12 m6 l3 ">.</div>
<div class="col s12 m6 l6 fom">
<div class="col s12 m6 l4 fom1"><h4 style="color:#424242 !important; font-weight:bold;">LOGIN</h4></div>
<div id="errorr" style="color:red; font-weight:bold;"></div>
  <form role="form" action="" method="post" class="login-form col s12" id="login-form">
     
      <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix wp">email</i>
        <input type="email" name="email"   id="email"  class="validate lol"/>
          <label for="email">Email *</label>
        </div>
    
       <div class="row">
        <div class="input-field col s12">
        <i class="material-icons prefix wp">vpn_key</i>
        <input type="password" name="password"  id="password" class="validate lol" required>
          <label for="password">Password *</label>
        </div>
      </div>
      
      <div class="row">
        <div class="input-field col s12 sub">
        
                        <!-- error will be shown here ! -->
				<span class="glyphicon glyphicon-log-in"></span>
                <input type="submit" class="sign-in validate " value="Login" id="btn-login">
         <!-- <input type="submit" value="Login" class="validate " required/>-->
          <label></label>
        </div>
      </div>
       <div class="row">
        <div class="input-field col s12 sub1">
        
      </div>
    </form>
  </div>
</div>
  </div>
              </div>
               </div>
        </div>
        
      </div>
</div>
<div class="col s12 m6 l4" >
<div class="col s12 m6 l4 top">
</div>
</div>
<div class="sj">
<div class="row "> 
  
</div>
</div>
</div>
</div>
<footer class="page-footer mynav1">
        
<div class="footer-copyright">
            <div class="container">
            © 2017 Copyright Real estate management system
            <a class="grey-text text-lighten-4 right " href="#!"></a>
            </div>
            </div>
        </footer>
          <script src='jquery-3.1.1.min.js'></script>

<script type="text/javascript">
$(document).ready(function() {


 $("#btn-login").click(function(q){	
	 q.preventDefault();
	 
		var emaill=$("#email").val();
		var passwordd=$("#password").val()
		// var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //email validation check
		 var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		 var emailcheck=emaill.match(pattern);
		 var passwordd=$("#password").val();
		 
		 if(emaill==""){
		   	 $("#errorr").html("Please enter email ");
			
		}
		  
		 else if(emailcheck==null){
		   	 $("#errorr").html("Please enter a valid email address ");
			 /*alert("please enter email")*/;
		}
		  
		  else if (passwordd==""){
			
			   $("#errorr").html("Please enter password ");
		  }
		  
		  else{
		  
		  var data = $("#login-form").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "<?php echo base_url();?>index.php/process/login",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			 
			$("#btn-login").val('Signing In ...');
      setTimeout(' window.location.href = "<?php echo base_url();?>index.php/admin"; ',2000);
			 
			}
			
			else    {
			
			 $("#errorr").html(data);
			  $("#btn-login").val('Login Failed!');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#btn-login").val('Sending ...');
		   }
		  });
		return false;
		
		  }// end of else statement braces 
	});
	
	}); 
</script>
</body>
</html>
