// JavaScript Document
$(document).ready(function() {
	
	 $("#btn-login").click(function(q){	
	 q.preventDefault();
	 
		var emaill=$("#email").val();
		var passwordd=$("#password").val()
		 var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //email validation check
		 var emailcheck=emaill.match(pattern);
		 var passwordd=$("#password").val();
		 
		 if(emaill==""){
		   	 $("#errorr").html("Please enter email ");
			
		}
		  
		  
		 else if(emailcheck==null){
		   	 $("#errorr").html("Please enter a valid email address ");
			
		}
		  
		  else if (passwordd==""){
			
			   $("#errorr").html("Please enter password ");
		  }
		  
		  else{
		  
		  var data = $("#login-form").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "login_new.php",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			  $("#errorr").html("Signing in...");
			
      setTimeout(' window.location.href = "../user/"; ',4000);
			 
			}
			else    {
			
			 $("#errorr").html(data);
			  $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Login Failed!');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
		   }
		  });
		return false;
		
		  }// end of else statement braces 
	});
	
	
	
	
	
	//confirm password
	$("#password2").blur(function(){
		
		var passs1=$("#password1").val();
		var passs2=$("#password2").val();
		
		
		
		
		
			$.post("password_validation.php", {pass1: passs1,pass2:passs2} ,{})
			.done(function(data){
				
					
					$("#confirmpassword").html(data);
				
			});
	
	}); //confirm password ends here 
	
	
	
	
	
	//registration starts here 
	
	 $("#register").click(function(q){	
	 q.preventDefault();
	 var telephonee=$('#form-number').val();
	var numbermatch=/\d{11}/;
	var numbercheck=telephonee.match(numbermatch);
	 
		var emaill=$("#form-email").val();
		var passwordd=$("#password1").val();
		 var pattern = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //email validation check
		 var emailcheck=emaill.match(pattern);
	      var bank=$("#bank").val();
		  var account_number=$("#account_number").val();
		  var account_name=$("#account_name").val();
		  
		  var telephonee=$('#form-number').val();
	      var numbermatch=/\d{11}/;
	    var numbercheck=telephonee.match(numbermatch);
		 
		 if(emaill==""){
		   	 $("#regerrors").html("Please enter email ");
			
		}
		 else if(numbercheck==null){
			 $("#regerrors").html("Please enter valid phone number ");
		}
		else if(account_number==""){
		   	 $("#regerrors").html("Please enter account number  ");
			
		}
		else if(account_name==""){
		   	 $("#regerrors").html("Please enter account name  ");
			
		}
		else if(bank==""){
		   	 $("#regerrors").html("Please enter bank name  ");
			
		}
		  
		 else if(emailcheck==null){
		   	 $("#regerrors").html("Please enter a valid email address ");
			
		}
		  
		  else{
		  
		  var data = $("#register-form").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "register_new.php",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			  $("#regerrors").html("Registration sucessful! click on <a href='login.php'>login </a> to continue ");
			$("#register").html('Registration successful ...');
      //setTimeout(' window.location.href = "dashboard.php"; ',4000);
			 
			}
			else    {
			
			 $("#regerrors").html(data);
			
			  $("#register").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; Registration  Failed!');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#register").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; sending ...');
		   }
		  });
		return false;
		
		  }// end of else statement braces 
	});
	
	//registration ends here 
	
	
	
	//profile update starts here 
	
	
}); //document ready closes here 


