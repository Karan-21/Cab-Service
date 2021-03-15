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
<tr><th colspan="3" align="center">Booking Details<br><br></th></tr>
<tr><td>Select Date:</td><td><input type="date" name="bdate" id="bdate"></td><td><input type="submit" name="search" id="search" value="Search"></td></tr>
<tr><td>Cab Model:</td><td>

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


</select>
</td><td><input type="submit" name="modelsearch" id="modelsearch" value="Search"></td></tr>

<tr><td colspan="3">
<?php
if(isset($_REQUEST['search']))
{
	$d=$_REQUEST['bdate'];
	$q="select *from bookingdetail where bookingdate='$d'";
	$result=mysqli_query($con,$q);
	echo mysqli_error($con);
	echo "<table border='2' align='center' cellpadding='10'>";
	echo "<tr><th>Booking No</th><th>Cab No</th><th>Model</th><th>Customer</th><th>Date</th><th>Booking Time</th><th>Source</th><th>Destination</th><th>Status</th></tr>";

	while($r=mysqli_fetch_assoc($result))
	{
		echo "<tr><td>".$r['bid']."</td><td>".$r['cabid']."</td><td>".$r['cabmodel']."</td><td>".$r['cname']."</td><td>".$r['cdate']."</td><td>".$r['bookingtime']."</td><td>".
	$r['source']."</td><td>".$r['dest']."</td><td>".$r['status']."</td></tr>";
	}
	echo "</table>";
}
else if(isset($_REQUEST['modelsearch']))
{
	$d=$_REQUEST['model'];
	$q="select *from bookingdetail where cabmodel='$d'";
	$result=mysqli_query($con,$q);
	echo mysqli_error($con);
	echo "<table border='2' align='center' cellpadding='10'>";
	echo "<tr><th>Booking No</th><th>Cab No</th><th>Customer</th><th>Date</th><th>Booking Date</th><th>Booking Time</th><th>Source</th><th>Destination</th><th>Status</th></tr>";

	while($r=mysqli_fetch_assoc($result))
	{
		echo "<tr><td>".$r['bid']."</td><td>".$r['cabid']."</td><td>".$r['cname']."</td><td>".$r['cdate']."</td><td>".$r['bookingdate']."</td><td>".$r['bookingtime']."</td><td>".
	$r['source']."</td><td>".$r['dest']."</td><td>".$r['status']."</td></tr>";
	}
	echo "</table>";
}
?>
</td></tr>
</table>
</td></tr>



<tr><td height="50" colspan="5">
<br><br>
<marquee><p class="pp">Copyright @ 2020 Cab Services</p>

</marquee>
</table>
</body>
</html>