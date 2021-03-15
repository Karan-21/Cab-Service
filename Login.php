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
<form name="f" method="post" action="">
<?php
require("DB.php");
?>
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
				header("location:CabInfo.php");
			}
			else
			{
				echo "<script>alert('Invalid Username and password')</script>";
			}
		}
        else if($cat=="User")
        {
        	$uname=$_REQUEST['user'];
			$pwd=$_REQUEST['pass'];
            
            $q="select *from registration where username='$uname' and password='$pwd'";
            
            session_start();
            $result=mysqli_query($con,$q);
            while($r=mysqli_fetch_assoc($result))
            {
            	$cname=$r['customername'];
                $_SESSION['customer']=$cname;
                $_SESSION['cid']=$r['uid'];
                
            }
            if(isset($cname))
            {
            	header("location:Searchcab.php");
            }
            else 
            {
            	echo "<script>alert('Invalid Username and password')</script>";
			
            }
        }
	}
	
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
<a href="Home.php" class="aa">Home</a></td>
<td class="a">
<a href="login.php" class="aa">Login</a></td>
<td class="a">
<a href="Registration.php" class="aa">Register</a></td>
<td class="a">
<a  href="#" class="aa">Gallery</a></td>
</tr>
<tr height="150">
<td colspan="2">
<br><br>
<img src="images/login.gif">
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
<td colspan="2" align="center"><input type="submit" name="submit" id="submit">
&nbsp;&nbsp;&nbsp;
<input type="reset" name="reset" id="reset"></td>
</tr>
</table>
</tr>



<tr><td height="50" colspan="5">
<br><br>
<marquee><p class="pp">Copyright @ 2020 Cab Services</p>

</marquee>
</table>
</body>
</html>