
<!-- Services-Section -->
<div class="services-section">
<section id="about">
	<div class="container">
		<div class="title-box">
			<!--<h3 class="text-center">Real Estate Management</h3>-->
			<div class="bordered">
            
			</div>
		</div>
		<div class="services-wrapper single-service">
                <div class="col-md-12" >
				<h2 class="text-center" style="font-weight:bold; color:blue;">Login</h2>
                <div id="errorr" style="color:red; font-weight:bold;">
                        <!-- error will be shown here ! -->
                        </div>
	                    <form role="form" action="" method="post" class="login-form" id="login-form" >
	                    	<div class="form-group">
	                    		<label class="sr-only" for="email">Email</label>
	                        	<input type="text" name="email" placeholder="Email" class=" form-control" id="email" required >
	                        </div>
	                        <div class="form-group">
	                        	<label class="sr-only" for="password">Password</label>
	                        	<input type="password" name="password" placeholder="Password" class=" form-control" id="password" required>
	                        </div>
	                        <button class="btn btn-primary" id="btn-login"> <span class="glyphicon glyphicon-log-in"></span>&nbsp; Login</button><br>
                            <a href="<?php echo base_url();?>reset/pass" class=" " target="_blank">Forgot password?</a>
	                    </form>
                
	</div>
</div>
</div>
</section>
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
			 
			$("#btn-login").html('Signing In ...');
      setTimeout(' window.location.href = "<?php echo base_url();?>"; ',2000);
			 
			}
			
			else    {
			
			 $("#errorr").html(data);
			  $("#btn-login").html('Login Failed!');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#btn-login").html('Sending ...');
		   }
		  });
		return false;
		
		  }// end of else statement braces 
	});
	
	}); 
</script>