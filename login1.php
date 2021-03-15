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
if(isset($_REQUEST['submit']))
{
	//  echo"<script>alert('hai')</script>";
	$cat="";
	if(isset($_REQUEST['category']))
	{
		$cat=$_REQUEST['category'];
		if($cat=="Admin")
		{
			$uname=$_REQUEST['user'];
			$pwd=$_REQUEST['pass'];
			if($uname=="admin" && $pwd="admin")
			{
				header("location:cabinfo.php");
			}
			else
			{
				echo "<script>alert('Invalid Username and password')</script>";
			}
		}
	}
	
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
<a href="#" class="aa">Home</td>
<td class="a">
<a href="#" class="aa">Login</td>
<td class="a">
<a href="#" class="aa">Register</td>
<td class="a">
<a  href="#" class="aa">Services</td>
<td class="a">
<a  href="#" class="aa">About</td>
<tr height="150">
<td colspan="2">
<img src="login.gif">
<td colspan="2">

<table  border="0" cellspacing="10" cellpadding="10" align="center">
<tr>
<td class="dd">UserName:</td>
<td><input type="text" name="user" id="user"></td>
</tr>
<tr>
<td class="dd">Password:</td>

<td><input type="password" name="pass" id="pass"></td>
</tr>
<tr>
<td class="dd" colspan="2" align="center">
<input type="radio"name="category" id="category" value="Admin">Admin
<input type="radio"name="category" id="category" value="User">User
</td></tr>
<tr>
<td><input type="submit" name="submit" id="submit"></td>
<td><input type="reset" name="reset" id="reset"></td>
</tr>
</table>
</tr>
<tr><td height="50" colspan="5">
<br><br>
<marquee><p class="pp">Copyright @ 2020 Cab Services</p>

</marquee>
</table>
</form>
</body>
</html>