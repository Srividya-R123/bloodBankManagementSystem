<html>
<head>
<style>
table {
  border-collapse: collapse;
border:10px solid #FFFFFF;
  width: 800px;
height:500px;

}

th, td {
border:10px solid #FFFFFF;
  text-align: left;
  padding: 8px;
font-size:20px;
font-weight:bold;
font-family:"Sofia",sans-serif;
}

th{background-image: linear-gradient(135deg,#212121 10%, #F5F5F5 100%);}
td{background-image: linear-gradient(135deg,#FFCCFF 10%, #CCFFFF 100%);}
th {
  background-color: #EC407A;
  color: white;
}
h1{color:#EC407A;text-align:center;}
body{background-image:url('https://png.pngtree.com/thumb_back/fh260/background/20210814/pngtree-blue-purple-simple-gradient-background-image_760572.jpg');background-repeat: no-repeat;
  background-attachment: fixed;  
  background-size: cover;font-family:cursive;}
</style>
</head>
<body>
<?php
$con=mysqli_connect("localhost","root","","bbms");
if(!$con)
{
die("Could not connect:" .mysqli_connect_error());
}
$bg=$_POST["bg"];

$result=mysqli_query($con,"select * from donors");
echo "<center>";
echo "<table>";
echo "<caption><h1>Donor Details</h1></caption>";
echo "<br/><br/>";
echo "<tr><th>Name</th><th>Email</th><th>DOB</th><th>Gender</th><th>BloodGroup</th><th>Address</th></tr>";
while($row=mysqli_fetch_array($result)){
if($row['Bloodgroup']==$bg){
echo "<tr><td>".$row['Name']."</td><td>".$row['Email']."</td><td>".$row['DOB']."</td><td>".$row['Gender']."</td><td>".$row['Bloodgroup']."</td><td>".$row['Address']."</td></tr>";
echo "<br/>";
}
echo "</center>";}
mysqli_close($con);
?>
</body>
</html>
