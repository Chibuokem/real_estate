
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
				<h2 class="text-center" style="font-weight:bold; color:blue;">Register</h2>
                <div id="message" style="color:red; font-weight:bold;">
                        <!-- error will be shown here ! -->
                        </div>
	                   
                       
                       <h2>CREATE AN ACCOUNT</h2>
            <h2 id="message" style="color:red; font-weight:bold;"></h2>
            <h2 id="success" style="color:green; font-weight:bold;"></h2>
			<form action="#" method="post" id="register-form">
				
                
                 <div class="form-group ">
                      <label class="control-label" for="name">Name </label>
                      <div class="input-group">
                       <div class="input-group-addon">
                        <span class="fa fa-user"></span> 
                       </div>
                       <input type="text" id="name" class="form-control" name="name" placeholder="Your Name" required>
                      </div>
                     </div>
                
             
				
                
                       <div class="form-group ">
                      <label class="control-label " for="email"> Email </label>
                      <div class="input-group">
                       <div class="input-group-addon">
                        <span class="glyphicon glyphicon-envelope"></span> 
                       </div>
                       <input class="form-control" id="email" name="email" type="text"/>
                      </div>
                     </div>
                
                
                  <div class="form-group ">
                      <label class="control-label " for="phone"> Phone </label>
                      <div class="input-group">
                       <div class="input-group-addon">
                        <span class="fa fa-phone"></span> 
                       </div>
                       <input type="text" id="phone" class="form-control" name="phone" placeholder="Phone Number" required>
                      </div>
                     </div>
                
				
                
                 <div class="form-group ">
                      <label class="control-label " for="address"> Address</label>
                      <div class="input-group">
                       <div class="input-group-addon">
                        <span class=" fa fa-address-card" aria-hidden="true"></span> 
                       </div>
                      <input type="text"  id="address" class="form-control" name="address" placeholder="Address" required>
                      </div>
                     </div>
                
              
				 <div class="form-group ">
                      <label class="control-label " for="Password"> Password</label>
                      <div class="input-group">
                       <div class="input-group-addon">
                        <span class=" fa fa-unlock-alt"></span> 
                       </div>
                     	<input type="password" id="password" class="form-control" name="password" placeholder="Create Password" required>
                      </div>
                     </div>
                
                 <div class="form-group ">
                      <label class="control-label " for="Password"> Confirm Password</label>
                      <div class="input-group">
                       <div class="input-group-addon">
                        <span class=" fa fa-unlock-alt"></span> 
                       </div>
                     	<input type="password" id="password2" class="form-control" name="password2" placeholder="Confirm Password s" required>
                      </div>
                     </div>
				
				
			</form>
                       
                       
	                        <button class="btn btn-success" id="register"> <span class="fa fa-sign-in"></span>&nbsp; Register</button><br>
                            <!--<a href="<?php echo base_url();?>reset/pass" class=" " target="_blank">Forgot password?</a>-->
	                    </form>
                
	</div>
</div>
</div>
</section>
<script>

$(document).ready(function() {
	
$("#register").click(function(q){	
	 q.preventDefault();
	 
   var name=$("#name").val();
   var phone=$("#phone").val();
   var address=$("#address").val();
   var email=$("#email").val();
     
         var password1=$("#password").val();
         var password2=$("#password2").val();
		// var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //email validation check
		 var pattern = /^\b[A-Z0-9._%-]+@[A-Z0-9.-]+\.[A-Z]{2,4}\b$/i;
		var emailcheck=email.match(pattern);
	    
		
		 
		 if(name==""){
			  	
			  $("#message").html("Please enter your  name ");
			
			
		}
		  
		  
		
		
		else if(email==""){
			 $("#message").html("Please enter email ");
		   	
			
		}
		
		else if(emailcheck==null){
		   	 $("#message").html("Please enter a valid email address ");
			
		}
 
         else if(phone==""){
		   	 $("#message").html("Please enter your phone number");
		}
		
	       else if(password1==""){
		   	 $("#message").html("Please enter your password ");
			
		} 
		
		 else if(password2==""){
		   	 $("#message").html("Please enter your confirmation password ");
			
		} 
		
		 else if(password1!==password2){
		   	 $("#message").html("Your passwords do not match ");
			
		}    
		  else{
		  
		  var data = $("#register-form").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "<?php echo base_url();?>index.php/process/register",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			$("#message").html("");
			  $("#success").html("Registration sucessful proceed to login");
			  
			$("#register").html('Registration successful ...');
      //setTimeout(' window.location.href = "dashboard.php"; ',4000);
			 
			}
			else {
			
			 $("#message").html(data);
			  $("#register").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Registration  Failed!');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#register").html('Sending ...');
		   }
		  });
		return false;
		
		  }// end of else statement braces 
	});
	
	//registration ends here
	
	}); 
</script>