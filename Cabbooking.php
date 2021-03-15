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
session_start();
?>
<?php
if(isset($_REQUEST['book']))
{
	$cname=$_REQUEST['cname'];
	$cdate=$_REQUEST['cdate'];
	$bdate=$_REQUEST['bdate'];
	$btime=$_REQUEST['btime'];
	$source=$_REQUEST['source'];
	$dest=$_REQUEST['dest'];
	$cusid=$_SESSION['cid'];
	
	$cabid=$_REQUEST['caid'];
	$cabmodel=$_REQUEST['model'];
	//$q="select *from bookingdetail where 
	
	$q="insert into bookingdetail(cabid,cabmodel,cusid,cname,cdate,bookingdate,bookingtime,source,dest,status) values($cabid,'$cabmodel',$cusid,'$cname','$cdate','$bdate','$btime','$source','$dest','Booked')";
	
	$result=mysqli_query($con,$q);
	
	$id=mysqli_insert_id($con);
	
	echo mysqli_error($con);
	echo "<script>alert('Cab Booked Successfully.. Your Id is $id')</script>";
	
	
	
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
<a href="Searchcab.php" class="aa">Search Cab</a></td>
<td class="a">
<a href="Customerbookinfo.php" class="aa">Booking</a></td>
<td class="a">
<a href="Feedback.php" class="aa">Feedback</a></td>
<td class="a">
<a  href="Home.php" class="aa">Logout</a></td>
</tr>
<tr><th colspan="4" align="right"><br>
<?php if(isset($_SESSION['customer'])){echo "Welcome ".$_SESSION['customer'];}?>&nbsp;&nbsp;&nbsp;
</th></tr>
<tr>

<td colspan="4">
<table  border="0" cellspacing="10" cellpadding="10" align="center">

<tr><th align="center"><font size='5'>Cab Booking</font></th></tr>
<tr><td colspan="2">
<table cellpadding="10">
<tr><td>Customer Name:</td><td><input type="text" name="cname" id="cname"></td></tr>
<tr><td>Date:</td><td><input type="text" name="cdate" id="cdate" readonly value="<?php echo date("y/m/d");?>"></td></tr>
<tr><td>Booking Date:</td><td><input type="date" name="bdate" id="bdate"></td></tr>
<tr><td>Booking Time:</td><td><input type="time" name="btime" id="btime"></td></tr>
<tr><td>Source Place:</td><td><input type="text" name="source" id="source"></td></tr>
<tr><td>Destination Place:</td><td><input type="text" name="dest" id="dest"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="book" id="book" value="Book">
<input type="reset" name="reset" id="reset" value="Reset">
</td></tr>
</table>
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