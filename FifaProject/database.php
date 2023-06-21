<?php

class Database{

	private $connection;
	function _construct()
	{
		$this->connect_db();
	}
	public function connect_db(){

		$this->connection = mysqli_connect('localhost', 'root','','fifa');

		mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

		if(mysqli_connect_error()){

			die('Database Connection Failed'. mysqli_connect_error() . mysqli_connect_errno());
		}
	

	}

	public function create($fname, $lname, $email, $pass, $country,$language){
		$sql = "INSERT INTO fifa (first_name, last_name,email, pass, country, lang) VALUES ('$fname', '$lname', '$email', '$pass', '$country','$language')";
		$res = mysqli_query($this->connection, $sql);
		if($res){
			return true;
		}
		else{
			die("err".mysqli_error($this->connection));
			return false;
		}
	}

	public function sanitize($var)
	{
		$return = mysqli_real_escape_string($this->connection, $var);
		return $return;
	}
	public function read($id=null){
		$sql = "SELECT * FROM 'crud'";
		if($id){
			$sql .= "WHERE id=$id";
		}
		$res = mysqli_query($this->connection, $sql);
		return $res;
	}
	//FOR VALIDATING LOGIN
	public function authenticate($email,$pass){
		$sql = "Select id FROM fifa WHERE email='$email' and pass= '$pass'";
		$res = mysqli_query($this->connection, $sql);
		return $res;
	}
}

$database = new Database();
$database -> connect_db();

?>