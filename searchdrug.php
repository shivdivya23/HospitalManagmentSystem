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

</style>
</head>
<body style="background-image:url(images/b6.jpg);background-size:100% 100%;">
<?php
require("DB.php");
?>
<form name="f" method="post" action="">
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
<a href="Home.php" class="aa">Home</a>
</td>

<td class="bb">
<a href="Login.php" class="aa">Login</a>
</td>

<td class="bb">
<a href="Doctorregis.php"class="aa">Doctor Regis</a>
</td>

<td class="bb">
<a href="Patientregis.php"class="aa">Patient Regis</a>
</td>

<td class="bb">
<a href="searchdrug.php"class="aa">Drug Info</a>
</td>

</tr>

</td>
</tr>
<tr><td colspan="5" height="500">
<table cellspacing="10" cellpadding="10" align="center">
<tr>
<td colspan="2" align="center">Search Drug Information</td></tr>
<tr>
<td>Disease:</td><td><input type="text" name="disease" id="disease"></td>
</tr>
<tr>
<td>Symptoms:</td><td><input type="text" name="Symptom" id="Symptom"></td>
</tr>
<tr><td colspan="2" align="center">
<input type="submit" name="search" id="search" value="Medicine">
<input type="reset" name="clear" id="clear" value="Clear">
</td></tr>
<tr><td colspan="2">
<?php
if(isset($_REQUEST['search']))
{
	$des=$_REQUEST['disease'];
	$sym=$_REQUEST['Symptom'];
    
	$q="select *from druginfo where disease like '%$des%' or symptoms like '%$sym%'";
	$result=mysqli_query($con,$q);
	echo "<table border='2' align='center'>";
	echo "<tr><th>Disease</th><th>Symptoms</th><th>Medicine</th><th>Syrub</th><th>Tablet</th><th>Morning</th><th>Afternoon</th><th>Evening</th></tr>";
	while($r=mysqli_fetch_assoc($result))
	{
		echo "<tr><td>".$r['disease']."</td><td>".$r['symptoms']."</td><td>".$r['medicine']."</td><td>".$r['syrub']."</td><td>".$r['tablet']."</td><td>".$r['morning']."</td><td>".$r['afternoon']."</td><td>".$r['evening']."</td></tr>";
		
		
	}
	echo "</table>";
	
}
?>
</td></tr>
<tr><td colspan="2" align="right">
<a href="Home.php">Back</a>
</td></tr>
</table>
</td>
<tr><td height="50" colspan="5">
<br><br>
<marquee><p class="pp">Copyright @ 2016 Crystal Medical Info</p>

</marquee>
</td></tr>
</table>
</form>

</body>
</html>
