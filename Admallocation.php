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
<?php
if(isset($_REQUEST['allocate']))
{
	
	$patientid=$_REQUEST['patient'];
	$doctorid=$_REQUEST['doctor'];
	$q="update patientdetail set did=$doctorid where pid=$patientid";
	$result=mysqli_query($con,$q);
	echo "".mysqli_error($con);
	echo "<script>alert('Allocated Successfully!!!')</script>";	
	
}
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
<tr><td colspan="2" height="600"><img src="images/d2.png"   >
</td>
<td colspan="3">
<table  border="0" cellspacing="10" cellpadding="10" align="center">
<tr><td>Select Doctor:</td><td><select name="doctor" id="doctor">
<?php

$q="select did,dname,special from doctordetail";

$result=mysqli_query($con,$q);

while($r=mysqli_fetch_assoc($result))
{
	$a=$r['dname'];
	$s=$r['special'];
	$d=$r['did'];
	echo "<option value='$d'>".$a."  ".$s."</option>";
}


?>

</select></td></tr>

<tr><td> Select Patient:</td><td><select name="patient" id="patient">
<?php

$q1="select pid,fname,lname,problem from patientdetail where did=0";

$result1=mysqli_query($con,$q1);

while($r1=mysqli_fetch_assoc($result1))
{
	$f=$r1['fname'];
	$l=$r1['lname'];
	$p=$r1['pid'];
	$pr=$r1['problem'];
	echo "<option value='$p'>".$f." ".$l." ".$pr."</option>";
}


?>

</select></td></tr>

<tr><td colspan="2" align="center"><input type="submit" name="allocate" id="allocate" value="Allocate">
<input type="reset" name="reset" id="reset" value="Reset">
</table>
</td>
</tr>
<tr><td height="50" colspan="5">
<br><br>
<marquee><p class="pp">Copyright @ INTEGRAL HOSPITAL</p>

</marquee>
</form>
</body>
</html>
