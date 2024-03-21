<html>
<head>
<title>Crystal Medical Data</title>
<style>
.aa
{
	text-decoration:none;
	color:purple;

}
.bb
{
   width:200px;
   text-align:center;
   background-color:darkcyan;
   
   
}
.bb:hover
{
	background-color:thistle;
}
.ss{
	padding:25px 25px 25px 25px;
	font-size:20px;
	line-height:40px;
	color:deeppink;
}
.pp{
	color:green;
}
.dd{
	color:saddelbrown;
}


</style>
</head>
<body style="background-image:url(images/b6.jpg);background-size:100% 100%;">
<form name="f" method="post" action="">
<?php
require("DB.php");
?>

<table align="center" border="0" cellspacing="0" cellpadding="0" background="images/back3.jpg">
<tr height="150">
<td colspan="5">
<table >

<tr>
<td>
<img src="images/vp2.gif">
</td>
<td>

<font color="green" size="5">INTEGRAL HOSPITAL
</font>
<br><br>
<font color="maroon" size="3">
Concise Drug Info
</td>
<td>
<img src="images/banner.jpg" width="800">
</td>
</tr>
</table>
</td></tr>
<tr height="30">
<td class="bb">
<a href="Drugdetail.php" class="aa">Drug Info</a>
</td>

<td class="bb">
<a href="Admdoctordetail.php" class="aa">Doctor Details</a>
</td>

<td class="bb">
<a href="Admallocation.php"class="aa">Allocation</a>
</td>

<td class="bb">
<a href="Admpatdetaill.php"class="aa">Patient Details</a>
</td>

<td class="bb">
<a href="Home.php"class="aa">Logout</a>
</td>

</tr>


</td>
</tr>
<tr>
<td colspan="5">
<table  border="0" cellspacing="10" cellpadding="10" align="center">
<tr><th>Patient Details</th></tr>
<tr><td>
<?php

$q="select *from patientdetail1";
$result=mysqli_query($con,$q);
echo "".mysqli_error($con);
echo "<table border='2' align='center' cellpadding='10'>";
echo "<tr><th>Patient No</th><th>Patient Name</th><th>DOB</th><th>Age</th><th>Gender</th><th>Address</th><th>City</th><th>Contact</th><th>Education</th><th>BloodGroup</th><th>Problem</th></tr>";
while($r=mysqli_fetch_assoc($result))
{
	echo "<tr><td>".$r['pid']."</td><td>".$r['fname']." ".$r['lname']."</td><td>".$r['dob']."</td><td>".$r['age']."</td><td>".$r['gender']."
	</td><td>".$r['address']."</td><td>".$r['city']."</td><td>".$r['contact']."</td><td>".$r['education']."</td><td>".$r['blood']."</td><td>".$r['problem']."
	</td></tr>";
}
?>

</td></tr>

</table>
</td>
</tr>
<tr><td height="50" colspan="5">
<br><br>
<marquee><p class="pp">Copyright @ 2016 Integral Hospital</p>

</marquee>
</form>
</body>
</html>
