<?php session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {

	
	//logout function
	public function index(){
	$_SESSION['user_id'] = array();
  $location = base_url();
//destroy session
	session_destroy();
	//header("location:$location");	
	redirect($location);
	}
}
