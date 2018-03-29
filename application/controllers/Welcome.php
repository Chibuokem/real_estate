<?php session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		//load database connection
		require_once('connection.php');
	    $this->load->model('property');
		$property_class = new Property();
		 
		$response=$property_class->get_properties_home_page($this->db);
		if($response == false){
		$data['property']="";	
		}
		else{
		$data['property']=$response;	
		}
		$this->load->view('pages/head');
		$this->load->view('pages/content_index',$data);
		$this->load->view('pages/footer');
		
	}
}
