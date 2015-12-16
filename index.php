<?php
session_start();
include_once 'dbconnect.php';

if(isset($_SESSION['user'])!="")
{
	header("Location: home.php");
}

if(isset($_POST['btn-login']))
{

    $fname = mysql_real_escape_string($_POST['fname']);
	$fname = mysql_real_escape_string($_POST['fname']);
	$upass = mysql_real_escape_string($_POST['pass']);
	$res=mysql_query("SELECT * FROM users WHERE fname='$fname'");
	$row=mysql_fetch_array($res);
	
	if($row['password']==md5($upass))
	{
		$_SESSION['user'] = $row['user_id'];
		header("Location: home.php");
	}
	else
	{
		?>
        <script>alert('Invalid username or password! Please try again.');</script>
        <?php
	}
	
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login </title>
<style type="text/css">
<!--
.style1 {
	color: #0066FF;
	font-weight: bold;
}
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
.style13 {
	font-size: 16px;
	font-weight: bold;
}
.style14 {
	font-size: 24px;
	font-weight: bold;
}
.style15 {font-family: Georgia, "Times New Roman", Times, serif}
-->
</style>
</head>
<body background="images/background.png">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="images/header.jpg" width="1000" height="151" /><h2 align="center" class="style15">WELCOME TO COMFORTABLE COACH</h2>
</br></br>
<div align="center">
  <table width="976" border="1">
    <tr>
      <td width="966" height="40"><div align="center" class="style14">! Please login First </div></td>
    </tr>
</table>
  </br>
 
<div align="center">
<table width="1002" height="27" border="0">
    <tr>
      <td><U><span class="style13">Login Form</span></U> </td>
    </tr>
  </table></br>

<form method="post">
<table align="center" width="74%" border="0">
<tr>
<td width="9%">Surname </td>
<td width="91%"><label>
  <input name="sname" type="text" id="sname" placeholder="Your Surname" required/>
</label></td>
</tr>
<tr>
  <td width="9%">First name </td>
  <td><input name="fname" type="text" id="fname" placeholder="Your First Name" required="required" /></td>
</tr>
<tr>
<td>Password</td>
<td><input type="password" name="pass" placeholder="Your Password" reauired/></td>
</tr>
<tr>
<td></td>
<td><button name="btn-login" type="submit" class="style1">Login</button>
  <label></label></td>
</tr>
<tr>
<td><a href="register.php"></a></td>
<td><a href="register.php">Register</a></td>
</tr>
</table>
</form>
</div>
</center>
<iframe src="htt