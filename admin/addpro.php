<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
		<!--Import Google Icon Font-->
<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
 		<!--Import materialize.css-->
 <link type="text/css" rel="stylesheet" href="materialize/css/materialize.css" media="screen,projection"/> 
		<!--Let browser know website is optimized for mobile--> 
<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
 		<!--Import jQuery before materialize.js--> 
<script type="text/javascript" src="materialize/js/jquery-2.1.3.min.js"></script> 
<script type="text/javascript" src="materialize/js/materialize.js"></script>

<script type="text/javascript" src="script.js"></script>


<link href="temp.css" rel="stylesheet" type="text/css" />
<link href="responsive.css" rel="stylesheet" type="text/css" />
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
       <li><a href="addpro.php">ADD PROPERTY</a></li>
        <li><a href="addag.php">ADD AGENT</a></li>
        <li><a href="">VIEW REQUESTS</a></li>
        <li><a href="#">LOGOUT</a></li>
        <li><a href="#"></a></li>
       
      </ul>
      <ul class="side-nav grey darken-3" id="mobile-demo">
       <li><a href="addpro.php">ADD PROPERTY</a></li>
        <li><a href="addag.php">ADD AGENT</a></li>
        <li><a href="">VIEW REQUESTS</a></li>
        <li><a href="#">LOGOUT</a></li>
        <li><a href="#"></a></li>
       
        
      </ul>
    </div>
  </nav>
</div> 
  <div class="row"> 
<div class="col s12 m6 l3 ">.</div>
<div class="col s12 m6 l6 fom">
<div class="col s12 m6 l4 fom1"><h4 style="color:#424242 !important; font-weight:bold;">ADD PROPERTY</h4></div>
 
   
      <div class="row">
        <!--<div class="input-field col s6">
        <i class="material-icons prefix wp">account_circle</i>
          <input  id="first_name" type="text" class="validate wp" required/>
          <label for="first_name">Full Name *</label>
        </div>-->
        <form role="form" action="" method="post" class="login-form col s12" id="register-form">
      <div class="row">
        <!--<div class="input-field col s6">
        <i class="material-icons prefix wp">account_circle</i>
          <input  id="first_name" type="text" class="validate wp" required/>
          <label for="first_name">Full Name *</label>
        </div>-->
        <div class="file-field input-field">
      <div class="btn">
        <span>Property Image</span>
        <input type="file">
      </div>
      <div class="file-path-wrapper ">
        <input class="file-path validate " type="text">
      </div>
    </div>
    <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" class="materialize-textarea fanBLAK"></textarea>
          <label for="icon_prefix2">Property Type</label>
        </div>
      </div>
      <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" class="materialize-textarea fanBLAK"></textarea>
          <label for="icon_prefix2">Price</label>
        </div>
      </div>
   <div class="row">
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" class="materialize-textarea fanBLAK"></textarea>
          <label for="icon_prefix2">Property Location</label>
        </div>
      </div>
       <div class=" col s12">
    <label>Bedroom Number</label>
    <select class="browser-default fanBLAK">
      <option value=" " disabled selected>Choose your option</option>
      <option value="1"> 1</option>
      <option value="2"> 2</option>
      <option value="3"> 3</option>
      <option value="5"> 5</option>
      <option value="6"> 6</option>
    </select>
       </div>
        </div>
      <div class=" col s12">
    <label>Bathroom Number</label>
    <select class="browser-default fanBLAK">
      <option value="" disabled selected>Choose your option</option>
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
    <form class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <i class="material-icons prefix">mode_edit</i>
          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
          <label for="icon_prefix2">Phone Number</label>
       

  </div>
</div>
 <button class="btn waves-effect waves-light" type="submit" name="action">Post Now
  </button>
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
            © 2017 Copyright Real Estate Management System 
</div>
            <a class="grey-text text-lighten-4 right " href="#!"></a>
            </div>
        </footer>
        <script src='jquery-3.1.1.min.js'></script>
<script src="project.js" type="text/javascript"></script>
</body>
</html>
