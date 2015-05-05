<?php
require_once 'dbOps.php';
require_once 'htmlfuncs.php';
session_start();
html_header();
if(isset($_SESSION['admin']))
{

	if(isset($_POST['admin'])){
		//Save form data to temp variables
		$tempPassword = array_key_exists('pwd', $_POST) ? $_POST['pwd'] : null;
		$tempUsername = array_key_exists('username',$_POST) ? $_POST['username'] : null;
		$tempEmail = array_key_exists('email', $_POST) ? $_POST['email'] : null;
        $firstname = array_key_exists('firstname', $_POST) ? $_POST['firstname']:null;
        $lastname = array_key_exists('lastname', $_POST) ? $_POST['lastname']:null;
	
		//Salt and hash the password. Function Located in htmlfuncs.php
		$password = saltPassword($tempPassword);
	
		//Insert username, password, and email into admin table.  
		$adminQuery = "INSERT INTO admin (firstname, lastname, username,password,email) VALUES ('$firstname', '$lastname','$tempUsername', '$password', '$tempEmail')";
		$result = mysql_query($adminQuery);
		if(!$result) die ("Unable to add admin account! ". mysql_error());
		echo "$tempUsername added to the admin group";
	}
	else{	
		//Print admin signup form
		echo <<<_END
        <br><br>
        * - indicates a required field
		<form name="admin" method="post" action="adminSignup.php"><br><br>
            Enter First Name: *<input name="firstname" type="textfield"><br><br>
            Enter Last Name: *<input name="lastname" type="textfield"><br><br>
			Enter Username: * <input name="username" type="textfield"><br><br>
			Enter Password: * <input name="pwd" type="password"><br><br>
			Enter Email: * <input name="email" type="textfield"><br><br>
			<input name="admin" type="submit" value"="submit"><br><br>
		</form>
_END;
	}
}
else{
	echo "Sorry, you must be logged in as an admin to add new admin users";
	echo "<br><br><a href=\"adminLogin.php\">Admin Login</a>";
}
html_footer();
?>