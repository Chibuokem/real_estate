<?php
class Member extends CI_Model{
	
public $timee;
public $table;

  public function __construct(){
	
	$this->table = "users";	
 date_default_timezone_set('Africa/Lagos');

}
	public function register($name,$email,$phone,$address,$password,$db){
		
	
		$password_hash=md5($password);
		$timee=date('Y-m-d H:i:s');
		$query="INSERT INTO ".$this->table."(name,email,phone,address,password,timee ) VALUES(?,?,?,?,?,?)";
		//echo $db->error.$query;
		
			$statement = $db->prepare($query);
		
		$statement->bind_param("ssssss",$name,$email,$phone,$address,$password_hash,$timee);
		
	 //$result = $db->query($query);
	 
	 if ( $statement->execute() ){
		 
		 return true;
	 }
	 
	 else{
		
		return false;
		//echo $db->error;
	 }
	               
		
	}

    public function check($email,$password,$db){
		  $password_hash = md5($password);
		  $query = "SELECT * FROM ".$this->table." WHERE email=? AND password=? LIMIT 1";
		  $statement = $db->prepare($query);
		  $statement->bind_param("ss",$email,$password_hash);
	 if ( $statement->execute() ){	 
		 $result = $statement->get_result();
		 $num = $result->num_rows;
		 
		 if($num > 0){
			 //fetch result from database in an associative array and store inside session
			 $row = $result->fetch_assoc();
			 
			// print_r($row);
			 $_SESSION['id'] = $row['id'];
			 $_SESSION['name'] = $row['name'];
			 $_SESSION['email'] = $row['email'];
			 $_SESSION['phone'] = $row['phone'];
			 $_SESSION['address'] = $row['address'];
			$_SESSION['level'] = $row['level'];
			$_SESSION['time'] = $row['timee'];
		 return true;
		
		 }
		 else{
			 
			return false; 
		 }
	 }
	 else{
		return false;
	 }
		  
	  }

       //function to update user profile 
		public function update_profile($name,$email,$phone,$address,$db){
		if(!isset($_SESSION['id'])){
			die("Your session has expired or your not logged in. please Login");
		}
		
		$id = $_SESSION['id'];
		
		$query="UPDATE ".$this->table." SET name=?,email=?,phone=?,address=? WHERE id=? LIMIT 1";
		$statement = $db->prepare($query);
		$statement->bind_param("sssss",$name,$email,$phone,$address,$id);
	
	
	 
	 if ( $statement->execute() ){
		 return true;
	 }
	 
	 else{
		 echo $db->error;
		//return false;
		
	 }
		
		
		
	}


 //function to get member profile
 public function get_profile($db){
		if(!isset($_SESSION['id'])){
			$location=base_url();
			redirect($location);
		}
		
		$id = $_SESSION['id'];
		if(empty($id)){
		die("Your session has expired or your not logged in. please Login");	
		}
		$dataa=array();
		
		$query = "SELECT * FROM ".$this->table." WHERE id = '$id' LIMIT 1" ;
		
	 $result = $db->query($query);
	 $num = mysqli_num_rows($result);
	 if($num > 0)
	 {
	 
	   $row = mysqli_fetch_array($result);
		 $dataa['name'] = $row['name'];
		 $dataa['email']= $row['email'];
		 $dataa['phone'] = $row['phone'];
		 $dataa['id']= $row['id'];
		  $dataa['address']= $row['address'];
	 
	 return $dataa;
	}
	
	 else{
		echo $db->error;
		//return false; 
	
	 }		
	
}

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
	  
	  
	  //get all users
	   public function get_users($db){
		 $dataa=array();
		 $i=0;
		  $query = "SELECT * FROM ".$this->table." ";
		  
			$result = $db->query($query);
			$num = mysqli_num_rows($result);
		   if($num > 0){
				 while($row = mysqli_fetch_array($result)){
					 
				 $dataa['name'][$i] = $row['name'];
				 $dataa['email'][$i]= $row['email'];
				 $dataa['phone'][$i] = $row['phone'];
				 $dataa['id'][$i]= $row['id'];
				 $dataa['address'][$i]= $row['address'];
				 $dataa['level'][$i]= $row['level'];
				
				 $i++;
			 }
			 return $dataa;  
			   
		   }
		 else {
			return false; 
		 }
	
		  
	  }
	  
	  //make user admin function
	   public function make_admin($id,$db){
	   $query="UPDATE ".$this->table." SET level=1 WHERE id=? LIMIT 1";
		$statement = $db->prepare($query);
		$statement->bind_param("s",$id);
	 
	 if ( $statement->execute() ){
		 return true;
	 }
	 
	 else{
		return false;
		
	 }
	   
	   
   }
   
    //remove  user admin privilege function
    public function remove_admin($id,$db){
	   $query="UPDATE ".$this->table." SET level=0 WHERE id=? LIMIT 1";
		$statement = $db->prepare($query);
		$statement->bind_param("s",$id);
	 
	 if ( $statement->execute() ){
		 return true;
	 }
	 
	 else{
		return false;
		
	 }
	   
	   
   }
	  
//member class ends here 

}
?>