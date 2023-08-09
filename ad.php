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

th{background-image: linear-gradient(135deg,#F8BBD0 10%, #BA68C8 100%);}
td{background-image: linear-gradient(135deg,#FF6699 10%, #99FFFF 100%);}
th {
  background-color: #EC407A;
  color: white;
}
h1{color:white;text-align:center;}
body{background-image: linear-gradient(135deg,#F48FB1 10%, #FFCCBC 100%);font-family:cursive;}
</style>
</head>
<body>
<h1>Acceptor Details</h1>
<?php
$con=mysqli_connect("localhost","root","","bbms");
if(!$con)
{
die("Could not connect:" .mysqli_connect_error());
}

$result=mysqli_query($con,"select * from acceptors");
echo "<center>";
echo "<table>";
echo "<br/><br/>";
echo "<tr><th>Name</th><th>Blood Group</th><th>Phone number</th><th>Status</th></tr>";
while($row=mysqli_fetch_array($result)){
echo "<tr><td>".$row['Name']."</td><td>".$row['BloodGroup']."</td><td>".$row['PhoneNumber']."</td><td>".$row['Status']."</td></tr>";
echo "<br/>";
}
echo "</table>";
echo "</center>";
mysqli_close($con);
?>
</body>
</html>