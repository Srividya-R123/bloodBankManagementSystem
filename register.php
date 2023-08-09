<?php

if($_SERVER["REQUEST_METHOD"]=="POST"){
$mysql_host="localhost";
$mysql_username="root";
$mysql_password="";
$mysql_database="ams";

$name=filter_var($_POST["name"],FILTER_SANITIZE_STRING);
$email=filter_var($_POST["email"],FILTER_SANITIZE_STRING);
$date=filter_var($_POST["date"],FILTER_SANITIZE_STRING);
$gen=filter_var($_POST["gen"],FILTER_SANITIZE_STRING);
$bg=filter_var($_POST["bg"],FILTER_SANITIZE_STRING); 
$np=filter_var($_POST["np"],FILTER_SANITIZE_STRING);
$un=filter_var($_POST["un"],FILTER_SANITIZE_STRING);
$pwd=filter_var($_POST["pwd"],FILTER_SANITIZE_STRING);

$mysqli=new mysqli($mysql_host,$mysql_username,$mysql_password,$mysql_database);
if ($mysqli->connect_error){
die('error:('. $mysqli->connect_errno.')'.$mysqli->connect_error);
}

$statement=$mysqli->prepare("INSERT INTO User_details(Name,Email,DateOfAccomodation,Gender,BloodGroup,NoofPeople,Username,Password) VALUES(?,?,?,?,?,?,?,?)");

$statement->bind_param('ssssssss',$name,$email,$date,$gen,$bg,$np,$un,$pwd);

if ($statement->execute()){
echo "<script>alert('Thank you for Registering.')</script>";
}else{
print $mysqli->error;
}
}
?>