<!-- Recent-Listings-Section -->
<div class="recent-listings">
<section id="recent">
	<div class="container">
		<div class="title-box">
			<h3>Properties</h3>
			<div class="bordered">
			</div>
		</div>
		<div class="row listings-items-wrapper">
        
        
                                        <?php 
										 //check if property lists  is empty
										 if( !empty($property)){ ?>
        
                                    
                                    
                                      <?php 
										
                                         $no_property=count($property['id']);
										 ?>
			                   <?php 
                                for ($i = 0; $i < $no_property; $i++){
                                    
                                    ?>
                                           
			<div class="col-md-4 listing-single-item">
				<div class="item-inner">
					<div class="image-wrapper">
				<img src="<?php echo base_url();?>uploads/<?php echo $property['picture_new'][$i]; ?>" alt="gallery">
						<a href="#" class='fa fa-home property-type-icon'></a>
						<a href="#" class='featured'><i class='fa fa-star'></i>featured</a>
					</div>
					<div class="desc-box">
			<h2><?php echo $property['bedroom_number'][$i]; ?> Bedroom <?php echo $property['property_type'][$i]; ?> for sale</h2>
				<p>
					<?php echo $property['property_location'][$i]; ?>
				</p>
						<ul class="slide-item-features item-features">
		<li><span class="fa fa-arrows-alt"></span>Staus: <?php if ($property['status'][$i]==0){ echo "Not available"; } else{ echo "Available"; }?></li>
							<li><span class="fa fa-male"></span><?php echo $property['bathroom_number'][$i]; ?> bathrooms</li>
							<li><span class="fa fa-inbox"></span><?php echo $property['bedroom_number'][$i]; ?> bedrooms</li>
                            <li><span class="fa fa-inbox"></span>For <?php echo "".$property['nature'][$i]; ?> </li>
						</ul>
						<div class="buttons-wrapper">
							<a href="#" class="yellow-btn">&#8358;<?php echo $property['price'][$i]; ?></a>
							<a  href="#" class="gray-btn"><i class="fa fa-phone"></i> <?php echo $property['phone'][$i]; ?></a>
                     
						</div>
             <button class="btn btn-info" onClick="enquiry(<?php echo $property['id'][$i]; ?>)">Request</button>
						<div class="clearfix">
						</div>
					</div>
				</div>
			</div>
			
            <?php } } else{ ?>
           
            
            <div class="alert  alert-info"><h3 class="text-center">No properties available</h3> </div>
            
            <?php } ?>
		</div>
	</div>
</div>
</section>
<!-- Agents-Section -->
<div class="agents-section">
<section id="agent">
	<div class="container">
		<div class="title-box">
			<h3>our agents</h3>
			<div class="bordered">
			</div>
		</div>
		<div class="owl-carousel agents-slider">
			<div class="single-agent">
				<div class="image-box">
					<img src="<?php echo base_url();?>img/agents/08_agent-photo1.png" alt="agent">
					
				</div>
				<div class="desc-box">
					<h4>Ibezim Chibuokem</h4>
					<p class="person-number">
						<i class="fa fa-phone"></i> 900 123 456 789
					</p>
					<p class="person-email">
						<i class="fa fa-envelope"></i> robbhatman@sweethome.com
					</p>
					<p class="person-fax">
						<i class="fa fa-print"></i> 900 123 456 789
					</p>
			
				</div>
			</div>
			<div class="single-agent">
				<div class="image-box">
					<img src="<?php  echo base_url();?>img/agents/09_agent-photo2.png" alt="agent">
					
				</div>
				<div class="desc-box">
					<h4>Ezeoha Franklin</h4>
					<p class="person-number">
						<i class="fa fa-phone"></i> 900 123 456 789
					</p>
					<p class="person-email">
						<i class="fa fa-envelope"></i> robbhatman@sweethome.com
					</p>
					<p class="person-fax">
						<i class="fa fa-print"></i> 900 123 456 789
					</p>
			
				</div>
			</div>
			<div class="single-agent">
				<div class="image-box">
					<img src="<?php echo base_url();?>img/agents/08_agent-photo1.png" alt="agent">
					
				</div>
				<div class="desc-box">
					<h4>Robb Hatman</h4>
					<p class="person-number">
						<i class="fa fa-phone"></i> 900 123 456 789
					</p>
					<p class="person-email">
						<i class="fa fa-envelope"></i> robbhatman@sweethome.com
					</p>
					<p class="person-fax">
						<i class="fa fa-print"></i> 900 123 456 789
					</p>
			
				</div>
			</div>
			<div class="single-agent">
				<div class="image-box">
					<img src="<?php echo base_url();?>img/agents/09_agent-photo2.png" alt="agent">
					
				</div>
				<div class="desc-box">
					<h4>Robb Hatman</h4>
					<p class="person-number">
						<i class="fa fa-phone"></i> 900 123 456 789
					</p>
					<p class="person-email">
						<i class="fa fa-envelope"></i> robbhatman@sweethome.com
					</p>
					<p class="person-fax">
						<i class="fa fa-print"></i> 900 123 456 789
					</p>
			
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<!-- Services-Section -->
<div class="services-section">
<section id="about">
	<div class="container">
		<div class="title-box">
			<h3>About Project</h3>
			<div class="bordered">
            
			</div>
		</div>
		<div class="services-wrapper single-service">
                <div class="col-md-12">
				<p style="font-size:20px; font-family:David;">Event Management System is very helpful for planning how to create sucessfully organize a function. In order to organize a event work is important and work alloted to each member managed by this system. The project gives basic functionality required for an event. It allows the customer to select from a list of event types. Then customer enters an event like Marriage, birthdays etc, the system then allows the customer to select the date and time of event, place and the event equipment's. All this data is logged in the database.This data is then sent to the organizer and they may interact with the customer as per his requirements and his contact data stored in the database.Many customer know of event management that mainly handles concerts and weddings. But there are many other occasions that either require or could benefit from event management, including: conventions, business meetings, sports events et. Many companies use this system firms to coordinate their important meetings, conclaves and other event. </p>
                
	</div>
</div>
</div>
</section>
<script>
function enquiry(u){
	
	var idd=u;
	var location="<?php echo base_url();?>index.php/make_enquiry?id="+idd;
	
		$.post("<?php echo base_url();?>index.php/process/login_state", {id: "nothing"} ,{})
			.done(function(data){
				//check login state of the user..if he is logged in take him to the enquiry page if not prompt him to login
				        if(data==true){
							
							window.location=location;
						
						}
				      else{
						 
						alert("Please Login to make enquiry"); 
					 }
			});
	
}
</script>