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
if(isset($_REQUEST['reply']))
{
	$an=$_REQUEST['ans'];
	$id=$_REQUEST['aa'];
	$qq="update querydetail set answer='$an',status=1 where qid=$id";
	$result=mysqli_query($con,$qq);
	echo "".mysqli_error($con);
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


<tr>
<td colspan="5">
<table border="0" width="100%">
<tr><td colspan="2" align="right" width="100%"><?php
	session_start();
	$docid=$_SESSION['doctorid'];
	$docname=$_SESSION['doctorname'];
	
	echo "<br><br>";
echo "Welcome ".$docname;

?></td></tr>
</table>
<table  border="0"  cellspacing="10" cellpadding="10" align="center">
<tr><th colspan="2" align="center">Patient Query Details</th></tr>
<tr>
<td>Query:</td><td><?php $qd=$_REQUEST['qu']; echo $qd;?></td></tr>
<tr>
<td>Answer:</td><td><textarea name="ans" id="ans"></textarea></td>
</tr>
<tr><td colspan="2" align="center"><input type="submit" name="reply" id="reply" value="Reply">
<input type="reset" name="reset" id="reset" value="Reset">
</td></tr> 
</table>
</td>
</tr>
<tr><td height="50" colspan="5">
<br><br>
<marquee><p class="pp">Copyright @ 2020 INTEGRAL HOSPITAL</p>

</marquee>
</form>
</body>
</html>
