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
<tr><th>Customer Feedback Information</th></tr>
<tr>
<td>
<?php

$q="select *from customerfeedback";

$result=mysqli_query($con,$q);

echo mysqli_error($con);
echo "<table align='center' border='1' cellpadding='10' >";
echo "<tr><th>No</th><th>Customer Id</th><th>Customer Name</th><th>Subject</th><th>Details</th></tr>";
while($r=mysqli_fetch_assoc($result))
{
	echo "<tr><td>",$r['fid']."</td><td>".$r['cid']."</td><td>".$r['cname']."</td><td>".$r['subject']."</td><td>".$r['feedback']."</td></tr>";
}
echo "</table>";

?>
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