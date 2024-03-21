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
<form name="f" method="post" action="" enctype="multipart/form-data">
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
<a href="Docprofile.php"class="aa">Profile</a>
</td>

<td class="bb">
<a href="Docclarify.php" class="aa">View Query</a>
</td>

<td class="bb">
<a href="Docpatdetail.php" class="aa">Patient Detail</a>
</td>

<td class="bb">
<a href="Docpatreportdetail.php"class="aa">Patient Report</a>
</td>

<td class="bb">
<a href="Home.php"class="aa">Logout</a>
</td>

</tr>

</td>
</tr>
<tr>
<td colspan="5">
<table border="0" width="100%">

<tr><td colspan="2" align="right" width="100%"><?php
	session_start();
	$docid=$_SESSION['doctorid'];
	$docname=$_SESSION['doctorname'];
	
	echo "<br><br>";
echo "Welcome ".$docname;

$q="select *from doctordetail where did=$docid";
$result=mysqli_query($con,$q);
echo "".mysqli_error($con);
while($r=mysqli_fetch_assoc($result))
{
	$dname=$r['dname'];
	$age=$r['age'];
	$gender=$r['gender'];
	$address=$r['addres'];
	$city=$r['city'];
	$contact=$r['contact'];
	$special=$r['special'];
	
}

?></td></tr>
</table>
<table  border="0"  cellspacing="10" cellpadding="10" align="center">
<tr><th colspan="2" align="center">My Profile</th></tr>
<tr><td>Doctor Name:</td><td><input type="text" name="doctorname" id="doctorname" readonly value="<?php if(isset($dname)){echo$dname;}?>"></td></tr>
<tr><td>Age:</td><td><input type="text" name="age" id="age" readonly value="<?php if(isset($age)){echo$age;}?>"></td></tr>
<tr><td>Gender:</td><td><input type="text" name="gender" id="gender" readonly value="<?php if(isset($gender)){echo$gender;}?>"></td></tr>
<tr><td>Address:</td><td><input type="text" name="address" id="address" readonly value="<?php if(isset($address)){echo$address;}?>"></td></tr>
<tr><td>City:</td><td><input type="text" name="city" id="city" readonly value="<?php if(isset($city)){echo$city;}?>"></td></tr>
<tr><td>Contact:</td><td><input type="text" name="contact" id="contact" readonly value="<?php if(isset($contact)){echo$contact;}?>"></td></tr>
<tr><td>Department:</td><td><input type="text" name="department" id="department" readonly value="<?php if(isset($special)){echo$special;}?>"></td></tr>
</table>
</td>
</tr>
<tr><td height="50" colspan="5">
<br><br>
<marquee><p class="pp">Copyright @ 2016 Crystal Medical Info</p>

</marquee>
</form>
</body>
</html>
