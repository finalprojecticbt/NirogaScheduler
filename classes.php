<?php

// Patient Class
class Patient {
	public $pUsername, $email, $nic, $contactNo, $dob, $gender, $password;
	
	public function patientReg($username, $emailid, $password){  
	  //	$password = md5($password);  
		$qr = mysql_query("INSERT INTO patient(username, emailid, password) values('".$username."','".$emailid."','".$password."')") or die(mysql_error());  
		return $qr;  
	   
}   



}


class Appointment {
	public $appID, $appDate, $appTime, $authNum;

   // auth number is unique number sent by sms 
   // idea is add random number, rand() Function to last appointment number or int 1 if there's no last appointment
}

class Vaccine {
	public $vacID, $vacName, $vacStock, $targetDisease, $storeTemp;
	

}

class Center {
	public $centerID, $cenName, $cenDistrict, $cenAddress;
	

}

class HealthAdmin {
	public $adminID, $adminUsername, $adminPass, $adminType, $adminEmail;
	

}

class HealthAssist {
	public $assistID, $assistUsername, $assistPass, $assistType, $assistEmail;
	

}


?>


