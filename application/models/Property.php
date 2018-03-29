<?php
class 	Property extends CI_Model{
	
public $timee;
public $table;

  public function __construct(){
	
	$this->table = "property";	
 date_default_timezone_set('Africa/Lagos');

}

  //finction to register a property..inserting it into the database
	public function register($picture,$picture_new,$price,$property_type,$property_location,$bedroom_number,$bathroom_number,$phone,$nature,$db){
		
	
	
		$timee=date('Y-m-d H:i:s');
		$query="INSERT INTO ".$this->table."(picture,picture_new,price,property_type,property_location,bedroom_number,bathroom_number,phone,timee,nature ) VALUES(?,?,?,?,?,?,?,?,?,?)";
		//echo $db->error.$query;
		
			$statement = $db->prepare($query);
		
		$statement->bind_param("ssssssssss",$picture,$picture_new,$price,$property_type,$property_location,$bedroom_number,$bathroom_number,$phone,$timee,$nature);
		
	 //$result = $db->query($query);
	 
	 if ( $statement->execute() ){
		 
		 return true;
	 }
	 
	 else{
		
		die($db->error);
		return false;
		//echo $db->error;
	 }
	               
		
	}

 //function to get all the properties (most recent 6) from the database to be displayed in the home page
  public function get_properties_home_page($db){
		/*if(!isset($_SESSION['id'])){
			$location=base_url();
			redirect($location);
		}*/
		
		$dataa=array();
		$i=0;
		
		$query = "SELECT * FROM ".$this->table." ORDER BY id DESC LIMIT 6" ;
		
	 $result = $db->query($query);
	 $num = mysqli_num_rows($result);
	 if($num > 0)
	 {
	 
	  while( $row = mysqli_fetch_array($result)){
		 $dataa['id'][$i] = $row['id'];
		 $dataa['price'][$i]= $row['price'];
		 $dataa['property_type'][$i] = $row['property_type'];
		 $dataa['property_location'][$i]= $row['property_location'];
		  $dataa['bedroom_number'][$i]= $row['bedroom_number'];
	    $dataa['bathroom_number'][$i]= $row['bathroom_number'];
		 $dataa['phone'][$i]= $row['phone'];
		  $dataa['timee'][$i]= $row['timee'];
		   $dataa['status'][$i]= $row['status'];
		    $dataa['picture_new'][$i]= $row['picture_new'];
			$dataa['nature'][$i]= $row['nature'];
			$i++;
	  }
	 return $dataa;
	}
	
	 else{
		//echo $db->error;
		return false; 
	
	 }		
	
}
      //function to get just details of a particular  property
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
	  
	  
	  
	  //get all the properties in the database
	   public function get_properties($db){
		 $dataa=array();
		 $i=0;
		  $query = "SELECT * FROM ".$this->table." ";
		  
			$result = $db->query($query);
			$num = mysqli_num_rows($result);
		   if($num > 0){
				 while($row = mysqli_fetch_array($result)){
					 
				 $dataa['id'][$i] = $row['id'];
				 $dataa['price'][$i]= $row['price'];
				 $dataa['property_type'][$i] = $row['property_type'];
				 $dataa['property_location'][$i]= $row['property_location'];
				 $dataa['bedroom_number'][$i]= $row['bedroom_number'];
				 $dataa['bathroom_number'][$i]= $row['bathroom_number'];
				 $dataa['phone'][$i]= $row['phone'];
				 $dataa['timee'][$i]= $row['timee'];
				 $dataa['status'][$i]= $row['status'];
				 $dataa['picture_new'][$i]= $row['picture_new'];
				
				 $i++;
			 }
			 return $dataa;  
			   
		   }
		 else {
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
   
  
     //delete property from the database
		 public function delete_property($id,$db){
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
  
	      //function to get just details of a particular  property
	public function get_search_result($property_location,$nature,$db){
		  $dataa=array();
		   $i=0;
		  $query = "SELECT * FROM ".$this->table." WHERE property_location=? AND nature=? ";
		  $statement = $db->prepare($query);
		  $statement->bind_param("ss",$property_location,$nature);
	 if ( $statement->execute() ){	 
		 $result = $statement->get_result();
		 $num = $result->num_rows;
		 
		 if($num > 0){
			  while ($row = $result->fetch_assoc()){
				   $dataa['id'][$i] = $row['id'];
				 $dataa['price'][$i]= $row['price'];
				 $dataa['property_type'][$i] = $row['property_type'];
				 $dataa['property_location'][$i]= $row['property_location'];
				 $dataa['bedroom_number'][$i]= $row['bedroom_number'];
				 $dataa['bathroom_number'][$i]= $row['bathroom_number'];
				 $dataa['phone'][$i]= $row['phone'];
				 $dataa['timee'][$i]= $row['timee'];
				 $dataa['status'][$i]= $row['status'];
				 $dataa['picture_new'][$i]= $row['picture_new'];
				$dataa['nature'][$i]= $row['nature'];
				 $i++;
			  }
			 
		 return $dataa;
		 }
		 else{
	
			return false; 
		 }
	 }
	 else{
		return false;
	 }
		  
	  }

		              
//propery class ends here 

}
?>