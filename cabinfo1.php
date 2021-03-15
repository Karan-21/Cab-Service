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
<body background="b1.jpg">
<form name="f" method="post" action="">
<?php
require("DB.php");
?>
<?php
if(isset($_REQUEST['insert']))
{
	 //echo"<script>alert('hai')</script>";
	$register=$_REQUEST['register'];
	$dname=$_REQUEST['dname'];
	$contact=$_REQUEST['contact'];
	$lno=$_REQUEST['lno'];
	$details=$_REQUEST['details'];
	$location=$_REQUEST['location'];
	
	
	$q="insert into cabinfo(regno,drivername,contact,licenseno,avilable,location) values('$register','$dname',$contact,'$lno','$details','$location')";
	
	$res=mysqli_query($con,$q);
//	or die('error in query');
	
	echo "".mysqli_error($con);
	
	echo "<script>alery('Record inserted successfully')</script>";

	
	mysqli_close($con);
	
	
	
}
?>

<table align="center" border="0" width="60%" background="b2.jpg" height="100%">
<tr height="150">
<td colspan="2">
<img src="im1.jpg" height="200" width="400">
<td colspan="2"><h1>Online Cab Services</h1>
</tr>
<tr height="30">
<td class="a">
<a href="#" class="aa">Cab Details</a></td>
<td class="a">
<a href="#" class="aa">Driver Details</a></td>
<td class="a">
<a href="#" class="aa">User Info</a></td>
<td class="a">
<a  href="#" class="aa">Services</a></td>
<td class="a">
<a  href="Home.php" class="aa">Logout</a></td></tr>
<tr height="150">
<td colspan="2">
<img src="regis.png"></td>
<td colspan="2">
<table  border="0" cellspacing="10" cellpadding="10" align="center">
<tr>
<td class="dd">Cab No:</td>
<td><input type="text" name="cabno" id="cabno" readonly></td>
</tr>
<tr>
<td class="dd">Resgistration No:</td>
<td><input type="text" name="register" id="register"></td>
</tr>
<tr>
<td class="dd">Driver Name:</td>
<td><input type="text" name="dname" id="dname"></td>
</tr>
<tr>
<td class="dd">Contact No:</td>
<td><input type="text" name="contact" id="contact"></td>
</tr>
<tr>
<td class="dd">License No:</td>
<td><input type="text" name="lno" id="lno"></td>
</tr>
<tr>
<td class="dd">Available Details:</td>
<td><input type="text" name="details" id="details"></td>
</tr>
<tr>
<td class="dd">Location:</td>
<td><input type="text" name="location" id="location"></td>
</tr>
<tr><td colspan="2" align="center"><input type="submit" name="insert" id="insert" value="Insert">
<input type="reset" name="clear" id="clear" value="clear">
</td>
</tr>

</table>
</td></tr>

<tr><td height="50" colspan="5">
<br><br>
<marquee><p class="pp">Copyright @ 2020 Cab Services</p>

</marquee>
</table>
</form>
</body>
</html>