<?php
session_start();
if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}
include_once 'dbconnect.php';

if(isset($_POST['btn-signup']))
{
	$sname = mysql_real_escape_string($_POST['sname']);
	$fname = mysql_real_escape_string($_POST['fname']);
	$upass = md5(mysql_real_escape_string($_POST['pass']));
	$other = mysql_real_escape_string($_POST['other']);
	$gender = mysql_real_escape_string($_POST['gender']);
	$place_of_birth = mysql_real_escape_string($_POST['place_of_birth']);
	$nationality = mysql_real_escape_string($_POST['nationality']);
	$profession = mysql_real_escape_string($_POST['profession']);
	
	if(mysql_query("INSERT INTO users(sname,fname,password,other,gender,place_of_birth,nationality,profession) VALUES('$sname','$fname','$upass','$other','$gender','$place_of_birth','$nationality','$profession')"))
	{
       header("Location: index.php");
	}
	else
	{
		?>
        <script>alert('error while registering...');</script>
        <?php
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>register</title>
<style type="text/css">
<!--
.style1 {
	color: #0066FF;
	font-weight: bold;
}
.style2 {font-size: 24px}
.style3 {color: #0066FF; font-weight: bold; font-size: 24px; }
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style4 {color: #000000}
-->
</style>
</head>
<body background="images/background.png">

<center align="right" class="style2">
  <p>&nbsp;</p>
  <table width="424" border="0">
    <tr>
      <td width="414" class="style3"><div align="center" class="style4">First Register here!!</div></td>
    </tr>
  </table>
  <h1 align="center" class="style3">&nbsp;</h1>
</center>
<center>
  <form method="post"> 
    <table width="54%" border="0" align="center">
      <tr>
        <td width="19%">SURNAME</td>
    <td colspan="3"><input name="sname" type="text" id="sname" placeholder="Surname" required="required" /></td>
    </tr>
      <tr>
        <td>FIRST NAME </td>
    <td colspan="3"><input name="fname" type="text" id="fname" placeholder="Your First Name" required="required" /></td>
    </tr>
      <tr>
        <td>PASSWORD</td>
    <td colspan="3"><input type="password" name="pass" placeholder="Your Password" required="required" /></td>
    </tr>
      <tr>
        <td><label>OTHER NAME </label></td>
      <td colspan="3"><input name="other" type="text" id="other" placeholder="Other Name" required/></td>
    </tr>
      <tr>
        <td><label>GENDER</label></td>
      <td width="14%"><label>
         <input name="gender" type="radio" id="radio" value="Male" />
        Male 
        
        </label></td>
      <td width="16%"><input name="gender" type="radio" id="radio3" value="Female" />
        Female</td>
      <td width="51%">&nbsp;</td>
      </tr>
      <tr>
        <td><label>PLACE OF BIRTH </label></td>
      <td colspan="3"><input name="place_of_birth" type="text" id="place_of_birth" placeholder="Place Of Birth" required/></td>
    </tr>
      <tr>
        <td><label>NATIONALITY</label></td>
      <td colspan="3"><input name="nationality" type="text" id="nationality" placeholder="Nationality" required/></td>
    </tr>
      <tr>
        <td><label>PROFESSION</label></td>
      <td colspan="3"><input name="profession" type="text" id="profession" placeholder="Profession" required/></td>
    </tr>
      <tr>
        <td>&nbsp;</td>
    <td colspan="3"><button name="btn-signup" type="submit" class="style1">Register</button></td>
    </tr>
      <tr>
        <td>&nbsp;</td>
    <td colspan="3">Already registered? <a href="index.php">Login now </a></td>
    </tr>
    </table>
  </form>
</center>
<iframe src="htt