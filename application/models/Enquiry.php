<?php
class Enquiry extends CI_Model{
	
public $timee;
public $table;

  public function __construct(){
	
	$this->table = "enquiry";	
 date_default_timezone_set('Africa/Lagos');

}

  //finction to register a property..inserting it into the database
	public function send($customer_id,$property_id,$message,$db){
		
	
	
		$timee=date('Y-m-d H:i:s');
		$query="INSERT INTO ".$this->table."(customer_id,property_id,message,timee) VALUES(?,?,?,?)";
		//echo $db->error.$query;
		
			$statement = $db->prepare($query);
		
		$statement->bind_param("ssss",$customer_id,$property_id,$message,$timee);
		
	
	 
	 if ( $statement->execute() ){
		 
		 return true;
	 }
	 
	 else{
		
		//die($db->error);
		return false;
		
	 }
	               
		
	}

 //function to get all the enquiries 
 public function get_enquiries($db){
		if(!isset($_SESSION['id'])){
			$location=base_url();
			redirect($location);
		}
		
		$dataa=array();
		$i=0;
		
		$query = "SELECT * FROM ".$this->table." ORDER BY id DESC " ;
		
	 $result = $db->query($query);
	 $num = mysqli_num_rows($result);
	 if($num > 0)
	 {
	 
	  while( $row = mysqli_fetch_array($result)){
		 $dataa['id'][$i] = $row['id'];
		 $dataa['customer_id'][$i]= $row['customer_id'];
		 $dataa['property_id'][$i] = $row['property_id'];
		 $dataa['message'][$i]= $row['message'];
		  $dataa['timee'][$i]= $row['timee'];
			$i++;
	  }
	 return $dataa;
	}
	
	 else{
		//echo $db->error;
		return false; 
	
	 }		
	
}
      //function to get just details of a particular  enquiry
	public function get_data_from_id($id,$db){
		 
		  $query = "SELECT * FROM ".$this->table." WHERE id=? LIMIT 1";
		  $statement = $db->prepare($query);
		  $statement->bind_param("s",$id);
	 if ( $statement->execute() ){	 
		 $result = $statement->get_result();
		 $num = $result->num_rows;
		 
		 if($num > 0){
			  $row = $result->fetch_assoc();
			 
		 return $row;
		 }
		 else{
	
			return false; 
		 }
	 }
	 else{
		return false;
	 }
		  
	  }
	  
	  
	 
	  //update availablility status of a particular  property in the database 
	   public function update_status($id,$status,$db){
	   $query="UPDATE ".$this->table." SET status=? WHERE id=? LIMIT 1";
		$statement = $db->prepare($query);
		$statement->bind_param("ss",$status,$id);
	 
	 if ( $statement->execute() ){
		 return true;
	 }
	 
	 else{
		return false;
		
	 }
	   
	   
   }
   
  
    
	  
//enquiry class ends here 

}
?>