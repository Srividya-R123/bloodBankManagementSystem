<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$mysql_host="localhost";
$mysql_username="root";
$mysql_password="";
$mysql_database="bbms";

$name=filter_var($_POST["uname"],FILTER_SANITIZE_STRING);
$bg=filter_var($_POST["bg"],FILTER_SANITIZE_STRING);
$ph=filter_var($_POST["ph"],FILTER_SANITIZE_STRING);
$st="not sent";

$mysqli=new mysqli($mysql_host,$mysql_username,$mysql_password,$mysql_database);
if ($mysqli->connect_error){
die('error:('. $mysqli->connect_errno.')'.$mysqli->connect_error);
}

$statement=$mysqli->prepare("INSERT INTO acceptors(Name,BloodGroup,PhoneNumber,Status) VALUES(?,?,?,?)");
$statement->bind_param('ssss',$name,$bg,$ph,$st);

if ($statement->execute()){
echo "<script>alert('Request sent')</script>";
}else{
print $mysqli->error;
}
}
?>