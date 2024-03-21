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

</style>
</head>
<body onLoad="demo();" style="background-image:url(images/b6.jpg);background-size:100% 100%;">
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
<h1 style="color:darkcyan"><br>Welcome to Crystal Medical Data,</h1>
<p class="ss">“Crystal Medical Information” provides crystal data
<br>
 about any deceases or symptoms.
<br>
 It coordinates the doctor and patient network.<br>
 The patient medical history also maintained in the system.
<br> Our proposed system aims to build an environment where<br>
 various patients needing doctor 
 <br>
 help at their home can consult doctors tell <br>
 then their issues and discuss remedies. 
 <br>
 It also consists of a doctor’s login panel where doctor may 
 <br>
 login to the system and then see patient requests for consultations.
 <br>
 The system will prove helpful to 
 <br>urgent cases that do not reach hospital, for emergency cases that 
 <br>do not have doctors in area, during late night emergencies and also for
<br>
 preliminary examination of patients.

</p>
<tr><td height="50" colspan="5">
<br><br>
<marquee><p class="pp">Copyright @ 2016 Crystal Medical Info</p>

</marquee>
</body>
</html>
