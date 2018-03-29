
<!-- Services-Section -->
<div class="services-section">
<section id="about">
	<div class="container">
		<div class="title-box">
			<!--<h3 class="text-center">Real Estate Management</h3>-->
			<div class="bordered">
            
			</div>
		</div>
        
        
        <div class="row listings-items-wrapper">
        
        
                 <?php  if( !empty($property)){ ?>
        		<div class="col-md-12 listing-single-item">
				<div class="item-inner">
					<div class="image-wrapper">
			          <img src="<?php echo base_url();?>uploads/<?php echo $property['picture_new']; ?>" alt="gallery ">
						<a href="#" class='fa fa-home property-type-icon'></a>
						<a href="#" class='featured'><i class='fa fa-star'></i>featured</a>
					</div>
					<div class="desc-box">
			<h2><?php echo $property['bedroom_number']; ?> Bedroom <?php echo $property['property_type']; ?> for sale</h2>
				<p>
					<?php echo $property['property_location']; ?>
				</p>
						<ul class="slide-item-features item-features">
		<li><span class="fa fa-arrows-alt"></span>Staus: <?php if ($property['status']==0){ echo "Not available"; } else{ echo "Available"; }?></li>
							<li><span class="fa fa-male"></span><?php echo $property['bathroom_number']; ?> bathrooms</li>
							<li><span class="fa fa-inbox"></span><?php echo $property['bedroom_number']; ?> bedrooms</li>
						</ul>
						<div class="buttons-wrapper">
							<a href="#" class="yellow-btn">&#8358;<?php echo $property['price']; ?></a>
							<a  href="#" class="gray-btn"><i class="fa fa-phone"></i> <?php echo $property['phone']; ?></a>
                     
						</div>
                       
						<div class="clearfix">
						</div>
					</div>
				</div>
			</div>
            
        <?php } ?>
        </div>
        
		<div class="services-wrapper single-service">
                <div class="col-md-12" >
				<h2 class="text-center" style="font-weight:bold; color:blue;">Make Enquiry </h2>
                
                <div id="errorr" style="color:red; font-weight:bold;"></div>
                <div id="success" style="color:green; font-weight:bold;">
                        <!-- error will be shown here ! -->
                        </div>
	                    <form role="form" action="" method="post" class="form-group" id="enquiry-form" >
	                    	
	                    		
	                        	<input type="hidden" name="customer_id" value="<?php echo $_SESSION['id'];?>" >
	                       <input type="hidden" name="property_id" value="<?php echo $property_id;?>" >
	                        <div class="form-group">
	                        	<label class="sr-only" for="message">Comment</label>
	                        	<textarea type="text" name="message" placeholder="Enter Message" class=" form-control" id="message" required></textarea>
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
		
		 
		 if(message==""){
		   	 $("#errorr").html("Please enter your  Message ");
			
		}
		  
		
		  
		  else{
		  
		  var data = $("#enquiry-form").serialize();
		  $.ajax({
		   type: "POST",
		  
		   url: "<?php echo base_url();?>index.php/process/send_enquiry",
		   data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
			 $("#success").html('Message sent you will be Contacted soon');
			$("#btn-message").html('Message sent ');
     		 
			}
			
			else    {
			
			 $("#errorr").html(data);
			  $("btn-message").html('Sending Failed!');

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