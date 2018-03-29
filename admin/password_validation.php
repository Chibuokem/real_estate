<?php

	
	$pass1=$_POST['pass1'];
	$pass2=$_POST['pass2'];
	
	if($pass1 !==$pass2){
	echo "Passwords do not match";	
		
	}
	else if( empty($pass1)){
	
	  echo "Fill in your main password   ";
	}
	
	else if( empty($pass2)){
	
	  echo "Fill in your confirmation password   ";
	}
	
	
	
	else{
	echo "Passwords match";
	}
	
	 

?>	 