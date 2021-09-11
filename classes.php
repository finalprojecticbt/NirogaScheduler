<?php

class DatabaseConn {
	private $host='localhost';
	private $username='root';
	private $password='';
	private $dbName='bbbb';

	public function __construct()  
	{  
		 $this->con = mysqli_connect($this->host, $this->username, $this->password, $this->dbName);  
		 if(!$this->con)  
		 {  
			  echo 'Database Connection Error ' . mysqli_connect_error($this->con);  
		 }  
	} 
	
  }


  class Patient extends DatabaseConn{
	public $username;
	public $email;
	public $nic;
	public $phone;
	public $dob;
	public $sex;
	public $pass;


	  public function patientReg($username,$email,$nic,$phone, $dob, $sex, $pass)  {  
	  $string = "INSERT INTO patient(pUsername,email,nic,contactNo,dob,gender,password) 
	  values('$username','$email','$nic','$phone','$dob','$sex','$pass' )";       
	 
	  if(mysqli_query($this->con, $string))  
	  {  
		   echo "Registration Success";
	  }  
	  else  
	  {  
		   echo mysqli_error($this->con); 
		  // echo 'Error';
	  }  
	 }
	 
	 public function patientLog($username,$pass)  {
		$string3 = "select count(*) as cntUser from patient where pUsername='".$username."' and password='".$pass."'";    
		if(mysqli_query($this->con, $string3))  
		{  
			 echo "Login Success";
			 header('Location: booking.php');
		}  

	   }


	   public function checkUserExist($username){
       
		$string2 = "SELECT pUsername FROM patient WHERE pUsername='" . $_POST["username"] . "'";       
      
   
		if(mysqli_query($this->con, $string2))  {  
		 
			echo "Registration Success";
		
	}  
	
	
	else  
	{  
		 echo mysqli_error($this->con); 
		// echo 'Error';
	} 

  }

	 
}




class Appointment extends DatabaseConn{
	public $appID, $appDate, $appTime, $authNum;

   // auth number is unique number sent by sms 
   // idea is add random number, rand() Function to last appointment number or int 1 if there's no last appointment
}

class Vaccine extends DatabaseConn{
	public $vacID, $vacName, $vacStock, $targetDisease, $storeTemp;
	

}

class Center extends DatabaseConn{
	public $centerID, $cenName, $cenDistrict, $cenAddress;
	

}

class HealthAdmin extends DatabaseConn{
	public $adminID, $adminUsername, $adminPass, $adminType, $adminEmail;
	

}

class HealthAssist extends DatabaseConn{
	public $assistID, $assistUsername, $assistPass, $assistType, $assistEmail;
	

}


?>


