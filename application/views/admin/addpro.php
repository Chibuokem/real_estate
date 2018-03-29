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
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin : Home</title>
<style type="text/css">
body {
	background-image: url();
}
</style>
</head>

<body>
<!--<p class="myClass" id="myDiv">-->
<div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper mynav1">
       <a href="admin.php" class="brand-logo logosize">REAL ESTATE MANAGEMENT SYSTEM ADMIN PAGE</a>
      <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
       <li><a href="<?php echo base_url();?>index.php/admin">ADD PROPERTY</a></li>
        <li><a href="<?php echo base_url();?>index.php/admin/enquiries">ENQUIRIES</a></li>
        <li><a href="<?php echo base_url();?>index.php/admin/requests">REQUESTS</a></li>
        <li><a  href="<?php echo base_url();?>index.php/logout">LOGOUT</a></li>
        
       
      </ul>
      <ul class="side-nav grey darken-3" id="mobile-demo">
       <li><a href="<?php echo base_url();?>index.php/admin">ADD PROPERTY</a></li>
        <li><a href="<?php echo base_url();?>index.php/admin/enquiries">ENQUIRIES</a></li>
        <li><a href="<?php echo base_url();?>index.php/requests">REQUESTS</a></li>
        <li><a  href="<?php echo base_url();?>index.php/logout">LOGOUT</a></li>
       
        
      </ul>
    </div>
  </nav>
</div> 
  
      


     
   
     
      <h4 class="center" style="color:#424242 !important; font-weight:bold;">ADD PROPERTY</h4>
        <!--<div class="input-field col s6">
        <i class="material-icons prefix wp">account_circle</i>
          <input  id="first_name" type="text" class="validate wp" required/>
          <label for="first_name">Full Name *</label>
        </div>-->
        <h5 id="regerrors" class="center" style="font-weight:bold; color:red;" ></h5>
        <h5 id="success" class="center" style="font-weight:bold; color:green;" ></h5>
        <div class="container">
        
        
        <form role="form" action="" method="post" class="login-form col s12" id="property-form">
         <div class="row">
    
                <div class="col s12 m6">
                
                    <div class="file-field input-field">
                                      <div class="btn">
                                         <span>Property Image</span>
                                        <input type="file"    name='files' id='multiFiles' >
                                      </div>
                                      <div class="file-path-wrapper">
                                        <input class="file-path validate fanBLAK" type="text" name='files' id='multiFiles' style="color:blue;">
                                      </div>
                                    </div>
                
                
                        
                 </div> 
             
       
  
                 <div class="col s12 m6">
                                <div class="input-field col s12 m6 l6">
                                  <i class="material-icons prefix">mode_edit</i>
                                  <textarea id="property_type" class="materialize-textarea fanBLAK" name="property_type"></textarea>
                                  <label for="property_type">Property Type</label>
                                </div>
                    </div>
     </div>
     
     
                 <div class="row">
                         <div class="col s12 m6">
                            <div class="input-field col s12 m6 l6">
                              <i class="material-icons prefix">mode_edit</i>
                              <textarea id="price" name="price" class="materialize-textarea fanBLAK" ></textarea>
                              <label for="price">Price</label>
                            </div>
                      </div>
            
              
           
            
                          <div class="col s12 m6">
                                <div class="col s12 m6">
                                 
                                  	<select class="browser-default fanBLAK" name="property_location" id="property_location" >
                                            <option value="" selected="selected">Location </option> 
                                                  <option value="Abuja FCT">Abuja FCT</option>
                                                  <option value="Abia">Abia</option>
                                                  <option value="Adamawa">Adamawa</option>
                                                  <option value="Akwa Ibom">Akwa Ibom</option>
                                                  <option value="Anambra">Anambra</option>
                                                  <option value="Bauchi">Bauchi</option>
                                                  <option value="Bayelsa">Bayelsa</option>
                                                  <option value="Benue">Benue</option>
                                                  <option value="Borno">Borno</option>
                                                  <option value="Cross River">Cross River</option>
                                                  <option value="Delta">Delta</option>
                                                  <option value="Ebonyi">Ebonyi</option>
                                                  <option value="Edo">Edo</option>
                                                  <option value="Ekiti">Ekiti</option>
                                                  <option value="Enugu">Enugu</option>
                                                  <option value="Gombe">Gombe</option>
                                                  <option value="Imo">Imo</option>
                                                  <option value="Jigawa">Jigawa</option>
                                                  <option value="Kaduna">Kaduna</option>
                                                  <option value="Kano">Kano</option>
                                                  <option value="Katsina">Katsina</option>
                                                  <option value="Kebbi">Kebbi</option>
                                                  <option value="Kogi">Kogi</option>
                                                  <option value="Kwara">Kwara</option>
                                                  <option value="Lagos">Lagos</option>
                                                  <option value="Nassarawa">Nassarawa</option>
                                                  <option value="Niger">Niger</option>
                                                  <option value="Ogun">Ogun</option>
                                                  <option value="Ondo">Ondo</option>
                                                  <option value="Osun">Osun</option>
                                                  <option value="Oyo">Oyo</option>
                                                  <option value="Plateau">Plateau</option>
                                                  <option value="Rivers">Rivers</option>
                                                  <option value="Sokoto">Sokoto</option>
                                                  <option value="Taraba">Taraba</option>
                                                  <option value="Yobe">Yobe</option>
                                                  <option value="Zamfara">Zamfara</option>
                                            </select>
                                 
                                </div>
                          </div>
                      
                 </div>
                 
       
                       <div class="row">
                              
                           <div class="col s12 m6">
                                <label>Bedroom Number</label>
                                <select class="browser-default fanBLAK" name="bedroom_number" id="bedroom_number">
                                  <option value="0" disabled selected>Bedroom Number</option>
                                  <option value="1"> 1</option>
                                  <option value="2"> 2</option>
                                  <option value="3"> 3</option>
                                  <option value="5"> 5</option>
                                  <option value="6"> 6</option>
                                </select>
                           </div>
                       
                    
                     
                    
                                    <div class="col s12 m6">
                                        <label>Bathroom Number</label>
                                        <select class="browser-default fanBLAK" name="bathroom_number">
                                          <option value="0" disabled selected>Bathroom Number</option>
                                          <option value="1"> 1</option>
                                          <option value="2"> 2</option>
                                          <option value="3"> 3</option>
                                          <option value="4"> 4</option>
                                          <option value="5"> 5</option>
                                          <option value="6"> 6</option>
                                        </select>
                                   </div>
                           </div>    
       
                 
                     
                       <div class="row">
                   
                      
                                <div class="input-field col s12 m6">
                                  <i class="material-icons prefix">mode_edit</i>
                                  <textarea id="phone" name="phone" class="materialize-textarea fanBLAK"></textarea>
                                  <label for="phone">Phone Number</label>
                               </div>
                       
                        
                         <div class="col s12 m6">
                                        <label>Nature</label>
                                        <select class="browser-default fanBLAK" name="nature" id="nature">
                                          <option value="0" disabled selected>Nature</option>
                                          <option value="Rent"> Rent</option>
                                          <option value="Sale"> Sale</option>
                                          
                                        </select>
                                   </div>  
                                </div>     
                </form>
 
 
             <button class="btn btn-large  waves-effect waves-light" id="upload">Add Property 
              </button>

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
            © 2017 Copyright Real Estate Management System 
