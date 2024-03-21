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
<?php
if(isset($_REQUEST['register']))
{
	$dname=$_REQUEST['dname'];
	$age=$_REQUEST['age'];
	$gender="";
	if(isset($_REQUEST['gender']))
	{
	
		$gender=$_REQUEST['gender'];
		
	}
	$address=$_REQUEST['address'];
	$city=$_REQUEST['city'];
	$contact=$_REQUEST['contact'];
	$special=$_REQUEST['special'];
	$uname=$_REQUEST['uname'];
	$pass=$_REQUEST['pass'];
	$confirm=$_REQUEST['confirm'];
	$q="insert into doctordetail(dname,age,gender,addres,city,contact,special,username,pass,confirm) values('$dname',$age,'$gender','$address','$city',$contact,'$special','$uname','$pass','$confirm')";
	$result=mysqli_query($con,$q);
	echo " ".mysqli_error($con);
	echo "<script>alert('Registered Successfully!!!')</script>";	
	
}
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
<tr><td colspan="5" height="500" align="center">

<table border="0" cellspacing="10" cellpadding="10">
<tr><td colspan="2" align="center">Doctor Registration</td></tr>
  <tr>
    <td>Name of the Doctor:</td>
    <td><input type="text" name="dname" id ="dname"></td>
  </tr>
  <tr>
    <td>Age</td>
    <td><input type="text" name="age" id ="age"></td>
  </tr>
  <tr>
    <td>Gender</td>
    <td><input type="radio" name="gender" id="gender" value="Male" >Male<input type="radio" name="gender" id="gender" value="Female">Female</td>
  </tr>
  <tr>
    <td>Address:</td>
    <td><textarea name="address" id="address"></textarea></td>
  </tr>
  <tr>
    <td>City</td>
    <td><input type="text" name="city" id ="city"></td>
  </tr>
  <tr>
    <td>Contact No:</td>
    <td><input type="number" name="contact" id ="contact"></td>
  </tr>
  <tr>
    <td>Specialization</td>
    <td><select name="special" id="special">
    <option value="Cardiologist ">Cardiologist </option>
    <option value="ENT ">ENT </option>
    
    <option value="Neurologist">Neurologist </option>
    <option value="Oncologist">Oncologist</option>
    <option value="Gastrologist ">Gastrologist </option>
    <option value="Radiologists ">Radiologists </option>
    
    </select></td>
  </tr>
  <tr>
    <td>UserName:</td>
    <td><input type="text" name="uname" id ="uname"></td>
  </tr>
  <tr>
  <tr>
    <td>Password:</td>
    <td><input type="password" name="pass" id="pass"></td>
  </tr>
  <tr>
    <td>Confirm Password:</td>
    <td><input type="password" name="confirm" id="confirm"></td>
  </tr>
  <tr><td colspan="2" align="center">
  <input type="submit" id="register" name="register" value="Register">
  <input type="reset" id="clear" name="clear" value="Clear">
  </td></tr>
  <tr><td colspan="2" align="right">
<a href="Home.php">Back</a>
</td></tr>
</table>


</td></tr>
<tr><td height="50" colspan="5">
<br><br>
<marquee><p class="pp">Copyright @ 2016 Crystal Medical Info</p>

</marquee>
</td></tr>
</table>
</form>

</body>
</html>
