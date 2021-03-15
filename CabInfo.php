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
if(isset($_REQUEST['insert']))
{
	 //echo"<script>alert('hai')</script>";
	$register=$_REQUEST['register'];
	$dname=$_REQUEST['dname'];
	$contact=$_REQUEST['contact'];
	$lno=$_REQUEST['lno'];
	
	$model=$_REQUEST['model'];
	$fare=$_REQUEST['fare'];
    $dfare=$_REQUEST['dfare'];
    $address=$_REQUEST['address'];
    $image=$_FILES['cab']['name'];
    $a=$_FILES['cab']['tmp_name'];
    move_uploaded_file($a,"./cab/".$image);
    //echo $image;
	$q="insert into cabinfo(regno,cabmodel,basefare,dfare,drivername,contact,address,licenseno,picture) values('$register','$model',$fare,$dfare,'$dname',$contact,'$address','$lno','$image')";
	
	$res=mysqli_query($con,$q);
//	or die('error in query');
	
	echo "".mysqli_error($con);
	
	echo "<script>alery('Record inserted successfully')</script>";

	
	mysqli_close($con);
	
	
	
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
<a href="CabInfo.php" class="aa">Cab Info</a></td>
<td class="a">
<a href="Bookingdetail.php" class="aa">Booking Details</a></td>
<td class="a">
<a href="Customerreview.php" class="aa">Customer Review</a></td>
<td class="a">
<a  href="Home.php" class="aa">Logout</a></td>
</tr>
<tr>
<td colspan="4">
<table  border="0" cellspacing="10" cellpadding="10" align="center">
<tr><th colspan="2" align="center">Cab Information</th></tr>
<tr>
<td class="dd">Cab No:</td>
<td><input type="text" name="cabno" id="cabno" readonly></td>
</tr>
<tr>
<td class="dd">Resgistration No:</td>
<td><input type="text" name="register"  id="register"></td>
</tr>
<td class="dd">Cab Model:</td>
<td>
<select name="model" id="model">
<option value="Tata Indica (4 1) (A/C)">Tata Indica (4 + 1) (A/C)</option>
<option value="Tata Indica (4 1) (Non A/C)">Tata Indica (4 + 1) (Non A/C)</option>
<option value="Indigo (4 1)">Indigo (4+1)</option>
<option value="Toyota Etios (4 1)">Toyota Etios (4+1)</option>
<option value="Logon (4 1)">Logon (4+1)</option>
<option value="Swift  (4 1)">Swift  (4+1)</option>
<option value="Chevrolet Tavera (9  1) (Non A/C)">Chevrolet Tavera (9 + 1) (Non A/C)</option>
<option value="Chevrolet Tavera (9  1) (A/C)">Chevrolet Tavera (9 + 1) (A/C)</option>
<option value="Toyota Innova (7  1)">Toyota Innova (7 + 1)</option>
<option value="Tempo Traveller (12  1) (Non A/C)">Tempo Traveller (12 + 1) (Non A/C)</option>
<option value="Tempo Traveller (12  1) (A/C)">Tempo Traveller (12 + 1) (A/C)</option>


</select></td>
</tr>


<tr>
<td class="dd">Base Fare (for 40 KM):</td>
<td><input type="text" name="fare" id="fare"></td>
</tr>
<tr>
<td class="dd">Distance Fare (per KM):</td>
<td><input type="text" name="dfare" id="dfare"></td>
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
<td class="dd">Address:</td>
<td><input type="text" name="address" id="address"></td>
</tr>


<tr>
<td class="dd">License No:</td>
<td><input type="text" name="lno" id="lno"></td>
</tr>
<td class="dd">Cab Picture:</td>
<td><input type="file" name="cab" id="cab"></td>
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
</body>
</html>