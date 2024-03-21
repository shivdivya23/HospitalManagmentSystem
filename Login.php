<html>
<head>
<title>Crystal Medical Data</title>
<script>
var a=new Array(4);
a[0]=new Image();
a[0].src="images/DOCTORS.png";

a[1]=new Image();
a[1].src="images/1.png";

a[2]=new Image();
a[2].src="images/2.png";

a[3]=new Image();
a[3].src="images/4.png";

var i=0;
function demo()
{
	document.getElementById("m1").src=a[i].src;
	i++;
	if(i==4)
		i=0;
	
	setTimeout("demo()",2000);
}
</script>
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
<body onLoad="demo();" style="background-image:url(images/b6.jpg);background-size:100% 100%;">
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
				header("location:Drugdetail.php");
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
<tr><td colspan="2" height="600"><img src="" id="m1"  width="400"height="500">
</td>
<td colspan="3">
<table  border="0" cellspacing="10" cellpadding="10" align="center">
<tr>
<td class="dd">UserName:</td>
<td><input type="text" name="user" id="user"></td>
</tr>
<tr>
<td class="dd">Password:</td>

<td><input type="password" name="pass" id="pass"></td>
</tr>
<tr>
<td class="dd" colspan="2" align="center">
<input type="radio"name="category" id="category" value="Admin">Admin
<input type="radio"name="category" id="category" value="Doctor">Doctor
<input type="radio"name="category" id="category" value="Patient">Patient

</td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="signin" id="signin" value="Sign In">
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
