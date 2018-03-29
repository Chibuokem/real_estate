<?php session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    //admin login controller 
	public function Login()
	{
		
		
		$this->load->view('admin/login');
		
	}
	
	//admin index page
	public function index()
	{
		
		
		$this->load->view('admin/addpro');
		
	}
	
	           public function enquiries(){
		       //get all enquiries
		       $this->load->model('enquiry');
		       $enquiry_class = new Enquiry();
		       //load the member class
	            $this->load->model('member');
				 //instantate the member class
		        $member_class=new Member(); 
				 
				 $this->load->model('property');
				$property_class = new Property(); 
		   require_once('connection.php');
		   $response = $enquiry_class->get_enquiries($this->db);
				   if($response==false){
					$data['enquiry']="";   
				   }
			   else{
				   $data['enquiry']=$response;
				$no_id = count($response['id']);
				for ($j = 0; $j < $no_id; $j++) {
				$data['customer'][$j]=$member_class->get_data_from_id($response['customer_id'][$j],$this->db);
				$data['property'][$j]=$property_class->get_data_from_id($response['property_id'][$j],$this->db);
				
				$this->load->view('admin/enquiries',$data);
				
					
					
				  }
			  
			     
		   }
		
	}
	
	
	
	        public function requests(){
		      //get all requests
		       $this->load->model('request');
		       $request_class = new Request();
			   //connect to database
			     require_once('connection.php'); 
		      $response = $request_class->get_requests($this->db);
			  if($response==false){
				$data['requests']="";  
			  }
			  
			  else{
				  $data['requests']=$response;
			  }
			  
			$this->load->view('admin/requests',$data);  
	   }
	
	
}
