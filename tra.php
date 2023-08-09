<?php
$con=mysqli_connect("localhost","root","","bbms");
if(!$con)
{
die("Could not connect:" .mysqli_connect_error());
}
$ph=$_POST["ph"];

$result=mysqli_query($con,"update acceptors set Status='Sent' where PhoneNumber=$ph");
mysqli_close($con);
?>
</body>
</html>