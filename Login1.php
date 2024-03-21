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
<body background="images/SMRT Scenes-072.jpg">
<?php
require("DB.php");
?>
<form name="f" method="post" action="">
<?php
if(isset($_REQUEST['signin']))
{
	//  echo"<script>alert('hai')</script>";
	$cat="";
    $uname=$_REQUEST['user'];
    $pwd=$_REQUEST['pass'];
	if(isset($_REQUEST['category']))
	{
		$cat=$_REQUEST['category'];
		if($cat=="Admin")
		{
			$uname=$_REQUEST['user'];
			$pwd=$_REQUEST['pass'];
			if($uname=="admin" && $pwd="admin123")
			{
				header("location:Patientregis.php");
			}
			else
			{
				echo "<script>alert('Invalid Username and password')</script>";
			}
		}
        else if($cat=="Doctor")
        {
        	$q="select *from doctordetail where username='$uname' and pass='$pwd'";
            $result=mysqli_query($con,$q) or die('error in query');
            while($r=mysqli_fetch_assoc($result))
            {
               $did=$r['did'];
               $dname=$r['dname'];
            }
            if(isset($did))
            {
            	session_start();
                $_SESSION['doctorid']=$did;
                $_SESSION['doctorname']=$dname;
                header("location:Docclarify.php");
            }
            else
            {
            	echo "<script>alert('Invalid Username and password')</script>";
            }
            
        }
        else if($cat=="Patient")
        {
        	$q="select *from patientdetail where uname='$uname' and pass='$pwd'";
            $result=mysqli_query($con,$q) or die('error in query');
            while($r=mysqli_fetch_assoc($result))
            {
               $pid=$r['pid'];
               $fname=$r['fname'];
               $lname=$r['lname'];
               
            }
            if(isset($pid))
            {
            	session_start();
                $_SESSION['patientid']=$pid;
                $_SESSION['patientfname']=$fname;
                $_SESSION['patientlname']=$lname;
                 header("location:PatientQuery.php");
            }
            else
            {
            	echo "<script>alert('Invalid Username and password')</script>";
            }
        }
	}
	
}
?>
<table align="center" border="0">

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
<a href="#" class="aa">Login</a>
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
</table>
<tr>
<td colspan="5">
<table width="100%">
<tr>
<td>
<br><br>
<br><br>
<img src="images/r1.jpg" width="350" height="200">

</td>
<td rowspan="2" >

<table  border="0" cellspacing="10" cellpadding="10">
<tr>
<td>UserName:</td>
<td><input type="text" name="user" id="user"></td>
</tr>
<tr>
<td>Password:</td>

<td><input type="password" name="pass" id="pass"></td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="radio"name="category" id="category" value="Admin">Admin
<input type="radio"name="category" id="category" value="Doctor">Doctor
<input type="radio"name="category" id="category" value="Patient">Patient

</td></tr>
    <tr><td colspan="2" align="center"><input type="submit" name="signin" id="signin" value="Sign In">
&nbsp;&nbsp;
<input type="reset" name="clear" id="clear" value="Clear">
</td></tr>
<tr><td colspan="2" align="right">

<a href="home.php">Back</a>
</td></tr>
</table>
<tr><td>
<br>
<img src="images/r2.jpg" width="350" height="200" >

</td></tr>


<tr><td height="50" colspan="5">
<br><br>
<marquee><p class="pp">Copyright @ 2020 INTEGRAL UNIVERCITY</p>

</marquee>



</body>
</html>
