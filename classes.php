<?php

class DatabaseConn
{
    private $host = 'localhost';
    private $username = 'root';
    private $password = '';
    private $dbName = 'niroga';

    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->username, $this->password, $this->dbName);
        if (!$this->con) {
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
    public $DBcon;

    /**
     * @param $username
     * @param $email
     * @param $nic
     * @param $phone
     * @param $dob
     * @param $sex
     * @param $pass
     */
    public function __construct()
    {
        $this->DBcon = new DatabaseConn();
    }


    public function patientReg($username, $email, $nic, $phone, $dob, $sex, $pass)
    {

        $encryptedPassword = md5($pass);
        $query = "INSERT INTO patient(pUsername,email,nic,contactNo,dob,gender,password) 
                                    values('$username','$email','$nic','$phone','$dob','$sex','$encryptedPassword' )";

        if(mysqli_query($this->DBcon->con, $query)){
            header('Location: booking.php');
        }



      /*  if (mysqli_query($this->con, $string)) {
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
        }*/
    }


    public function check_login($username, $password)
    {
        if (!$this->DBcon->con) {
            echo '<script>alert("Db connection err")</script>';
        }
        $encPass= md5($password);
        $sql = "SELECT * FROM patient WHERE pUsername = '$username' AND PASSWORD = '$encPass'";
        $result = mysqli_query($this->DBcon->con, $sql);
        $resultRows = mysqli_num_rows($result);
        if ($resultRows > 0) {
            $_SESSION['isLogged'] = true;
            header('Location: booking.php');
        } else {
            echo "user name or password wrong";
        }
    }


    function viewAppoint()
    {
        $user = "Sahan";

        $result = mysqli_query($this->con, "select * from appointments");
        return $result;
    }


    function cancelApp($appID)
    {
        $string = "DELETE FROM appointment WHERE AppID = '$appID'";
        // AND Username = '$user'" ;

        if (mysqli_query($this->con, !$string)) {
            echo "<div class = 'msgSet' >";
            echo "<span class='status-not-available'><h3>Delete Successfull. Please Refresh.</h3></span>";
            echo "<div class='goBack'>   <button onclick=\"location.href='/login.php'\">log In</button>   </div>";


        }
    }
}


class Appointment extends DatabaseConn
{
    public $appID, $appDate, $appTime, $authNum;

    // auth number is unique number sent by sms
    // idea is add random number, rand() Function to last appointment number or int 1 if there's no last appointment
}

class Vaccine extends DatabaseConn
{
    public $vacID, $vacName, $vacStock, $targetDisease, $storeTemp;


}

class Center extends DatabaseConn
{
    public $centerID, $cenName, $cenDistrict, $cenAddress;


}

class HealthAdmin extends DatabaseConn
{
    public $adminID, $adminUsername, $adminPass, $adminType, $adminEmail;


}

class HealthAssist extends DatabaseConn
{
    public $assistID, $assistUsername, $assistPass, $assistType, $assistEmail;


}





