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
<a href="Docprofile.php"class="aa">Profile</a>
</td>

<td class="bb">
<a href="Docclarify.php" class="aa">View Query</a>
</td>

<td class="bb">
<a href="Docpatdetail.php" class="aa">Patient Detail</a>
</td>

<td class="bb">
<a href="#"class="aa">Patient Report</a>
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
<tr><td colspan="2" align="right" width="100%">
    <?php
	session_start();
	$docid=$_SESSION['doctorid'];
	$docname=$_SESSION['doctorname'];
	
	echo "<br><br>";
echo "Welcome ".$docname;

?></td></tr>
</table>
<table  border="0"  cellspacing="10" cellpadding="10" align="center">
<tr><th>Patient Query Details</th></tr>
<tr>
<td>
<?php
$docid=$_SESSION['doctorid'];

$q="select *from querydetail where did=$docid and status=0";

$result=mysqli_query($con,$q) or die("error in query detail stmt..");
echo "<table border='2' align='center' cellpadding='10'>";
echo "<tr><th>Patient No</th><th>Patient Name</th><th>Query</th><th>Action</th></tr>";
while($r=mysqli_fetch_assoc($result))
{
	$id=$r['qid'];
	$query=$r['query'];
	echo "<tr><td>".$r['pid']."</td><td>".$r['pname']."</td><td>".$r['query']."</td><td><a href='Docanswer.php?aa=$id&qu=$query'>Answer</a></td></tr>";
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
