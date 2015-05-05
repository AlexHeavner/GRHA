<?php
require_once 'dbOps.php';
require_once 'htmlfuncs.php';

$username = array_key_exists('username', $_POST) ? $_POST['username'] : null;
$tempPassword = array_key_exists('password', $_POST) ? $_POST['password'] : null;
	
//Salt and hash the password. Function Located in htmlfuncs.php
$password = saltPassword($tempPassword);

$usernameLookup = "SELECT username FROM admin WHERE username='$username' and password='$password'";
$lookup = mysql_query($usernameLookup) or die ("Database Error".mysql_error());

$row = mysql_fetch_array($lookup);

if($row != false)
{	
	session_start();
	echo("Login Succesful");
	$_SESSION['login'] = 1;
	$_SESSION['username'] = $username;
	$_SESSION['admin'] = 1;
}
else
{
	echo "Sorry, unknown username and/or password";
}
?>