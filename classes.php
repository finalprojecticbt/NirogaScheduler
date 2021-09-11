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


  class Patient extends DatabaseConn
  {
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
		echo "<div class = 'msgSet' >";
		echo "<span class='status-not-available'><h3>Registration Successfull. Please Log In.</h3></span>";
		
		echo "<div class='goBack'>   <button onclick=\"location.href='/login.php'\">log In</button>   </div>";
  
  
		echo "<br>";
		echo "<div class='status-not-available'><h5>Sign In Details</h5></div>";
		  echo "<div>Username: $username</div>";
		  echo "<div>Email: $email</div>";
		  echo "<div>NIC: $nic</div>";
		  echo "<div>Phone: $phone</div>";
		  echo "<div>Use Your Password to Sign In.</div>";
		  echo "</div>";

		  

		   
	  }  
	  else  
	  {  
		   echo mysqli_error($this->con); 
		  // echo 'Error';
	  }  
	 }
	 
	
	    public function check_login($username, $password){
 
			$sql = "SELECT * FROM patient WHERE username = '$username' AND password = '$password'";
			$query = $this->con->query($sql);
	 
			if($query->num_rows > 0){
				$row = $query->fetch_array();
				echo "Success";
				header('Location: booking.php');
				return $row['pUsername'];
				
			}
			else{
				return false;
			}
		}



  
	public function viewAppoint()  
	{  $user = "Sahan";

		 $result=mysqli_query($this->con,"select * from appointments");
		 return $result;



	}  
   


	
		public function cancelApp($appID)  {
			$string = "DELETE FROM appointment WHERE AppID = '$appID'" ;     
			// AND Username = '$user'" ;     
		   
			if(mysqli_query($this->con, !$string))
			{  
			  echo "<div class = 'msgSet' >";
			  echo "<span class='status-not-available'><h3>Delete Successfull. Please Refresh.</h3></span>";
			  echo "<div class='goBack'>   <button onclick=\"location.href='/login.php'\">log In</button>   </div>";
	
				 
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


