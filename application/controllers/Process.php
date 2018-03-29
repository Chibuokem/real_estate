<?php session_start(); 
defined('BASEPATH') OR exit('No direct script access allowed');
//process clas starts here
class Process extends CI_Controller {
	
	//registration method inside the process class
	public function register(){
		
		//load the url helper
	        $this->load->helper('url');
			//load the form helper
            $this->load->helper(array('form'));
			
			//get things from the post array
			$name=$this->input->post('name');
			$email=$this->input->post('email');
			$phone=$this->input->post('phone');
			$address=$this->input->post('address');
			$password=$this->input->post('password');
			if(empty($name)){
			die("Enter your name");	
			}
	             
				 //load the member class
	             $this->load->model('member');
				 //instantate the member class
		         $member_class=new Member(); 
				//loading the database connection
				require_once('connection.php');	
				
				$response = $member_class->register($name,$email,$phone,$address,$password,$this->db);
			if($response==true){
				die(true);
			}
			else{
			die($response);	
			}
	}
	
	
	//login method function 
	 public function login(){
	   //this function is responsible for login
	   //load url helper  
	    $this->load->helper('url');
		//load form helper
         $this->load->helper(array('form'));
		 //get email from post array
		 $email=$this->input->post('email');
		 //get password from post array
		$password = $this->input->post('password');
		
		//database connection
		require_once('connection.php');
			 
	    $this->load->model('member');
		$check = new Member(); 
		
		
		$result = $check->check($email,$password,$this->db);
		if($result == true){
		die(true);
			
		}
		else{
		die("Invalid email or password");	
		}		
	   
	 }
	 
	     public function add_property(){
		   //$this->load->helper('url');
		   //load form url helper 
         $this->load->helper(array('form'));
		 $price=$this->input->post('price');
		  $property_type=$this->input->post('property_type');
		   $property_location=$this->input->post('property_location');
		    $bedroom_number=$this->input->post('bedroom_number');
			$bathroom_number=$this->input->post('bathroom_number');
			$phone=$this->input->post('phone');
			$nature=$this->input->post('nature');
		
		 //print_r($_FILES);
		 if (isset($_FILES['files']) && !empty($_FILES['files'])) {
			 
		 $_FILES['file']['name'] = $_FILES['files']['name'][0];
                $_FILES['file']['type'] = $_FILES['files']['type'][0];
                $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][0];
                $_FILES['file']['error'] = $_FILES['files']['error'][0];
                $_FILES['file']['size'] = $_FILES['files']['size'][0];
			 
			   $config['upload_path']          = './uploads/';
                $config['allowed_types']        = 'gif|jpg|png';
                $config['max_size']             = 2000;
                $config['max_width']            =2000;
                $config['max_height']           = 2000;

                $this->load->library('upload', $config);
				//if ( ! $this->upload->do_upload('picture'))
				//$pic=$_FILES["files"]["name"][$i];
				if ( ! $this->upload->do_upload('file'))
                {
                        //$error = array('error' => $this->upload->display_errors());
						
						echo $this->upload->display_errors();
						//echo $error;
						
						die();		
							
						
           }
		   
		   
		  // $picture = $this->upload->data('full_path');
		  $picture = $this->upload->data('file_name');
		  $path = './uploads/'.$picture;
		  $picture_new = 'thumb_'.$picture;
		  //image processing class called here 
		     $config['image_library'] = 'gd2';
			$config['source_image'] = $path;
			$config['create_thumb'] = FALSE;
			$config['new_image'] = $picture_new;
			$config['maintain_ratio'] = TRUE;
			$config['width']         = 1600;
			$config['height']       = 800;
           $this->load->library('image_lib', $config);
		            if ( ! $this->image_lib->resize())
             {
                  echo $this->image_lib->display_errors();
				  die();
             }
			 
		   
		     $this->load->model('property');
		   $property_class = new Property();
		   require_once('connection.php');
		  
	 $response_property = $property_class->register($picture,$picture_new,$price,$property_type,$property_location,$bedroom_number,$bathroom_number,$phone,$nature,$this->db);
			if( $response_property==true){
			   die(true);	
			}
			else{
			die("error occured");	
			}
		    
		   
		 }
		 else{
			die("Please select a picture"); 
		 }
	 }

    
	public function send_enquiry(){
		 //this function is responsible for making request
	  
		//load form helper
         $this->load->helper(array('form'));
	
		 $customer_id=$this->input->post('customer_id');
		 //get id's from post array
		$property_id = $this->input->post('property_id');
			 //get message from post array
		$message = $this->input->post('message');
		//database connection
		require_once('connection.php');
			 
	    $this->load->model('enquiry');
		//instantiate the enquiry class
		$enquiry_class = new Enquiry(); 
		
		
		$result = $enquiry_class->send($customer_id,$property_id,$message,$this->db);
		if($result == true){
		die(true);
			
		}
		else{
		die("Error occured while sending message");	
		}	
		
		
	}
	
	
	
	public function make_request(){
	
		 //this function is responsible for making request
	  
		//load form helper
         $this->load->helper(array('form'));
		 //get values from post array
	     $name = $this->input->post('name');
		 $bathroom_number=$this->input->post('bathroom_number');
		 $phone=$this->input->post('phone');
		 $building_type=$this->input->post('building_type');
		$occupation=$this->input->post('occupation');
		$bedroom_number = $this->input->post('bedroom_number');
		$address = $this->input->post('address');
		$email = $this->input->post('email');
		
			 //get message from post array
		$message = $this->input->post('message');
		//database connection
		require_once('connection.php');
			 //load the request model
	    $this->load->model('request');
		//instantiate the request class
		$request_class = new Request(); 
		
		
		$result = $request_class->send($name ,$bathroom_number,$phone,$building_type,$occupation,$bedroom_number,$address,$email,$message,$this->db);
		if($result == true){
		die(true);
			
		}
		else{
		die("Error occured while sending request");	
		}	
		
		
	}
	   
	   
	public function login_state(){
		
		if(isset($_SESSION['id'])){
		die(true);
		}
		else{
		die(false);
		}
		
	}
	
	//process class ends here
	
	

}
?>