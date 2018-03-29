<?php session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Make_enquiry extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * 
	 */
	public function index()
	{
		//if not logged in redirect to home page
		 if(!isset($_SESSION['id'])){
			$location=base_url();
			redirect($location);
		}
		$this->load->helper(array('form'));
		//get property id
	    $property_id=$this->input->get('id');
		
		//if property id is not setb rediredt to home page
	  if(empty($property_id)){
		  $location=base_url();
			redirect($location);
	  }
	  
	  require_once('connection.php');
	    $this->load->model('property');
		$property_class = new Property();
		 
		$response=$property_class->get_data_from_id($property_id,$this->db);
		if($response == false){
		$data['property']="";	
		}
		else{
		$data['property']=$response;	
		}
	  
	  $data['property_id']=$property_id;
		$this->load->view('pages/head');
		$this->load->view('pages/content_enquiry',$data);
		$this->load->view('pages/footer');
		
	}
}
