<?php
class Request extends CI_Model{
	
public $timee;
public $table;

  public function __construct(){
	
	$this->table = "request";	
 date_default_timezone_set('Africa/Lagos');

}

  //finction to register a property..inserting it into the database
	public function send($name,$bathroom_number,$phone,$building_type,$occupation,$bedroom_number,$address,$email,$message,$db){
		
		$timee=date('Y-m-d H:i:s');
		$query="INSERT INTO ".$this->table."(name ,bathroom_number,phone,building_type,occupation,bedroom_number,address,email,message,timee) VALUES(?,?,?,?,?,?,?,?,?,?)";
		//echo $db->error.$query;
		
			$statement = $db->prepare($query);
		 
		$statement->bind_param("ssssssssss",$name,$bathroom_number,$phone,$building_type,$occupation,$bedroom_number,$address,$email,$message,$timee);
		
	
	
	 if ( $statement->execute() ){
		 
		 return true;
	 }
	 
	 else{
		
		//die($db->error);
		return false;
		
	 }
	               
		
	}

 //function to get all the requests
 public function get_requests($db){
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
		 $dataa['name'][$i]= $row['name'];
		 $dataa['bathroom_number'][$i] = $row['bathroom_number'];
		 $dataa['bedroom_number'][$i] = $row['bedroom_number'];
		 $dataa['building_type'][$i]= $row['building_type'];
		 $dataa['phone'][$i]= $row['phone'];
		 $dataa['occupation'][$i]= $row['occupation'];
		 $dataa['address'][$i]= $row['address'];
		  $dataa['email'][$i]= $row['email'];
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
     
	  
	
   
  
     //delete request from the database
		 public function delete_request($id,$db){
	   $query="DELETE FROM ".$this->table." WHERE id=? LIMIT 1";
		$statement = $db->prepare($query);
		$statement->bind_param("s",$id);
	 
	 if ( $statement->execute() ){
		 return true;
	 }
	 
	 else{
		return false;
		
	 }
	   
	   
   }
  
	  
//propery class ends here 

}
?>