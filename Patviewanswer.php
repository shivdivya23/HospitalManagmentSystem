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
<a href="PatientQuery.php" class="aa">Query</a>
</td>

<td class="bb">
<a href="Patviewanswer.php" class="aa">Inbox</a>
</td>

<td class="bb">
<a href="Patientprofile.php"class="aa">Profile</a>
</td>

<td class="bb">
<a href="Patienthistory.php"class="aa">History</a>
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
	$patid=$_SESSION['patientid'];
	$pfname=$_SESSION['patientfname'];
	$plname=$_SESSION['patientlname'];
	echo "<br><br>";
echo "Welcome ".$pfname." ".$plname;

?></td></tr>
</table>
<table  border="0"  cellspacing="10" cellpadding="10" align="center">
<tr><th align="center">Doctor's Reply</th></tr>
<tr><td>
<?php
$patid=$_SESSION['patientid'];

$q="select *from querydetail where pid=$patid and status=1";

$result=mysqli_query($con,$q) or die("error in query detail stmt..");
echo "<table border='2' align='center' cellpadding='10'>";
echo "<tr><th>Query No</th><th>Query</th><th>Answer</th></tr>";
while($r=mysqli_fetch_assoc($result))
{
	
	echo "<tr><td>".$r['qid']."</td><td>".$r['query']."</td><td>".$r['answer']."</td></td></tr>";
}
echo "</table>";
?>

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
