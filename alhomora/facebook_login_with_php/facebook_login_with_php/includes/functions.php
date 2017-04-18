<?php
class Users {
	public $table_name = 'users';
	
	function __construct(){
		//database configuration
		$dbServer = 'localhost'; //Define database server host
		$dbUsername = 'sriram19941'; //Define database username
		$dbPassword = 'geoinformatics'; //Define database password
		$dbName = 'geologin'; //Define database name
		
		//connect databse
		$con = mysqli_connect($dbServer,$dbUsername,$dbPassword,$dbName);
		if(mysqli_connect_errno()){
			die("Failed to connect with MySQL: ".mysqli_connect_error());
		}else{
			$this->connect = $con;
		}
	}
	
	function checkUser($oauth_provider,$oauth_uid,$fname,$lname,$email,$gender,$locale,$picture){
		
		$prev_query = mysqli_query($this->connect,"SELECT * FROM ".$this->table_name." WHERE oauth_provider = '".$oauth_provider."' AND oauth_uid = '".$oauth_uid."'") or die(mysql_error($this->connect));
		if(mysqli_num_rows($prev_query)>0){
			$update = mysqli_query($this->connect,"UPDATE $this->table_name SET oauth_provider = '".$oauth_provider."', oauth_uid = '".$oauth_uid."', fname = '".$fname."', lname = '".$lname."', email = '".$email."', gender = '".$gender."', locale = '".$locale."', picture = '".$picture."', modified = '".date("Y-m-d H:i:s")."' WHERE oauth_provider = '".$oauth_provider."' AND oauth_uid = '".$oauth_uid."'");
		}else{
			$insert = mysqli_query($this->connect,"INSERT INTO $this->table_name SET oauth_provider = '".$oauth_provider."', oauth_uid = '".$oauth_uid."', fname = '".$fname."', lname = '".$lname."', email = '".$email."', gender = '".$gender."', locale = '".$locale."', picture = '".$picture."', created = '".date("Y-m-d H:i:s")."', modified = '".date("Y-m-d H:i:s")."'");
		}
		
		 $servername = "localhost";
$username = "sriram19941";
$password = "geoinformatics";
$dbname = "geologin";


// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO fgusers3( name, email, username, 
password, confirmcode ) 
VALUES (
'$fname',  '$email',  '$fname',  '$fname','y'
)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
	echo nl2br("\n Random Username and password have been generated.\n Please go to the following link to verify your mail address and get your username and password.\n");

	echo '<a href="http://geohorizon.in/alhomora/source/reset-pwd-req.php">Click Here to get credentials!</a>"';
	//print user details
	//echo '<pre>';
	//print_r($user);
	//echo '</pre>';
		
		$query = mysqli_query($this->connect,"SELECT * FROM $this->table_name WHERE oauth_provider = '".$oauth_provider."' AND oauth_uid = '".$oauth_uid."'");
		$result = mysqli_fetch_array($query);
		return $result;
	}
}
?>