</div>
            <a class="grey-text text-lighten-4 right " href="#!"></a>
            </div>
        </footer>
       
<script>
$( document ).ready(function(){
	
	//alert('hi');
	 $("#upload").click(function(q){	
	 q.preventDefault();
	// alert('hi'); 
	
		var form_data = new FormData();
		// var data = $("#add_form").serialize();
		var property_type=$("#property_type").val();
		var price =$("#price").val();
		var property_location =$("#property_location").val();
		var phone =$("#phone").val();
		var bedroom_number=$("#bedroom_number").val();
		var bathroom_number=$("#bedroom_number").val();
		var nature=$("#nature").val();
		if( property_type==""){
			
			 $("#regerrors").html("Enter property type");
		}
		else if( price==""){
			
			 $("#regerrors").html("Enter price");
		}
		
		else if(property_location==""){
			
			 $("#regerrors").html("Enter property Location");
		}
		else if(phone==""){
			
			 $("#regerrors").html("Enter phone Number");
		}
		else if(bedroom_number=="0"){
			
			 $("#regerrors").html("Enter bedroom Number");
		}
		else if(nature=="0"){
			
			 $("#regerrors").html("Please choose the nature, if for rent or for sale");
		}
		else if(bathroom_number=="0"){
			
			 $("#regerrors").html("Enter bathroom Number");
		}
		
		else{
          
          var ins = document.getElementById('multiFiles').files.length;
            for (var x = 0; x < ins; x++) {
         form_data.append("files[]", document.getElementById('multiFiles').files[x]);
                }
		  form_data.append("property_type",property_type);
		   form_data.append("price",price);
		   form_data.append("property_location",property_location);
		    form_data.append("phone",phone);
		   form_data.append("bedroom_number",bedroom_number);
		   form_data.append("bathroom_number",bathroom_number);
		    form_data.append("nature",nature);
		  $.ajax({
		   type: "POST",
		  
		   url: "<?php echo base_url();?>/index.php/process/add_property",
		   dataType: 'text', // what to expect back from the PHP script
            cache: false,
            contentType: false,
            processData: false,
            data: form_data,
		   //data : data,
			  
		   success: function(data){
			  
			if (data==true)    {
				
			  $("#success").html("Upload successful");
			$("#upload").html('Uploaded');
      //setTimeout(' window.location.href = "dashboard.php"; ',4000);
			 //new ajax call
			                                
			 //new ajax call ends here 
			}
			else    {
				//alert(data);
			
			 $("#regerrors").html(data);
			 //alert(data);
			  $("#upload").html('Upload failed!');

			}
		   },
		   beforeSend:function()
		   {
			/* $("#errorr").fadeOut();*/
    $("#upload").html('Uploading ...');
		   }
		  });
		  
		return false;
	}
		
		
		
		  
	});
	
	 
	
	});	
</script>
</body>
</html>
