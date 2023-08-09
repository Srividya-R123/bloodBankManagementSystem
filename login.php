<html>
<head>
<style>
table {
  border-collapse: collapse;
border:1px solid #00FFFF;
  width: 800px;
height:500px;
border-radius:50px;
}

th, td {
border:1px solid #00FFFF;
  text-align: left;
  padding: 8px;
font-size:20px;
font-weight:bold;
}

th{background-image: linear-gradient(135deg,#CC33FF 10%, #66CCCC 100%);}
td{background-image: linear-gradient(135deg,#FF6699 10%, #99FFFF 100%);}
th {
  background-color: #EC407A;
  color: white;
}
h1{color:white;text-align:center;}
body{background-image: linear-gradient(135deg,#33FF66 10%, #FF99FF 100%);font-family:cursive;}
</style>
</head>
<body>
<h1>Donor Details</h1>
<?php
$con=mysqli_connect("localhost","root","","bbms");
if(!$con){
die("Could not connect:" .mysqli_connect_error());
}
$userid=$_POST["userid"];
$pwd=$_POST["pwd"];
$result=mysqli_query($con,"select * from donors");
echo "<center>";
echo "<table>";
echo "<br/><br/>";
while($row=mysqli_fetch_array($result)){
if($row['Password']==$pwd){
echo "<tr><td>Name</td><td>".$row['Name']."</td></tr>";
echo "<br/>";
echo "<tr><td>Email</td><td>".$row['Email']."</td></tr>";
echo "<br/>";
echo "<tr><td>Date of Birth</td><td>".$row['DOB']."</td></tr>";
echo "<br/>";
echo "<tr><td>Gender</td><td>".$row['Gender']."</td></tr>";
echo "<br/>";
echo "<tr><td>BloodGroup</td><td>".$row['Bloodgroup']."</td></tr>";
echo "<br/>";
echo "<tr><td>Address</td><td>".$row['Address']."</td></tr>";
echo "<br/>";
}
echo "</table>";
echo "</center>";}
mysqli_close($con);
?>
</body>
</html>
