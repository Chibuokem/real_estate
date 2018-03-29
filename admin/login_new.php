<?php
session_start();
//database connection
include_once 'constants.php';
/*if($_GET['msg']=="success"){
	$log_prompt = '<span style="color:green">You Have successfully registered. Login Now!</span>';
}*/
//start session


//login
//if (isset($_POST['email '])) {
    $email = filter_input(INPUT_POST, 'email');
    $password = filter_input(INPUT_POST, 'password');
    $password_hash = md5($password);
     if(empty($email)){
		echo "Email is empty"; 
	 }
	 else if(empty($password)){
		echo"Fill in ur password "; 
	 }
	 
	 else{
    //confirm existence
    $check = "SELECT * FROM users WHERE email = '$email' and password = '$password_hash' LIMIT 1";
    $result = mysqli_query($link, $check);
	
    if (mysqli_num_rows($result) == 1) {
        $row = mysqli_fetch_assoc($result);
		if ($row['active']!=1){
			//$log_prompt = '<span style="color:red">* Your account has been DISABLED. Please contact support.</span>';
			echo "Your account has been DISABLED. Please contact support.";
		} else{
			$_SESSION['user_id'] = $row['id'];
			$_SESSION['package'] = $row['package'];
		echo true;
			/*$edit = (empty($row['acc_no'])) ? true : false;
			($edit) ? header("location:index.php?link=edit_profile&msg=incomplete") : header("location:index.php");*/
		}
    } else {
        //$log_prompt = '<span style="color:red">* Incorrect email and password combination</span>';
		echo"Incorrect email and password combination";
    }
	
	 } //else statement for field validation ends here 
//}
?>

