<?php
$this->connection = mysqli_connect('localhost', 'root','','fifa');

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

if(mysqli_connect_error()){

    die('Database Connection Failed'. mysqli_connect_error() . mysqli_connect_errno());
$fname = $database->sanitize($_POST['fname']);
$lname = $database->sanitize($_POST['lname']);
$email = $database->sanitize($_POST['email']);
$pass=$database->sanitize($_POST['pass']);
$country=$database->sanitize($_POST['country']);
$language=$database->sanitize($_POST['country']);
$res = $database->create($fname, $lname, $email, $pass, $country,$language);
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
?>
