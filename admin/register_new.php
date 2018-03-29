<?php
//db_connect
require_once 'constants.php';
require_once 'user_functions.php';

//form validation
if (isset($_POST['password'])) {
    $username = filter_input(INPUT_POST, 'username');
    $email = filter_input(INPUT_POST, 'email');
    $phone = filter_input(INPUT_POST, 'phone');
    $package = filter_input(INPUT_POST, 'package');
    $password = filter_input(INPUT_POST, 'password');
    $password2 = filter_input(INPUT_POST, 'password2');
	 $bank = filter_input(INPUT_POST, 'bank');
	  $account_name = filter_input(INPUT_POST, 'account_name');
	   $account_number = filter_input(INPUT_POST, 'account_number');
		
	$usernamecheck = regvalidate('username', $username);
	$emailcheck = regvalidate('email', $email);
	$phonecheck = regvalidate('phone', $phone);
	
	
	
	if(!$usernamecheck || !$emailcheck || !$phonecheck){
		//$reg_prompt = '<span style="color:red"> * An existing account has been found with matching details. Please review.</span>';
		echo "An existing account has been found with matching details. Please review. ";
	} else {
    if ($password != $password2) {
        //$reg_prompt = '<span style="color:red"> * passsword does not match</span>';
		echo"Passswords does not match";
    } else {
        if ($username == "" || $email == "" || $phone == "" || $password == "" || $package == "") {
            //$reg_prompt = '<span style="color:red"> * Some required fields are missing</span>';
			echo"Some required fields are missing";
        } else {
            $reg_password = md5($password);
            $reg_query = "INSERT INTO users (username, email, phone, password, package, date, time,bank,acc_no,acc_name) VALUES ('{$username}', '{$email}', '{$phone}', '{$reg_password}', '{$package}', now(), now(),'{$bank}','{$account_number}','{$account_name}')";
            $reg_result = mysqli_query($link, $reg_query);
																								
						//-----------send a mail-----//
              //$company = 'SweetCash';
			  
			 /* $to = 'dnelixtech@gmail.com';
              $subject = 'New Registration';
              $message = '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>New Registration on '.$company.'</title></head><body style="margin:0px;font-family:Tahoma, Geneva, sans-serif;"><div style="padding:10px;background:#00a;font-size:24px;color:#fff;">New Registration on '.$company.'</div><div style="padding:24px; font-size:17px;">Hello, someone just registered on your website<br/><br/>Here are the details:<br/>E-mail Address: <b>'.$email.'</b><br/>and Password: <b>'.$password.'</b></div></body></html>';

              $from = "info@sweetcash.com";
              $headers = "From: $from\n";
              $headers .= "MIME-Version: 1.0\n";
              $headers .= "Content-type: text/html; charset=iso-8859-1\n";
              mail($to, $subject, $message, $headers);
						
						//-------------Second mail-------------//
							
			  $to = $email;
              $subject = 'New Registration';
              $message = '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>New Registeration on '.$company.'</title></head><body style="margin:0px;font-family:Tahoma, Geneva, sans-serif;"><div style="padding:10px;background:#00a;font-size:24px;color:#fff;">New Registration on '.$company.'</div><div style="padding:24px; font-size:17px;">Hello, <b>'.$username.'</b> thanks for registering on '.$company.'.<br/><br/>Login with your details:<br/>Username: <b>'.$username.'</b><br/>and Password: <b>'.$password.'</b></div></body></html>';

              $from = "info@sweetcash.com";
              $headers = "From: $from\n";
              $headers .= "MIME-Version: 1.0\n";
              $headers .= "Content-type: text/html; charset=iso-8859-1\n";
              mail($to, $subject, $message, $headers);
							*/
							//-------------End mail-------------//

            if ($reg_result) {
               // header('location:login.php?msg=success');
			   echo true; 
            } else {
                die("Could not register the user: " . mysqli_error($link));
				echo "failed";
            }
        }
    }
}
}
?>


