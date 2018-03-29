
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
				
                
                <div id="errorr" style="color:red; font-weight:bold;"></div>
                <div id="success" style="color:green; font-weight:bold;">
                        <!-- error will be shown here ! -->
                        </div>
	                    <h4 style=" font-weight:bold;" class="box-title text-center ">BUILD HOUSE REQUEST</h4>
				<form id='request-form' >
					 <div class="form-group">
						<input type="text" name='name'  placeholder='Name' id='name'  class="form-control">
                        </div>
                        <div class="form-group">
						
                        <input type="text" name='email'  class="form-control" placeholder='Email' id='email'></div>
                        <div class="form-group">
						<input type="text" class="form-control" name='phone' placeholder='Phone' id='phone'>
					</div>
                     <div class="form-group">
						<input type="text" class="form-control" name='address' placeholder='Contact Address' id='address'>
					</div>
                     <div class="form-group">
						<input type="text"  class="form-control" name='occupation' placeholder='Occupation' id='occupation'>
					</div>
                    <div class="form-group">
				<select  id='building_type' class="form-control" name="building_type">
					<option value="BUILDING TYPE">BUILDING TYPE</option>
					<option value="duplex">Duplex</option>
					<option value="bungalow">Bungalow </option>
					<option value="One_story">One story</option>
					<option value="two_story">Two story</option>
					<option value="three_story">Three story</option>
					
				</select>
			</div>
             <div class="form-group">
				<select id='bedroom_number' name='bedroom_number' class="form-control">
					<option value="BEDROOM NUMBER">BEDROOM NUMBER</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
				</select>
			</div>
					 <div class="form-group">
				<select  id='website'  class="form-control" id="bathroom_number" name="bathroom_number">
					<option value="BATHROOM NUMBER">BATHROOM NUMBER</option>
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
				</select>
			</div>
                    <div class="form-group">
						<textarea id="message" name='message' placeholder='Additional Info'  class="form-control"></textarea>
					
					</div>
				</form>
                         <button class="btn btn-primary" id="btn-message" > <span class="glyphicon glyphicon-transfer"></span>&nbsp; Send Message</button>
                
	</div>
</div>
</div>
</section>
<script type="text/javascript">
$(document).ready(function() {


 $("#btn-message").click(function(q){	
	 q.preventDefault();
	 
		var message=$("#message").val();
		var bathroom_number=$("#bathroom_number").val();
		 var bedroom_number=$("#bedroom_number").val()
		 var phone=$("#phone").val()
		 var building_type=$("#building_type").val();
		 var occupation=$("occupation").val();
		 var address=$("address").val();
		 var email=$("email").val();
		 var name=$("name").val();
		 
		 if(name==""){
		   	 $("#errorr").html("Please enter your name ");
			
		}
		 
		  else if(message==""){
		   	 $("#errorr").html("Please enter your  Message ");
			
		}
		  
		else if (bathroom_number==""){
		   	 $("#errorr").html("Please choose bathroom number ");
			
		}
		  else if (bedroom_number==""){
		   	 $("#errorr").html("Please choose bedroom number ");
			
		}
		
		 else if (building_type==""){
		   	 $("#errorr").html("Please choose building type ");
			
		}
		 
		  else if (occupation==""){
		   	 $("#errorr").html("Please enter occupation ");
			
		}
		
		 else if (address==""){
		   	 $("#errorr").html("Please enter your address ");
			
		}
		
		
		
		 else if (email==""){
		   	 $("#errorr").html("Please enter your email ");
			
		}
		  else if (phone==""){
		   	 $("#errorr").html("Please enter phone number ");
			
		}
		  
		  else{
		  
		  var data = $("#request-form").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "<?php echo base_url();?>index.php/process/make_request",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			 $("#success").html('Request sent you will be Contacted soon');
			$("#btn-message").html('Message sent ');
     		 
			}
			
			else    {
			
			 $("#errorr").html(data);
			  $("#btn-message").html('Sending Failed!');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#btn-message").html('<span class="glyphicon glyphicon-transfer"></span> Sending ...');
		   }
		  });
		return false;
		
		  }// end of else statement braces 
	});
	
	}); 
	
	// make enquiry
	
</script>