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
if(isset($_REQUEST['insert']))
{
	// echo"<script>alert('hai')</script>";
	$disorder=$_REQUEST['dis'];
	$disease=$_REQUEST['disease'];
	$symp=$_REQUEST['symp'];
	$medicine=$_REQUEST['medicine'];
	$syrub=$_REQUEST['syrub'];
	$tablet=$_REQUEST['tablet'];
	$morning=$_REQUEST['morning'];
	
	$afternoon=$_REQUEST['afternoon'];
	$evening=$_REQUEST['evening'];
	
	$q="insert into druginfo(disorder,disease,symptoms,medicine,syrub,tablet,morning,afternoon,evening) values('$disorder','$disease','$symp','$medicine','$syrub','$tablet','$morning','$afternoon','$evening')";
	
	$res=mysqli_query($con,$q);
//	or die('error in query');
	
	echo "".mysqli_error($con);
	
	echo "<script>alery('Record inserted successfully')</script>";

	
	mysqli_close($con);
	//$disorder=$_REQUEST['dis'];
	
	
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
</td></tr><tr height="30">
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
<tr><td colspan="2" height="600"><img src="1.jpg"  >
</td>
<td colspan="3">
<table  border="0" cellspacing="10" cellpadding="10" align="center">
<tr><th colspan="2" align="center">
<img src="images/logo.jpg">
</th></tr>
<tr>
<td>Disorder:</td>
<td><input type="text" name="dis" id="dis"></td>
</tr>
<tr>
<td>Disease:</td>
<td><input type="text" name="disease" id="disease"></td>
</tr>
<tr>
<td>Symptoms:</td>
<td><input type="text" name="symp" id="symp"></td>
</tr>
<tr>
<td><b>Drug Used</b></td></tr>
<tr><td>Medicine</td><td><input type="text" name="medicine" id="medicine"></td></tr>
<tr><td>Syrub</td><td><input type="text" name="syrub" id="syrub"></td></tr>
<tr><td>tablet</td><td><input type="text" name="tablet" id="tablet"></td></tr>
<tr>
<td><b>Dosage</b></td></tr>
<tr><td>Morning</td><td><input type="text" name="morning" id="morning"></td></tr>
<tr><td>Afternoon</td><td><input type="text" name="afternoon" id="afternoon"></td></tr>
<tr><td>Evening</td><td><input type="text" name="evening" id="evening"></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="insert" id="insert" value="Insert">
&nbsp;&nbsp;
<input type="reset" name="clear" id="clear" value="Clear">
</td></tr>
  <tr><td colspan="2" align="right">
<a href="Home.php">Back</a>
</td></tr>

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
