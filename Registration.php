<html>
<head>
<title>Cab Services</title>
<style>
.aa
{
	text-decoration:none;
	color:greenyellow;

}
.a
{
	width:200px;
   text-align:center;
   background-color:dodgerblue;
}
.s{
	padding:25px 25px 25px 25px;
	font-size:20px;
	line-height:40px;
}
</style>
</head>
<body background="images/b1.jpg">

<form name="f" method="post" action="" enctype="multipart/form-data">
<?php
require("DB.php");
?>
<?php
if(isset($_REQUEST['Register']))
{
	$cname=$_REQUEST['cname'];
	$address=$_REQUEST['address'];
	$contact=$_REQUEST['contact'];
	$mail=$_REQUEST['mail'];
	$uname=$_REQUEST['uname'];
	$pass=$_REQUEST['pass'];
	$confirm=$_REQUEST['confirm'];
	
	$q="insert into registration(customername,address,contact,mailid,username,password,confirm) values('$cname','$address',$contact,'$mail','$uname','$pass','$confirm')";
	
	$result=mysqli_query($con,$q);
	echo "<script>alert('Registered Successfully')</script>";
	
	
}
?>

<table align="center" border="0" cellspacing="0" width="60%"  background="images/bg1.jpg" >
<tr  height="200" style="background:url(images/banner2.jpg);background-size:100% 100%">
<td colspan="4"  style="color:red;font-family:Monotype Corsiva;font-size:30px;">
&nbsp;&nbsp;Cab Services <br><br>&nbsp;&nbsp;&nbsp;&nbsp;Application
</td>
</tr>
<tr height="30">
<td class="a">
<a href="Home.php" class="aa">Home</td>
<td class="a">
<a href="login.php" class="aa">Login</td>
<td class="a">
<a href="Registration.php" class="aa">Register</td>
<td class="a">
<a  href="#" class="aa">Gallery</td>
<tr>
<td colspan="5" align="center">
<table align="center" cellspacing="10" cellpadding="10">
<tr><th colspan="2" align="center">User Registration</th></tr>
<tr><td>Customer Name:</td><td><input type="text" name="cname" id="cname"></td></tr>
<tr><td>Address:</td><td><input type="text" name="address" id="address"></td></tr>

<tr><td>Contact:</td><td><input type="number" name="contact" id="contact"></td></tr>
<tr><td>Mail Id:</td><td><input type="text" name="mail" id="mail"></td></tr>
<tr><td>UserName:</td><td><input type="text" name="uname" id="uname"></td></tr>
<tr><td>Password:</td><td><input type="password" name="pass" id="pass"></td></tr>
<tr><td>Confirm Password:</td><td><input type="password" name="confirm" id="confirm"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="Register" id="Register">
<input type="reset" name="reset" id="reset" value="Reset">

</table>

</td>
</tr>

<tr><td height="50" colspan="5">
<br><br>
<marquee><p class="pp">Copyright @ 2020 Cab Services</p>

</marquee>
</table>
</body>
</html>