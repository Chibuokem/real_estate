<?php session_start();
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {

	//function for getting search results
	public function index()
	{
		//get search parameteres
		 $this->load->helper(array('form'));
		 $nature=$this->input->get('nature');
		$property_location=$this->input->get('state');
		//load database connection
		require_once('connection.php');
	    $this->load->model('property');
		$property_class = new Property();
		 
		$response=$property_class->get_search_result($property_location,$nature,$this->db);
		if($response == false){
		$data['property']="";	
		}
		else{
		$data['property']=$response;	
		}
		$this->load->view('pages/head');
		$this->load->view('pages/content_search',$data);
		$this->load->view('pages/footer');
		
	}
}
