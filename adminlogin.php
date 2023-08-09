<?php
$userid=$_POST['username'];
$pwd=$_POST['pwd'];
if($userid=="admin" && $pwd==$pwd){
?>
<!DOCTYPE html>
<html>
<head>
<title>INDEX</title>
<style>
ul.topnav li {float: left;}
ul.topnav li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
font-size:20px;
}
ul.topnav li a:hover:not(.active) {background-color:#FF0033 ;} 
ul.topnav li a.active {background-color: #9C27B0 ;}
ul.topnav li.right {float: right;}
@media screen and (max-width: 600px) {
  ul.topnav li.right, 
  ul.topnav li {float: none;}
}
p{
color:#880E4F ;
font-family:cursive;
font-weight:bold;
font-size:40px;
text-align:center;
position:absolute;
top:50%;
left:50%;
transform:translateX(-50%) translateY(-50%);

}
body {margin: 0;background:url('https://media.istockphoto.com/vectors/volunteers-woman-and-man-donating-blood-blood-donor-charity-world-vector-id1256078531?k=20&m=1256078531&s=170667a&w=0&h=MZkoxWUC5WiXd0mRFxI7j8Ls4x0v5PYGJPDa0-LKC2Q=');background-repeat: no-repeat;
  background-size: cover;background-attachment:fixed;}
ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color:#F8BBD0;
}

</style>
</head>
<body >
<audio controls autoplay hidden loop>
<source src="bmusic.mp3" type="audio/mpeg"></audio> 
<ul class="topnav">
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="ad.php">Acceptor details</a></li>
  <li><a href="tra.html">Transaction Details</a></li>
<li><a href="adminlogin.html" style="float:right;">logout</a></li>
 
</ul>


</body>
</html>
<?php
}else{
echo "wrong username and password";}
?>