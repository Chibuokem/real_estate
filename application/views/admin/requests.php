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
        <li><a href="<?php echo base_url();?>index.php/admin/requests">REQUESTS</a></li>
        <li><a  href="<?php echo base_url();?>index.php/logout">LOGOUT</a></li>
       
        
      </ul>
    </div>
  </nav>
</div> 
  
      


     
   
     
      <h4 class="center" style="color:#424242 !important; font-weight:bold;">ENQUIRIES</h4> 
					<table class="table responsive-table bordered ">
				  
						<tbody>
							<tr class="">
								<th>S/N:</th>
								<th>Customer Name:</th>
								<th>Customer Email:</th>
								<th>Customer Phone:</th>
                                <th>Customer Occupation:</th>
                                 <th>Customer address:</th>
								<th>Message:</th>
								<th>Building type:</th>
								<th>Sent by :</th>
                               
                           
						</tr>
							
							<?php
							$num = count($requests['id']);
							if ($num > 0) {
								
								
								   for ($i = 0; $i < $num; $i++) { 
									
							?>
									   <tr>
										<td><?php echo $requests['id'][$i]; ?></td>
										<td><?php echo $requests['name'][$i]; ?></td>
										<td><?php echo $requests['email'][$i]; ?></td>
										<td><?php echo $requests['phone'][$i]; ?></td>
                                        <td><?php echo $requests['occupation'][$i]; ?></td>
                                         <td><?php echo $requests['address'][$i]; ?></td>
										<td><?php echo $requests['message'][$i]; ?></td>
										<td><?php echo $requests['building_type'][$i]; ?></td>
                                        <td><?php echo $requests['timee'][$i]; ?></td>
                                        
									</tr>
							<?php	
									
								}
							} 
							?>

						</tbody>
					</table>
				
       
       
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
       

</body>
</html>
