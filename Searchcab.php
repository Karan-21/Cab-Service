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
<tr>
<td colspan="4">
<table  border="0" cellspacing="10" cellpadding="10" align="center">
<tr><th align="right">
<?php if(isset($_SESSION['customer'])){echo "Welcome ".$_SESSION['customer'];}?>
</th></tr>
<tr><th align="center"><font size='5'>Cab Details</font></th></tr>
<tr><td colspan="2">
<?php

$q="select *from cabinfo";

$result=mysqli_query($con,$q) or die('error in query');

echo "<table border='0' cellpadding='10'>";
while($r=mysqli_fetch_assoc($result))
{
	$cabid=$r['cabno'];
    
	echo "<tr><td><table style='border:1px solid black;' width='700'>";
	$pic=$r['picture'];
	$mod=$r['cabmodel'];
	echo "<tr>";
	echo "<td rowspan='5'><img src='cab/".$pic."' width='150' height='150'></td><td>Model:</td><td>".$r['cabmodel']."</td><td rowspan='5'><a href='Cabbooking.php?caid=$cabid&model=$mod'><img src='images/book.png'></a></td></tr>";
	echo "<td>Base Fare: Rs.</td><td>".$r['basefare']."</td></tr>";
	echo "<td>Fare (per KM): Rs.</td><td>".$r['dfare']."</td></tr>";
	echo "<td>Driver Name:</td><td>".$r['drivername']."</td></tr>";
	echo "<td>Contact: </td><td>".$r['contact']."</td></tr>";
	echo "</tr>";
	echo "</table></td></tr>";
}

echo "</table>";

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